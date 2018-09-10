<?php
	session_start();
?>

<!doctype html>

<html lang="pt-br">

<head>

<meta charset="utf-8">

<title>Boletim Mensal - Meu amigo cão</title>
<link  href="estilos/principal.css" rel="stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>
</head>



<body id="boletim-f">
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
		$menu = ["Home","Quem Somos","Produtos","Banho e Tosa","Curiosidades"];
		$links = ["index.php","quem-somos.php","produtos.php","banho-e-tosa.php","curiosidades.php"];

		for ($i=0; $i <=4 ; $i++) { 
			echo "<li><a href='$links[$i]'>$menu[$i]</a></li>";
		}
	?>
</ul>
</nav>

<main>
<h1>Meu amigo cão - Petshop</h1>

<h1>Boletim mensal</h1>

<h2>Assine já!</h2>

<p>Fazendo sua assinatura<br> 
você receberá mensalmente informações sobre nossos produtos, serviços, eventos e descontos.</p>
<form method="post" id="boletim" action="signup.php">
	<p><label for="nome">Nome:</label><input type="text" name="nome" id="nome" placeholder="Digite seu nome" required=""></p>
	<p><label for="email">E-mail:</label><input type="email" name="email" id="email" placeholder="Digite seu endereço de e-mail" size="30" required=""></p>
	<input type="submit" value="Assinar">

	<?php
		if(isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>	
</form>
	
</main>

<footer>
<p>Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
</footer>

</body>
</html>