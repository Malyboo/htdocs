<?php
include'../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

//comando sql para atualizar os dados
$sql = "UPDATE usuario SET nome='$nome', email='$email.', cpf='$cpf', senha='$senha'WHERE id='$id' ";

//executa o sql
mysqli_query($conexao, $sql);
//retornar para a tela principal
header('Location:../../principal.php');

?>