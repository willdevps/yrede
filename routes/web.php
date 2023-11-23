<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

 
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

    $posts = Post::all();

    return view('inicio', compact('posts'));
});


Route::get('/teste', function () {
    return "TESTADO!!!";
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();

    return view('listaUsuarios', compact('usuarios'));

})->name('lista-usuarios');
 

Route::view('/cadastrousuarios','cadastroUsuarios'); 

Route::post('/salva-usuario', function(Request $request){

    $usuario = new User();
    $usuario->usuario = $request->input('usuario');
    $usuario->nome = $request->input('nome');
    $usuario->bio = $request->input('bio');
    $usuario->email = $request->input('email');
    $usuario->senha = $request->input('senha');
    $usuario->save();

    return "Salvo com sucesso!!!";

})->name('salva-usuario');

Route::view('/login','login')->name('login');

Route::post('/logar',function (Request $request){
   // fazer login

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'],

    ]);
  
    if (Auth::attempt(['email'=>$credentials['email'], 'password' =>$credentials['senha']])){
        $request->session()->regenerate();

        return redirect()->intended('/');
        
    }
    return "Erro ao logar!!! Usuário ou senha inválidos";
});

Route::middleware(['auth'])->group(function () {
Route ::view('/post','creat-Post');
Route::post('/salva-post', function (Request $request) {
    $post = new Post();
    $post->user_id= Auth::id();
    $post->mensagem = $request->mensagem;
    $post->save();
    return redirect('/');
});   
});