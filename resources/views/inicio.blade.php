<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
    <title>Inicial - YRede</title>
</head>
<body>
<div>
    
<div class="hero min-h-screen bg-gray-600">
  <div class="hero-content flex-col lg:flex-row">
    <img src="https://img.freepik.com/fotos-premium/um-por-do-sol-rosa-com-palmeiras-no-horizonte_654523-31.jpg" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
    
    <h1 class="text-5xl font-bold">Seja bem vindo!</h1>
      <p class="py-6"></p>
      <a class="btn" href="/cadastraUsuarios">Criar Conta</a>
      <a class="btn" href="/login">Login</a>
      <a class="btn" href="/post">Nova Postagem</a>
    </div>
  </div>
</div>

<h1>Posts</h1>

@foreach ($posts as $post)

<div>
    Postagem - {{$post->id}}
</div>
<div>
{{$post->mensagem}}
</div>
<hr>

@endforeach
</body>
</html>