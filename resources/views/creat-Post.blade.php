<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
    <title>Postagem</title>
</head>
<body>
    <div class="hero min-h-screen bg-gray-600 p-7">
    <form action="/salva-post" method="post">
 @csrf
    
      <h7 class="text-5xl font-bold text-center justify-center flex p-5">Seja bem vindo!!!</h7> <br>
  <div class="hero-content flex justify-between">
    <img  src="https://sportbuzz.uol.com.br/media/_versions/2023/10/harden-ausente_widemd.jpg" class="border-2 border-y-teal-300 max-h-[200px] rounded-full shadow-2xl" />
    <p class="p-6 ">Deixe aqui o seu comentario ou uma sugestão de melhorias para esse site.</p>
    </div>
          
         <div class="flex items-center justify-center p-3">
<textarea placeholder="Bio" name="mensagem" class="shadow-lg rounded-lg textarea textarea-bordered textarea-lg w-full max-w-xs" ></textarea>
  </div>
<div class="flex justify-center items-center mix-blend-darken">
<button class=" p-2 shadow-lg rounded-3xl border border-teal-300 bg-teal-300" type="submit"> postar</button>
</div>
</body>
</html>