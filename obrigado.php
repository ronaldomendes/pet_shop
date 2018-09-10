<?php
    include_once('conexao_agenda.php');

    $nome = $_POST['nome_dono'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $email = $_POST['email_dono'];
    $tel_cel = $_POST['tel_dono'];
    $nome_animal = $_POST['nome_animal'];
    $porte_animal = $_POST['porte_animal'];
    $tipo_tosa = $_POST['tipo_tosa'];
    $q_obs = $_POST['q_obs'];
    if ($_POST && isset($_POST['semana'])) {
        $semana = implode(",", $_POST['semana']);
    }
    $Pdata = $_POST['Pdata'];
    $Sdata = $_POST['Sdata'];

    $sql = "INSERT INTO agendamento VALUES (default, '$nome', '$endereco', '$cep', '$email', '$tel_cel', '$nome_animal', '$porte_animal', '$tipo_tosa', '$q_obs', '$semana', '$Pdata', '$Sdata')";

    $query = mysqli_query($conexao, $sql);
?>

<!doctype html>

<html lang="pt-br">

<head>

<meta charset="utf-8">

<title>Obrigado</title>
<link href="estilos/principal.css" rel="stylesheet" type="text/css">

<!-- O passo abaixo é relacionado a responsividade -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/estilos_responsivos.css">

<link rel="icon" href="multimidia/favicon.ico">
<script src="interacao/html5shiv.min.js"></script>

</head>



<body id="obrigado">

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

<h1>Obrigado</h1>

<h2>Seu formulário foi enviado.</h2>

<p>Nossa equipe irá conferir sua solicitação e enviará uma confirmação para seu e-mail.</p>

<div id="destaqueObrigado">

<div id="lacinho"><img src="multimidia/lacinho.png"></div>
<p>Aproveite agora mesmo a nossa dica em destaque:</p>
<p><img src="multimidia/anuncio_pet3.jpg" alt="anúncio pet"> Lorem ipsum dolor sit amet,<br>

consectetur adipiscing alit. Aliquam fringilla lacinia ultricies. Nam eilt lectus, interdum eu dictum et,
hendrerit in tellus. Fusce tempor fringilla massa vitae consequat.
Vivamus aliquet, neque sed tempus
rhoncus, nisl turpis malesuada ipsum, vel imperdiet arcu mauris ut metus</p>

<p>Aliquam luctus venenatis porttitor. Vivamus vitae aliquam arcu, sed auctor lacus. Fusce placerat, odio
at congue suscipit, lectus purus accusan justo, at dapibus tortor risus nec libero. Nullam orci arcu,
lacinia dignissim diam et, adipiscing tempus velit. Vivamus nec interdum sem, ac ullamcorper arcu.</p>

<p>Morbi risus diam, cursus ac dapibus sit amet, feugiat vitae mauris.</p>

</div>
</main>
<footer>
<p>Atendimento: 
<a href="mailto:atendimento@meuamigocaopetshop.com">atendimento@meuamigocaopetshop.com</a>
 - (0XX) 9 9999-9999 / (0XX) 8 8888-8888</p>
 </footer>
</body>
</html>