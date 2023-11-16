<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
   <a href ="/cadastra-usuario">Criar Conta </a>  <br>
   <a href ="/login"> Login </a>
</div>

<div>
    <h1> Posts: <h1>

        @foreach ($posts as $post)
</div>
 Postagem - {{$post->id}}</div>
 {{$post->mensagem}}
</div>
<hr> @endforeach
</body>
</html>

