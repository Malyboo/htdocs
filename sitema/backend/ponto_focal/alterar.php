<?php
include'../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

//comando sql para atualizar os dados
$sql = "UPDATE ponto_focal SET nome='$nome', email='$email.', cpf='$cpf', senha='$senha'WHERE id='$id' ";

//executa o sql
mysqli_query($conexao, $sql);

session_start();
    $_SESSION['mensagem'] = "$nome Alterado com Successo!";

//retornar para a tela principal
header('Location:../../ponto_focal.php');

?>
