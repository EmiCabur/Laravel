<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'home']);
Route::get('/quienes-somos',[PageController::class, 'quienessomos']);
Route::get('/contacto',[PageController::class, 'contacto']); // '/algo' es lo qu le agregaré a mi localhost/laravel-project/public/algo
Route::get('/contacto',[PageController::class, 'storeMensaje']);
Route::get('/productos', [ProductoController::class,'index'])->name ('productos.index'); 
Route::get('/productos',[ProductoController::class,'store'])->name('productos.store');
Route::post('/productos/create',[ProductoController::class,'create'])->name('productos.create'); //no poner get porque se muestra toda la ruta y alguien va a poder crear oro formulario, es súper peligroso, por eso siempre post y method:"POST"
Route::get('/productos{producto}',[ProductoController::class,'show'])->name('productos.show');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
en la terminal: php artisan route: list -c le saldrá la lista de rutas

|
*/

/*Route::get('/', function () {
    return 'hola chicos'; //en la pag en vez de la pag de laravelsolo me saldrá eltexto hola chicos
    //return view('welcome');
});

Route::get('/quienes-somos', function () {
    return 'quienes somos'; //en la dirección de http://localhost/laravel-project/public/quienes-somos saldrá el texto quienes somos
    
});

Route::get('/contacto', function (){
    return 'contacto'; // con esto tengo una tercera ruta
});*/
/* CRUDE
 Generalmente tienen 7 rutas*/
 