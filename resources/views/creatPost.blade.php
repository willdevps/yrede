<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
</head>
<body>
<div>
    <form action="/salva-post" method="POST">
 @csrf
    <textarea name="mensagem" id= "mensagem" cols="30" rows="10"></textarea>
        <button type="submit"> postar</button>
</form>
 </div>
</body>
</html>

