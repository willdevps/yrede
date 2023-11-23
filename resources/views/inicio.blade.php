<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial - YRede</title>
</head>
<body>
    
<div>

<a href="/cadastraUsuarios">Criar Conta</a>
<a href="/login">Login</a>

<a href="/cria-Post">Nova Postagem</a>

</div>

<h1>Posts</h1>

@foreach ($posts as $post)

<div> 
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<html data-theme="light"></html>

<div class="flex w-full items-center justify-around bg-gradient-to-r from-green-400 to-blue-500 p-3 text-center text-2xl antialiased">
  <img class="rounded-full p-2 md:w-[125px]" src="https://img.freepik.com/vetores-premium/logotipo-do-estilo-vintage-retro-do-restaurante_642964-120.jpg" alt="Imagem restaurante topo" />
  <span class="text-white font-extralight"> Restaurante</span>

    <button class="btn">
  meu pedido
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
</button>
  <button class="btn">meu carrinho</button>
  <button class="btn">outros</button>
</div>

<div class=" chat chat-start p-2 bg-gray-950">
    <img class="avatar rounded-full w-20"  src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper-thumbnail.png" /> 
  <div class="chat-bubble animate-pulse">
    Olá tudo bem? <br>Gostaria de realizar o meu pedido.
  </div>
</div>

<div class="chat chat-end bg-gray-950 border-t-2 border-t-white border-opacity-5 p-2"> 
  <div class="chat-bubble animate-pulse">Tudo bem, vamos lá! </div>
<img class="avatar rounded-full w-20" src="https://w7.pngwing.com/pngs/129/292/png-transparent-female-avatar-girl-face-woman-user-flat-classy-users-icon.png" />
</div>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
        </th>
        <th>Pratos</th>
        <th>Ingradientes</th>
        </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="https://cdn0.tudoreceitas.com/pt/posts/6/8/8/strogonoff_de_frango_simples_9886_600_square.jpg" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-serif"><b>strogonoff_de_frango_simples</b></div>
              <div class="text-sm opacity-75">Este prato maravilhoso que nasceu na Rússia e, com o tempo, ganhou novas versões. Se popularizou aqui no Brasil e é muito comum vermos variações da receita feitas com carne bovina, carne de frango, camarões e até vegetarianas!</div>
            </div>
          </div>
        </td>
        <td>
      1 quilograma de peito de frango
½ cebola branca picada (média)
2 colheres de sopa de azeite de oliva
1 colher de sopa de manteiga
3 colheres de sopa de molho inglês
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="https://s2.glbimg.com/9TdlilovjAKdv493upCKo23zVgY=/e.glbimg.com/og/ed/f/original/2021/11/26/costelinha-de-porco-ao-molho-barbecue.jpg" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-serif"><b>costela barbecue</b></div>
              <div class="text-sm opacity-50">Chega o final de semana, e a vontade de preparar algo diferente que você só vê nos restaurantes aparece. A costelinha de porco com molho barbecue é um prato da culinária americana, conhecida mundialmente e apreciada em restaurantes famosos. Não é uma receita complexa de se reproduzir, porém deve-se ter atenção aos tempos na grelha ou no forno. Aprenda o passo a passo desta receita do chef de cozinha Guilherme Guzella.</div>
            </div>
          </div>
        </td>
        <td>
1 peça de costelinha suína (cerca de 800 g)
4 colheres açúcar normal
6 colheres açúcar mascavo
6 colheres sopa de mel
6 colheres sopa de shoyu
4 colheres sopa de ketchup
1 colher de chá sal
1 colher de sopa páprica defumada
1 colher extrato de tomate
2 xícaras caldo de galinha quente
        </td>
       </div>
</div>

<tr>
<td>
<button class="btn">oifsfsfa</button>
</th>



<div>
    Postagem - {($post->id)}
</div>
{($post->mensagem)}
</div>
<hr>

@endforeach
</body>
</html>