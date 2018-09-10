<!doctype html>

<html lang="pt-br">


<head>

<meta charset="utf-8">

<title>Produtos - Meu amigo cão</title>
<link href="estilos/principal.css" rel="stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>
</head>


<body id="produtos">
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
	<table>
		<caption>Produtos</caption>
		<tr>
			<th>Porte</th>
			<th colspan="2">Marca</th>
			<th>Preço</th>
		</tr>
		<tr>
			<td rowspan="2">Pequeno</td>
			<td>Vestibulum</td>
			<td><img src="multimidia/pq_emb_pequeno1.png" alt="ração cão pequeno"></td>
			<td>R$ 5,00</td>
		</tr>
		<tr>
			<td>Nunc</td>
			<td><img src="multimidia/pq_emb_pequeno2.png" alt="ração cão pequeno"></td>
			<td>R$ 4,80</td>
		</tr>
		<tr>
			<td rowspan="2">Médio</td>
			<td>Mollis</td>
			<td><img src="multimidia/pq_emb_medio1.png" alt="ração cão médio"></td>
			<td>R$ 6,90</td>
		</tr>
		<tr>
			<td>Porttitor</td>
			<td><img src="multimidia/pq_emb_medio2.png" alt="ração cão médio"></td>
			<td>R$ 3,90</td>
		</tr>
		<tr>
			<td rowspan="2">Grande</td>
			<td>Lacinia</td>
			<td><img src="multimidia/pq_emb_grande1.png" alt="ração cão grande"></td>
			<td>R$ 6,90</td>
		</tr>
		<tr>
			<td>Sapien</td>
			<td><img src="multimidia/pq_emb_grande2.png" alt="ração cão grande"></td>
			<td>R$ 3,90</td>
		</tr>
		<tr>
			<td colspan="4">Consulte nossos preços para grandes quantidades.</td>
		</tr>
	</table>

</main>
<footer>
<p>Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
</footer>
</body>

</html>