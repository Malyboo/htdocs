<?php

$endereco = "localhost";
$nome = "bancorics";
$usuario = "root";
$senha = "";

$conexao=mysqli_connect($endereco, $usuario, $senha, $nome);

//se tier erro na conexao
if (!$conexao){
    die("erro na conexão com o banco!".mysqli_connect_error());
}
?>