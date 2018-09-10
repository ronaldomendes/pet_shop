<!doctype html>

<html lang="pt-br">


<head> 

<meta charset="utf-8">

<title>Meu amigo cão - Petshop</title>
<link href="estilos/principal.css" rel="stylesheet" type="text/css">
<link href="estilos/curiosidades.css" rel="stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>

</head>

<body id="curiosidades">
<header>
<h1>Meu amigo cão - Petshop</h1>
<div id="anuncio">
<img src="multimidia/anuncio-cantinho-feliz-h.jpg" alt="anúncio - cantinho feliz, hotel para cachorro"></div>
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

<h1>
Qual a melhor raça de cachorros para crianças?
</h1>


<h2>
Antes de mais nada é importante que você tenha em mente a resposta para algumas questões:
</h2>


<ol>
<li>Mora em casa ou apartamento?</li>

<li>Quer um cachorro para ser parceiro em atividades? Brincar? Terapia?</li>

<li>Você mora no campo ou na cidade?</li>

<li>Alguém da familia é alérgico a cães?</li>

<li>Está disposto a cuidar do cão com frequência?</li>

<li>É rígido com limpeza?</li>

<li>Fica preocupado com bagunça?</li>

</ol>

<figure>
	<img src="multimidia/bolinha.JPG" alt="brincando com a bolinha">
	<img src="multimidia/esquentar-pes.JPG" alt="esquentando os pés">
	<figcaption>Para brincar ou esquentar os seus pés</figcaption>
</figure>
<a id="top"></a>


<h3> Veja algumas raças:</h3>


<ul>
	<?php
		$dogs = ["Bulldog","Beagle","Bull Terrier","Collie","Labrador","Lhasa Apso"];
		$dog_link = ["#bulldog","#beagle","#bullterrier","#collie","#labrador","#lhasa"];

		for ($i=0; $i <=5 ; $i++) { 
			echo "<li><a href='$dog_link[$i]'>$dogs[$i]</a></li>";
		}
	?>
</ul>


<dl>
<dt><a id="bulldog"> </a>Bulldog</dt>
<dd>

Embora a aparência do Bulldog Inglês pode ser um pouco intimidante, está entre o mais gentil dos cães. Apenas o mesmo que vai ver fora qualquer intruso, e poucos arriscariam um encontro próximo com um cão corajoso o suficiente para atrair um touro. É descrito como um animal muito carinhoso e confiável, gentil com as crianças, mas conhecido por sua coragem e suas excelentes habilidades de guarda.
<br>
<a href="https://pt.wikipedia.org/wiki/Buldogue" target="_blank">Tenha mais informações</a>
<p><a href="#top">Voltar</a></p>
</dd>


<dt><a href="beagle"> </a>Beagle</dt>
<dd>

O Beagle é amoroso, doce e gentil, feliz de ver todos, cumprimentá-los com uma cauda abanando. É sociável, corajoso e inteligente. O Beagle é excelente com crianças e geralmente bem com outros cães, mas por causa de seus instintos de caça, não deve ser confiado com animais de estimação não-caninos, a não ser socializados com gatos e outros animais domésticos quando jovens
<br>
<a href="https://pt.wikipedia.org/wiki/Beagle" target="_blank">Tenha mais informações</a>
<p><a href="#top">Voltar</a></p>
</dd>


<dt><a id="bullterrier"> </a>Bull Terrier</dt>
<dd>


Antigamente esta raça era considerada um gladiador feroz, agora é vista como um cão dócil. O Bull terrier pode ter um efeito preventivo e pode defender seu dono em uma situação verdadeiramente crítica, mas não é criado para ser um cão de guarda. Corajoso, desconexo, divertido, carinhoso, ativo, palhaço e destemido, o Bull Terrier é um cão educado, obediente e leal. Ele se torna muito ligado aos seus donos.
<br>
<a href="https://pt.wikipedia.org/wiki/Bull_terrier" target="_blank">Tenha mais informações</a>
<p><a href="#top">Voltar</a></p>
</dd>


<dt><a href="collie"></a>Collie</dt>
<dd>


O Collie é um cão muito inteligente. Sensível, meigo, doce, fácil de treinar e leal, é geralmente bom com outros animais de estimação e amigável com outros cães. Eles são pastores naturais; filhotes podem tentar os humanos rebanho, e precisam ser ensinados a não fazer isso. Fiel, brincalhão, dócil e protetora de seus familiares e bom com crianças
<br>
<a href="https://pt.wikipedia.org/wiki/Rough_collie" target="_blank">Tenha mais informações</a>
<p><a href="#top">Voltar</a></p>
</dd>


<dt><a id="labrador"> </a>Labrador</dt>
<dd>


Uma das raças mais populares nos EUA, o Labrador é leal, amoroso, carinhoso e paciente, fazendo com que um cão grande da família. Muito inteligente, bem-humorada, muito disposto e ansioso para agradar, ela está entre as melhores opções para o trabalho de cão de serviço. Labs gostam de jogar, especialmente em água, nunca querer deixar passar a oportunidade para um bom mergulho. Estes cães vivos têm uma excelente temperamento, confiável e amigável, excelente com crianças e uniforme com outros cães.
<br>
<a href="https://pt.wikipedia.org/wiki/Labrador_retriever" target="_blank">Tenha mais informações</a>
<p><a href="#top">Voltar</a></p>
</dd>


<dt><a id="lhasa"> </a>Lhasa Apso</dt>
<dd>


Este é um cão resistente com uma maneira amigável, assertivo. Inteligente e animada, faz um bom animal de estimação. Lhasa Apso são pequenos cães espirituoso e dedicados que são afetuoso com seus donos. Eles podem ser muito obediente a seus mestres. Esta raça responde ao treinamento motivacional. Eles têm um grande senso de audição, e fazer bons cães de guarda. O Lhasa Apso viaja bem. Infelizmente, este pequeno cão, muitas vezes cai em Síndrome de cão pequeno , um comportamento humano induzido onde o cão pensa que é líder do bloco para os seres humanos. Isso faz com que muitos graus variados de comportamentos negativos para sair no cão. Tornam-se desconfiado com estranhos, e não pode tolerar crianças
<br>
<a href="https://pt.wikipedia.org/wiki/Lhasa_apso" target="_blank">Tenha mais informações</a>
<p><a href="#top">Voltar</a></p>
</dd>
</dl>

</main>
<footer>
<p>Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
 </footer>
</body>

</html>