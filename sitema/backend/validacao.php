<?php
session_start(); // Inicia a sessão

if(!insset($_CESSION['cpf']) or !insset($_SESSION['senha'])){
    //destruir sessão
    session_destroy();
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);


//manda para o login
header('location:../index.php');

}
?>