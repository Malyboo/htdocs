<?php
include'../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];

//comando sql para atualizar os dados
$sql = "UPDATE cidade SET nome='$nome' WHERE id='$id' ";

//executa o sql
mysqli_query($conexao, $sql);

session_start();
    $_SESSION['mensagem'] = "$nome Alterado com Successo!";

//retornar para a tela principal
header('Location:../../cidade.php');

?>
