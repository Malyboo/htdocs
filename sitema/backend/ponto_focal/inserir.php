<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO ponto_focal(nome, email, cpf, senha)
VALUES ('$nome', '$email', '$cpf', '$senha')";
//executa sql
$resultado = mysqli_query($conexao, $sql);
header('location:../../ponto_focal.php');

session_start();
$_SESSION['mensagem'] = "Adicionado com Sucesso!";
?>
