<?php
    session_start();

    if(session_status() == PHP_SESSION_ACTIVE){
        session_destroy();
    }
    if(session_status() == PHP_SESSION_NONE){
        echo "<script>alert('A Conta foi Encerrada');
        window.location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Erro ao Tentar Deslogar a sua Conta')</script>";
    }
?>