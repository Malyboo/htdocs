<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];


$sql = "INSERT INTO cidade(nome)
VALUES ('$nome')";
//executa sql
$resultado = mysqli_query($conexao, $sql);
header('location:../../cidade.php');

session_start();
$_SESSION['mensagem'] = "Adicionado com Sucesso!";
?>
