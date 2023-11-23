<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
</head>
<body>
<div>
    <form action="/salva-post" method="post">
 @csrf
    <div class="hero min-h-screen bg-zinc-300 p-7">
      <h7 class="text-5xl font-bold text-center justify-center flex p-5">Seja bem vindo!!!</h7> <br>
  <div class="hero-content flex justify-between">
    <img  src="https://www.bing.com/images/blob?bcid=ThIy9hl68lgGxKe1Ip4C1d43Tdjz.....5Q" class="border-2 border-y-teal-300 max-h-[200px] rounded-full shadow-2xl" />
    <p class="p-6 ">Deixe aqui o seu comentario ou uma sugestão de melhorias para esse site.</p>
    </div>
          
         <div class="flex items-center justify-center p-3">
<textarea placeholder="Bio" class="shadow-lg rounded-lg textarea textarea-bordered textarea-lg w-full max-w-xs" ></textarea>
  </div>
<div class="flex justify-center items-center mix-blend-darken">
<button class=" p-2 shadow-lg rounded-3xl border border-teal-300 bg-teal-300" type="submit"> postar</button>
 </div>
</body>
</html>

