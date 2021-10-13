<?php
session_start();
include_once("config.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$senha = $_POST['senha'];
$telefone = $_POST['telefone']; //filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

echo "Nome: $nome <br>";
echo "telefone: $telefone <br>";

$result_usuario = "UPDATE arquivo SET senha='$senha' WHERE codigo='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Senha editada com sucesso</p>";
	header("Location:edit_usuario.php?id=$id");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Senha não foi editada com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
