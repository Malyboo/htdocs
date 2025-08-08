<?php

    session_start();
    // Destruir a sessão
    session_destroy();

    //limpar as variáveis de sessão
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);

    //manda para o login
    header('Location:../index.php');

?>