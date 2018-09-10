<?php
	//Criando a conexão mysqli_connect('localização BD', 'usuário de acesso', 'senha', 'banco de dados')
	$conexao = mysqli_connect("localhost", "root","", "petshop_bd");

	//Ajustando o charset de comunicação entre a aplicação e o banco de dados
	mysqli_set_charset($conexao, "utf8");

	    //Selecionando o banco de dados
    $bancodados = mysqli_select_db($conexao, "agendamento");
?>