<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['Cadastro'])){
            require_once("/xampp/htdocs/Guia_Jovem/app/models/perfis.php");
        }
        else 
        if (isset($_POST['Login'])){
            require_once("/xampp/htdocs/Guia_Jovem/app/models/login.php");
        }
        else{
            echo "<script>alert(' error ')</script>";
        }
    }
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
            <link rel="icon" href="layouts/site/style/img/logooo.png">
            <link rel="stylesheet" href="layouts/site/style/css/body.css">
            <link rel="stylesheet" href="layouts/site/style/css/cabeçario.css"> 
            <link rel="stylesheet" href="layouts/site/style/css/cabeçario_vertical.css">
            <link rel="stylesheet" href="layouts/site/style/css/style_js/layout_pop_up.css">
            <link rel="stylesheet" href="layouts/site/style/css/style_js/cadastro.css">
            <link rel="stylesheet" href="layouts/site/style/css/style_js/cadastro_responsive.css">
            <link rel="stylesheet" href="layouts/site/style/css/style_js/login.css">
            <link rel="stylesheet" href="layouts/site/style/css/style_js/login_responsive.css">
            <title>Guia Jovem</title>
        </head>
        <!-- fecha depois --> 