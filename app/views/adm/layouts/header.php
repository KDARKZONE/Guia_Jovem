<?php
    session_start();
    if(isset( $_SESSION['Perfil']) &&  $_SESSION['administrador'] == true){
        null;
    }
    else{
        echo "<script>alert('Você não tem permissão pra acessar está página');
        window.location.href = '../../index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel de Controle</title>
        <link rel="icon" href="../assets/style/adm/img/logooo.png">
        <link rel="stylesheet" href="../assets/style/adm/css/cabeçario-responsive.css">
        <link rel="stylesheet" href="../assets/style/adm/css/cabeçario.css">
        <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
    </head>