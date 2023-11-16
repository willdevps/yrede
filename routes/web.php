<?php
use \App\Models\Post;
use \App\Models\User;
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

    return view('inicial',compact ("posts"));
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
function(Request $requeste){

    $usuario = new User(); 

    $usuario->usuario =$requeste->input('usuario');
    $usuario->nome =$requeste->input('nome');
    $usuario->bio =$requeste->input('bio');
    $usuario->email =$requeste->input('email');
    $usuario->senha =$requeste->input('senha');
    $usuario->save();
    return "Salvo com sucesso!!!";

})->name('salva-usuario');

Route::view('/Login','Login'); 

Route::post('/logar',function (Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ]);
  

    if (Auth::attempt(['email'=>$credentials['email'],'password' =>$credentials['senha']])) {

        $request->session()->regenerate();
        return redirect()->intended('/');
    }
   
return 'Erro ao logar!!! Usuario ou senha invalidos';   
}); 

Route ::view('/new-post','creatPost');
Route ::post('/salva-post', function (Request $request){
    $post = new Post();
    $post->User_id= Auth::id();
    $post->mensagem = $request->mensagem;
    $post->save(); 

    return redirect ("/");

});
