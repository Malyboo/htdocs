<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];
$CEP = $_REQUEST['CEP'];
$estado = $_REQUEST['estado'];
$id_regiao_fk = $_REQUEST['id_regiao_fk'];




$sql = "INSERT INTO cidade(nome), (CEP), estado, id_regiao_fk)
VALUES ('$nome','$CEP','$estado','$id_regiao_fk')";
//executa sql
$resultado = mysqli_query($conexao, $sql);
header('location:../../cidade.php');

session_start();
$_SESSION['mensagem'] = "Adicionado com Sucesso!";
?>
