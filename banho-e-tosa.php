<?php
 
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Meu amigo cão</title>
<link href="estilos/principal.css" rel="stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>
</head>

<body id="banhoEtosa">
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

<h1> Agendamento para banho e tosa </h1>
<h2> Faça o seu agendamento com pelo menos 48 horas de antecedência</h2>

<form method="post" id="contato" action="obrigado.php">
	<fieldset id="ident_dono"><legend>Identificação do dono do animal</legend>
		<p><label for="nome_dono">Nome:</label> <input type="text" name="nome_dono" id="nome_dono" size = "50" maxlength="100" required="" placeholder="Digite o nome completo do dono do animal"/></p>

		<p><label for="endereco">Endereço:</label> <input type="text" name="endereco" id="endereco" size = "80" maxlength="60" required="" placeholder="Digite o endereço"/></p>

		<p><label for="cep">CEP:</label> <input type="text" name="cep" id="cep"  size = "10" maxlength="9" required="" placeholder="xxxxx-xxx"/></p>

		<p><label for="email_dono">Email:</label> <input type="email" name="email_dono" id="email_dono" size = "80" maxlength="60" required="" placeholder="Digite o endereço de email"> </p> 

		<p><label for="tel_dono">Tel/Cel:</label> <input type="text" name="tel_dono" id="tel_dono" size = "14" maxlength="15" required="" placeholder="(99) 99999-9999"/></p>
	</fieldset>

	<fieldset id="ident_animal"><legend>Animal</legend>
		<p><label for="nome_animal">Nome:</label> <input type="text" name="nome_animal" id="nome_animal"  size = "25" maxlength="40" placeholder="Digite o nome do animal"/></p>
		<p>Porte do cão:
			<input type="radio" name="porte_animal" id="animal_pequeno" value="animal_pequeno" checked> <label for="animal_pequeno" class="labelSimples">Pequeno</label>
			<input type="radio" name="porte_animal" id="animal_medio" value="animal_medio" checked> <label for="animal_medio" class="labelSimples">Médio</label>
			<input type="radio" name="porte_animal" id="animal_grande" value="animal_grande" checked> <label for="animal_grande" class="labelSimples">Grande</label>
		</p>
		
		<p>Tipo de tosa:
			<select name="tipo_tosa" id="tipo_tosa">
				<option value="">Nenhuma</option>
				<option value="padrao">Tosa Padrão</option>
				<option value="higienica">Tosa Higiênica</option>
				<option value="tesoura">Tosa na Tesoura</option>
				<option value="raca">Tosa da Raça</option>
				<option value="bebe">Tosa Bebê</option>
			</select>
		</p>

		<p>Observações:
			<textarea name="q_obs" id="q_obs" placeholder="Digite alguma informação sobre o animal se necessário"></textarea>
		</p>
	</fieldset>

	<fieldset id="ident_marcacao"> <legend>Horário - (Não atendemos aos domingos a às segundas-feiras)</legend>
		<p>Indique os dias da semana de sua preferência:<br>
			<input type="checkbox" name="semana[]" value="terca" id="idterca"><label for="idterca" class="labelSimples"> Terça-feira</label>
			<input type="checkbox" name="semana[]" value="quarta" id="idquarta"><label for="idquarta" class="labelSimples"> Quarta-feira</label>
			<input type="checkbox" name="semana[]" value="quinta" id="idquinta"><label for="idquinta" class="labelSimples"> Quinta-feira</label>
			<input type="checkbox" name="semana[]" value="sexta" id="idsexta"><label for="idsexta" class="labelSimples"> Sexta-feira</label>
			<input type="checkbox" name="semana[]" value="sabado" id="idsabado"><label for="idsabado" class="labelSimples"> Sábado</label>
		</p>

		<p>Primeira opção de data: <input type="date" name="Pdata" id="Pdata"></p>
		<p>Segunda opção de data: <input type="date" name="Sdata" id="Sdata"></p>
	</fieldset>

<input type="submit" name="submit" value="Enviar">

</form>

</main>
<footer>
<p  style="text-align: center;">Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
</footer>
</body>
</html>