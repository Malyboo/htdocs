<?php
include 'conexao.php';
//receber o cpf e senha do formulario de login por requisição
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

//comando SQL que busca no banco um usuario com cpf e senha específica
$sql = "SELECT * FROM usuario WHERE cpf = '$cpf' AND senha = '$senha'";

//executa sql
$resultado = mysqli_query($conexao, $sql);
//cada valor dos resultados é associado ao nome da colulna no banco
$coluna = mysqli_fetch_assoc($resultado);

//imprime o nome da pessoa, se achar no banco
echo $coluna['nome'];

if(mysqli_num_rows($resultado) > 0){
header('Location:../principal.php');
} else{
    //se não encontrar, redireciona para a página de login com erro
    header('Location:../index.php');
}

?>