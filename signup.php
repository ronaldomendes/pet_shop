<?php

    session_start();
    include_once("conexao_newsletter.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $sql = "INSERT INTO newsletter VALUES (default, '$nome', '$email')";

    $query = mysqli_query($conexao, $sql); 

    if (mysqli_insert_id($conexao)) {
        $_SESSION['msg'] = "<p style='font-weight: bold; text-align: center; background-color:#C0262C; border-radius: 25px; padding: 7px 0; color: #FFFFFF; font-size: 1.5em;'>Seu e-mail foi cadastrado com sucesso! </p>";
        header("Location: boletim.php");
    }else{
        $_SESSION['msg'] = "<p style='font-weight: bold; text-align: center; background-color:#C0262C; border-radius: 25px; padding: 7px 0; color: #FFFFFF; font-size: 1.5em;'>Usuário não cadastrado! </p>";
        header("Location: boletim.php");
    }

?>