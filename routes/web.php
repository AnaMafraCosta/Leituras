<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LeiturasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

// Registro de rotas por controlador resources
Route::resource('/leituras', LeiturasController::class);

Route::get('/dashboard/leituras', function () {
    return view('dashboard.inicio');
})->name('inicio'); 
// Registrando rotas individualmente
/* Route::get('/leituras', [LeiturasController::class,'index'])
    ->name('leituras.index'); 

Route::get('/leituras/create', [LeiturasController::class,'create'])
    ->name('leituras.create'); 

Route::post('/leituras/store', [LeiturasController::class,'store'])
    ->name('leituras.store'); 

Route::get('/leituras/show/{id}', [LeiturasController::class,'show'])
    ->name('leituras.show'); */

//Definindo as rotas sem o controlador
    /* Route::get('/dashboard/leituras', function () {
    return view('dashboard.home');
}); */

/* Route::get('/dashboard/leituras/create', function () {
    return view('dashboard.create');
}); */

/* Route::post('/dashboard/leituras/store', function (Request $request) {
    $titulo= $request->post('titulo');
    $autor= $request->post('autor');
    return $titulo . " - " . $autor;
})->name('leituras.store'); */

/* Route::get('/dashboard/leituras/{id}/show', function ($id) {
    return view('dashboard.show', ['livro_id'=> $id]);
}); */


