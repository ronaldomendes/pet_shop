<!doctype html>

<html lang="pt-br">


<head>

<meta charset="utf-8">

<title>Quem somos - Meu amigo cão</title>
<link href="estilos/principal.css" rel="stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>

</head>


<body id="quemSomos">
<header>
<h1>Meu amigo cão - Petshop</h1>
<div id="anuncio">
<img src="multimidia/anuncio-cantinho-feliz-h.jpg" alt="anúncio - cantinho feliz, hotel para cachorro">
</div>
<section>
<p><a href="boletim.php">Assine o boletim mensal</a></p>
<p>nos acompanhe:</p>
<figure>
    <a href="#"><img src="multimidia/ms-facebook.gif" alt="facebook"></a>
    <a href="#"><img src="multimidia/ms-twitter.gif" alt="twitter"></a>
    <a href="#"><img src="multimidia/ms-youtube.gif" alt="youtube"></a>
    <a href="#"><img src="multimidia/ms-pinterest.gif" alt="pinterest"></a>
    <a href="#"><img src="multimidia/ms-gmais.gif" alt="google plus"></a>
</figure>
</section>
</header>

<nav>
<ul>

    <?php
        $menu =["Home","Quem Somos","Produtos","Banho e Tosa", "Curiosidades"];
        $links = ["index.php","quem-somos.php","produtos.php","banho-e-tosa.php","curiosidades.php"];

        for ($i=0; $i <=4 ; $i++) { 
            echo "<li><a href='$links[$i]'>$menu[$i]</a></li>";
        }
    ?>

</ul>
</nav>
<main>
<h1><img src="multimidia/meuamigocao.jpg" alt="Meu amigo cão - Petshop">Quem somos</h1>

<p>O que nós acreditamos<br>
Na <b>Meu amigo cão</b>, o nosso sucesso como uma organização é conduzida pelo cuidado 
que temos com nossos animais.</p>


<p>Cras semper magna in velit tempus tristique quis non lorem. Mauris vitae fringilla sapien, sed volutpat elit. Fusce molestie euismod odio, ut blandit nulla bibendum ac. Fusce posuere turpis sed sem tincidunt, sed auctor tellus faucibus. Proin ultrices enim vitae ipsum luctus, sed malesuada orci ornare. Vivamus eget molestie magna, sed aliquam risus. Aliquam adipiscing laoreet felis, eget tincidunt purus sollicitudin sit amet. Nulla facilisi.</p>


<p>Donec dapibus nibh eu ipsum elementum, non consectetur massa facilisis. Nam commodo at leo non commodo. In blandit arcu sit amet sem convallis, rutrum gravida quam elementum. Cras accumsan orci vel lectus blandit, at dictum tellus rhoncus. Etiam vitae urna nec leo facilisis auctor a quis lorem. Integer dolor urna, luctus quis consequat vitae, vestibulum non lectus. In turpis mi, tincidunt non iaculis ac, feugiat eget purus. </p>


<hr>
<h2>Visão</h2>


<p>Animais bem cuidados. Donos mais felizes.<br>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec tempus justo, nec sagittis enim. Vestibulum eget augue dui. Vestibulum consequat pretium lectus vitae varius. Etiam facilisis quam et nulla posuere feugiat. Quisque eu augue mi. </p>

<p>Vivamus sagittis metus tortor, vitae vehicula mauris interdum id. Maecenas nulla velit, posuere in pharetra eu, lacinia non est. Nunc eleifend dignissim arcu et facilisis. Cras luctus scelerisque dapibus. Nam sit amet velit quis turpis rhoncus vestibulum. Phasellus feugiat sem sit amet eros laoreet, sit amet interdum sem tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque venenatis metus et porttitor interdum. Donec at leo sem. Sed nec ultricies nisi.</p>


<hr>
<h2>Valores</h2>

<p>Nossas decisões e comportamentos são guiados por nossos valores<br>

Pellentesque porttitor mi venenatis, pharetra tellus vitae, egestas leo. Nullam euismod lorem vitae nisi cursus, ac fringilla dolor mattis. Mauris posuere, est a volutpat tempus, velit tellus consequat risus, feugiat condimentum neque erat vitae nibh. Pellentesque ac mauris libero. Cras eget orci pulvinar, vehicula sapien eu, volutpat lorem. Duis tristique vehicula libero nec ornare. Proin ultricies tempor lorem non facilisis. Pellentesque ac sem vel dui cursus sagittis. Cras non nulla nunc. Ut nulla orci, eleifend mollis lorem ut, congue mollis sapien. Vestibulum id fermentum mi, nec scelerisque velit. Sed sed lectus aliquam augue lobortis volutpat quis sit amet nisi. Proin ornare turpis congue nulla consectetur, sollicitudin euismod nisi vulputate. Cras tincidunt lacus eget risus posuere, pulvinar elementum turpis sollicitudin. Proin egestas blandit volutpat.</p>

<hr>
<h2>Local</h2>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.564250860236!2d-46.62974498555491!3d-23.512199765662455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5883f1cc53e1%3A0x7ca3a6b0f47ee8db!2sR.+Santa+Eul%C3%A1lia%2C+86+-+Santana%2C+S%C3%A3o+Paulo+-+SP%2C+02031-020!5e0!3m2!1spt-BR!2sbr!4v1526614510014" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</main>

<footer>
<p>Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
</footer>
</body>


</html>