<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Administrador </title>
    <link rel="icon" href="style/img/logooo.png">
    <link rel="stylesheet" href="style/style.css">
    <!--<link rel="stylesheet" href="style/style_Pesquisar_no_Banco_de_Dados.css">-->
    <link rel="stylesheet" href="style/cabeçario.css">
    <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="cabeçario_adm">
    <div class="container_adm">
            <div class="logo_adm"> 
            <img src="">
            </div>
            <div class="Menu_adm">
                <nav class="op">
                    <ul>
                        <li><a href="../Guia_Jovem/index.php"> Home </a></li>
                        <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                        <li><a href="https://sisfiesportal.mec.gov.br/"> Fies </a></li>
                        <li><a href="https://acessounico.mec.gov.br/prouni"> Prouni </a></li>
                    </ul>
                </nav>
            </div> 
            <div class="redes_sociais_adm">
                <button><i class="fa-brands fa-facebook"></i></button>
                <button><i class="fa-brands fa-twitter"></i></button>
                <button><i class="fa-brands fa-instagram"></i></button>
            </div>
            <div class="Login_adm">
                <div class="DropDown">
                    <form method="POST">
                    <img src="../adm/style/img/foto_default.png">
                    <div class="DropDown_Menu">
                        <input type="submit" name="submit_logout" value="Logout">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
        <header class="menu_vertical">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa-solid fa-bars"></i> 
        </label>
        <nav>
            <ul>
                <li><a href="painel_de_controle.php"> Home </a></li>
                <li><a href="vizualizar.php"> Vizualizar Banco (Criptografado) </a></li>
                <li><a href="Esvaziar_Tabela.php">Limpar Tabela </a></li>
                <li><a href="search.html">Pesquisar no Banco</a></li>
                <li><a href="Deletar_item.html">Deletar item </a></li>
            </ul>
        </nav>
    </header>
    <section>
        <article>
            <p>CONTROLE</p>
        </article>
    </section>
</body>
</html>
<?php
    if(isset($_POST['submit_logout'])){
        session_destroy();
        header('Location:../../index.php');
    }
?>