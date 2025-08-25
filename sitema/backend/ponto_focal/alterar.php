<?php
include'../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$CEP = $_REQUEST['CEP'];
$estado = $_REQUEST['estado'];
$regiao = $_REQUEST['regiao'];

//comando sql para atualizar os dados
$sql = "UPDATE cidade SET nome='$nome', cep='$CEP', estado='$estado', id_regiao_fk='$regiao' WHERE id='$id' ";

//executa o sql
mysqli_query($conexao, $sql);

session_start();
    $_SESSION['mensagem'] = "$nome Alterado com Successo!";

//retornar para a tela principal
header('Location:../../cidade.php');

?>
