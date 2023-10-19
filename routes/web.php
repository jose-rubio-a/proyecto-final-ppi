<?php

use App\Http\Controllers\PublicacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('publicacion.index');
});

//Route::middleware('auth')->group(function(){ } ) para aplicar el auth a un grupo de rutas 
Route::resource('publicacion', PublicacionController::class); //->middleware('auth') para que todas las rutas del resource obliguen a registrarte

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
