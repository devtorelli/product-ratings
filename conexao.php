<?php
//localhost
	$servidor = "127.0.0.1";
	$usuario = "root";
	$senha = "Konohagakure1!";
	$dbname = "solu_avaliacoes";
	

	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

  if(!$conn){
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
