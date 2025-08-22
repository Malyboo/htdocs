<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];
$CEP = $_REQUEST['CEP'];
$estado = $_REQUEST['estado'];
$regiao = $_REQUEST['regiao'];

$sql2 = "SELECT * FROM cidade WHERE nome = '$nome' ";
$resultado = mysqli_query($conexao, $sql2);

if(mysqli_num_rows($resultado) > 0){
    session_start();
    $_SESSION['mensagem'] = "Cidade já cadastrada!";
}else{



$sql = "INSERT INTO cidade(nome, CEP, estado, id_regiao_fk) VALUES ('$nome','$CEP','$estado','$regiao')";




//executa sql
$resultado = mysqli_query($conexao, $sql);
session_start();
$_SESSION['mensagem'] = "$nome cadastrado com Sucesso!";
}
//mandar para pagina principal
header('location:../../cidade.php');
?>