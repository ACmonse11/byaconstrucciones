<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class BlogController extends Controller
{
    /**
     * Obtener artículos del blog.
     */
    private function articulos(): Collection
    {
        return collect(config('blog', []))
            ->sortByDesc('fecha')
            ->values();
    }

    /**
     * Mostrar la página principal del blog.
     */
    public function index()
    {
        $articulos = $this->articulos();

        return view('blog.index', compact('articulos'));
    }

    /**
     * Mostrar un artículo individual.
     */
    public function show(string $slug)
    {
        $articulos = $this->articulos();

        $articulo = $articulos->firstWhere('slug', $slug);

        abort_if($articulo === null, 404);

        $relacionados = $articulos
            ->where('slug', '!=', $slug)
            ->take(3);

        return view('blog.show', compact(
            'articulo',
            'relacionados'
        ));
    }
}
