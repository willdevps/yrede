<?php

use Illuminate\Support\Facades\Route;
use \App\Models\User;
use Illuminate\Http\Request;
 
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', function () {
    return "TESTADO!!!";
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();

    return view('listaUsuarios', compact('usuarios'));

})->name('lista-usuarios');


Route::view('/cadastrousuarios','cadastroUsuarios'); 

Route::post('/salva-usuario', 
function(Request $REQUEST){

    $usaurio = new User(); 

    $usuario->usuario =$requeste ->input('usuario');
    $usuario->nome =$requeste ->input('nome');
    $usuario->bio =$requeste ->input('bio');
    $usuario->email =$requeste ->input('email');
    $usuario->senha =$requeste ->input('senha');
    $usuario->save();
    return "Salvo com sucesso!!!";
    
})->name('salva-usuario');

