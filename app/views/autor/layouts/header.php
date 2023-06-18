<?php 
  @session_start();
  if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true || $_SESSION['administrador'] == true ){
    echo'
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
            <link rel="icon" href="../assets/style/autor/img/logooo.png">
            <link rel="stylesheet" href="../assets/style/autor/css/body.css">
            <link rel="stylesheet" href="../assets/style/autor/css/cabeçario.css"> 
            <link rel="stylesheet" href="../assets/style/autor/css/cabeçario_vertical.css">
            <link rel="stylesheet" href="../assets/style/autor/css/form-autor.css">
            <link rel="stylesheet" href="../assets/style/autor/css/Meus_post.css">
            <title>'.$_SESSION['Perfil']['nome'].'</title>
        </head>
        <!-- fecha depois --> ';}
        else{
            session_destroy();
            die("<script>alert('Você não tem permissão para acessar essa página');
            window.location.href='../../../index.php';</script>");
             } 
     ?>