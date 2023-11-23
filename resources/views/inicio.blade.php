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
    
<div class="bg-black-500 ">
  <div class="p-10 flex justify-around">
    <img src="https://img.freepik.com/fotos-premium/um-por-do-sol-rosa-com-palmeiras-no-horizonte_654523-31.jpg" 
    class="max-w-sm rounded-lg shadow-2xl" />
  <h7 class="text-5xl font-bold flex items-center"> Seja bem vindo! </h7> <div>
      
   
      <a class="btn" href="/cadastrausuarios">Criar Conta</a>
      <a class="btn" href="/login">Login</a>
      <a class="btn" href="/post">Nova Postagem</a> </div>
  </div>
</div>

<p class="p-6 shadow-2xl border-b border-b-teal-300 text-center font-serif  ">seus posts aqui</p>
<div class="p-3 grid grid-cols-4 gap-4">
@foreach ($posts as $post)

 <div class="flex gap-4 w-52 ">
  <div class="flex gap-4 items-center">
    <div class="skeleton w-16 h-16 rounded-full shrink-0"></div>
    <div class="flex flex-col gap-4">
      <div class="skeleton h-4 w-20"></div>
      Postagem - {{$post->id}}
      <div>
        {{$post->mensagem}}
      </div>

      <div class="skeleton h-4 w-28"></div>
    </div>
  </div>
  <div class="skeleton h-32 w-full"></div>
</div>

    
@endforeach
</div>
</body>
</html>