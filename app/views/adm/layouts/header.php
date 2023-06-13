<?php
     session_start();
     if(isset($_SESSION['Perfil']) && $_SESSION['administrador'] == true){
        echo'<!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Painel de Controle</title>
                <link rel="icon" href="../assets/style/adm/img/logooo.png">
                <link rel="stylesheet" href="../assets/style/adm/css/cabeçario-responsive.css">
                <link rel="stylesheet" href="../assets/style/adm/css/cabeçario.css">
                <link rel="stylesheet" href="../assets/style/adm/css/search.css">
                <link rel="stylesheet" href="../assets/style/adm/css/general.css">
                <link rel="stylesheet" href="../assets/style/adm/css/dados.css">
                <link rel="stylesheet" href="../assets/style/adm/css/hidden.css">
                <link rel="stylesheet" href="../assets/style/adm/css/analise.css">
                <link rel="stylesheet" href="../assets/style/adm/css/notice.css">
                <script src="../assets/js/adm-option.js"></script>
                <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
            </head>';
    }
     else{
       session_destroy();
       die("<script>alert('Você não tem permissão para acessar essa página');
       window.location.href='../../../index.php';</script>");
        } 
?>