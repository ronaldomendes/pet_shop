<!doctype html>

<html lang="pt-br">


<head>

<meta charset="utf-8">

<title>Meu amigo cão - Petshop</title>
<link href="estilos/principal.css" rel="Stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>
</head>


<body id="inicial">
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
<aside>
    <p><img src="multimidia/brincando.jpg" alt="anuncio"></p>
    <audio controls="">
    <source src="multimidia/brincar_com_cuidado.ogg" type="audio/ogg" codecs="vorbis">
    <source src="multimidia/brincar_com_cuidado.mp3" type="audio/mp3" codecs="mp3">            
    </audio>
    <p>Ouça a dica do veterinário!</p>
    <img src="multimidia/anuncio_pet1.jpg" alt="anúncio">
</aside>

<main>
    <figure class="anuncioAnime">
    <div class="boxAnuncio">
    <img src="multimidia/anuncio1.jpg" alt="">
    <p>BRINCADEIRAS<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>        
    </div>
    <div class="boxAnuncio">
    <img src="multimidia/anuncio2.jpg" alt="">
    <p>CUIDADOS<br>Facilis, suscipit, expedita, sed, architecto ex illo excepturi blanditiis.</p>            
    </div>
    <div class="boxAnuncio">
    <img src="multimidia/anuncio3.jpg" alt="">
    <p>SAÚDE<br>Aliquam qui at fugit magnam possimus praesentium repudiandae sint.</p>
    </div>
    </figure>

    <h1>O melhor para o nosso amigo cão</h1>
    <p>Quisque venenatis urna ac nulla. Maecenas quis turpis nec nulla 
    auctor mattis. Curabitur mi libero, scelerisque eu, cursus semper, 
    tempor quis, ante. Etiam iaculis, nisl eu imperdiet tincidunt, neque 
    lacus ornare leo, non ultrices arcu justo ut enim. Morbi pulvinar 
    sagittis sapien. Sed adipiscing purus nec tortor. Cras nisi sapien, 
    ultricies nec, dapibus ut, vehicula ac, pede. Donec venenatis lorem 
    sit amet erat vehicula hendrerit. In convallis odio id augue. Sed 
    nunc. Donec id tellus nec urna placerat consectetuer. Maecenas eget 
    metus. Etiam et risus. Cras nunc mi, aliquam semper, suscipit a, 
    dictum elementum, velit. Curabitur</p>
</main>
<aside>
    <video controls poster="multimidia/brincando2.jpg">
    <source src="multimidia/cao_brincando.mp4" type="video/mp4" codecs="avc1.42E01E, mp4a.40.2">
    <source src="multimidia/cao_brincando.ogv" type="video/ogg" codecs="theora, vorbis">        
    </video>
    <p>Brinque sempre com seu cãozinho!</p>
    <img src="multimidia/anuncio_pet2.jpg" alt="anúncio">
</aside>
<footer>
<p>Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
</footer>
</body>


</html>