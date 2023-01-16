<?php
session_start();
include_once("conexao.php");

if(!empty($_POST['estrela-at']) && !empty($_POST['estrela-pz']) && !empty($_POST['estrela-qdd']) && !empty($_POST['domain']) && !empty($_POST['comentario'])){
  $domain = $_POST['domain'];
  $at = $_POST['estrela-at'];
  $pz = $_POST['estrela-pz'];
  $qdd = $_POST['estrela-qdd'];
  $comment = $_POST['comentario'];

	//Salvar no banco de dados
	$query = "INSERT INTO sol_ratings (dominio, atendimento, prazo, qualidade, comentario, data_registro) VALUES (?, ?, ?, ?, ?, NOW())";
	$stmt = mysqli_prepare($conn, $query);
	mysqli_stmt_bind_param($stmt, 'sssss', $domain, $at, $pz, $qdd, $comment);
	$resultado = mysqli_stmt_execute($stmt);

	$ret = 'false';
	if($resultado)
		$ret = 'true';

	header("Location: index.php?success=$ret");

}else{
	header("Location: index.php?form_ok=false");
}
