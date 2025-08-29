<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];
$nome = $_REQUEST['numero'];


$sql = "INSERT INTO area(nome, numero)
VALUES ('$nome', '$numero')";
//executa sql
$resultado = mysqli_query($conexao, $sql);
header('location:../../area.php');

session_start();
$_SESSION['mensagem'] = "$nome Adicionado com Sucesso!";
?>
