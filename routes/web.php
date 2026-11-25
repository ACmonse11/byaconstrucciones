<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| INICIO
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');



// ========================================
// BLOG BLR & ARCOS
// ========================================

// Página principal del blog
Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog.index');

// Artículo individual
Route::get('/blog/{slug}', [BlogController::class, 'show'])
    ->name('blog.show');


/*
|--------------------------------------------------------------------------
| SERVICIOS
|--------------------------------------------------------------------------
*/

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');


/*
|--------------------------------------------------------------------------
| NOSOTROS
|--------------------------------------------------------------------------
*/

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');


/*
|--------------------------------------------------------------------------
| PROYECTOS
|--------------------------------------------------------------------------
*/

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

Route::get('/proyectos/{slug}', [ProyectoController::class, 'show'])
    ->name('proyectos.show');


/*
|--------------------------------------------------------------------------
| CONTACTO
|--------------------------------------------------------------------------
*/

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->name('contacto.enviar');
