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
    <div class="hero min-h-screen bg-black-600 p-7">
    <form action="/salva-post" method="post">
 @csrf
    
      <h7 class="text-5xl font-bold text-center justify-center flex p-5">Seja bem vindo!!!</h7> <br>
  <div class="p-10 flex justify-around ">
    <img  src="https://uploads.metropoles.com/wp-content/uploads/2022/07/08183633/james-harden-3.jpg" class="max-w-sm rounded-lg shadow-2xl border-b-2 border-teal-300" />
    <p class="p-6 ">Deixe aqui o seu comentario ou uma sugestão de melhorias para esse site.</p>
    <textarea placeholder="Bio" name="mensagem" class="shadow-lg rounded-lg textarea textarea-bordered textarea-lg w-full max-w-xs" ></textarea>
    <button class="flex items-center justify-center p-3 shadow-lg rounded-r-3xl border border-teal-300 bg-teal-600" type="submit"> postar</button>
  </div>
          
         
</div>
</body>
</html>