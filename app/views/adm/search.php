<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Pesquisar </title>
    <link rel="stylesheet" href="./styles/search.css">

    <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST">
    <div class="search-box">
    <input type="text" class="search-txt" placeholder="Pesquisar" name="search">
    <button type="submit" name="Pesquisar"><a href="#" class="search-btn">
        <i class="fa-solid fa-magnifying-glass"></i>
    </a></button>
    </div>
    </form>
    <header>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fa-solid fa-bars"></i> 
    </label>
    <nav>
        <ul>
        <li><a href="../../layouts/adm/menu.php" class="op"> Home </a></li>
        <li><a href="./search.php" class="op"> Pesquisar </a></li>
        <li><a href="./dados.php" class="op"> Dados </a></li>
        <li><a href="./notice.php" class="op"> Noticias </a></li>
        <li><a href="./analise.php" class="op"> Analise </a></li>
        </ul>
    </nav>
    <div class="Dados">
        <fieldset class="Result">
        <?php
        if(isset($_POST['Pesquisar'])){
            require_once("resul-search.php");
        }
        else{
            return null;
        }
        ?>
    </fieldset>
    </div>
    
</body>