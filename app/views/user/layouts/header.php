<?php
@session_start();
if(isset($_SESSION['Perfil']) &&  $_SESSION['usuario comum'] == true){
echo '
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
            <link rel="icon" href="../assets/style/user/img/logooo.png">
            <link rel="stylesheet" href="../assets/style/user/css/body.css">
            <link rel="stylesheet" href="../assets/style/user/css/cabeçario.css"> 
            <link rel="stylesheet" href="../assets/style/user/css/cabeçario_vertical.css">
            <link rel="stylesheet" href="../assets/style/user/css/DropDown.css">
            <link rel="stylesheet" href="../assets/style/user/css/user.css">
            <link rel="stylesheet" href="../assets/style/user/css/user_layout.css">
            <link rel="stylesheet" href="../assets/style/user/css/search.css">
            <title>Guia Jovem</title>
        </head>';
}
else{
    session_destroy();
    echo "<script>alert('Parece que você não está logado, faça o login e tente novamente');
    window.location.href='../index.php';</script>";
}