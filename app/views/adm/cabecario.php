<?php
    session_start();
    if(isset( $_SESSION['Perfil']) &&  $_SESSION['administrador'] == true){
        echo "<script>alert('Olá Administrador ".$_SESSION['Perfil']['Nome']."')</script>";
    }
    else{
        echo "<script>alert('Não existe conta cadastrada, por favor cadastra-se novamente');
        window.location.href = '../../index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Administrador </title>
        <link rel="icon" href="layout_adm/img/logooo.png">
        <link rel="stylesheet" href="./style/css/cabeçario-responsive.css">
        <link rel="stylesheet" href="./style/css/cabeçario.css">
        <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
    </head>