<?php
    session_start();
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> GuiaJovem </title>
    <script src='https://kit.fontawesome.com/7bcc76ecaf.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='style/responsive.css'>
    <link rel='stylesheet' href='style/style.css'>
</head> 
<body>
    <header class='cabeçario_user'>
        <!-- MENU RESPONSIVO -->
            <div class='Icone_Menu_user'>
                <input type='checkbox' id='check'>
                    <label for='check'>
                        <i class='fa-solid fa-bars' id='icone'></i>
                    </label>
                    <nav class='opções_user'>
                        <ul>
                            <li><a href='index.php'> Home </a></li>
                            <li><a href='https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem'> Enem </a></li>
                            <li><a href='https://sisfiesportal.mec.gov.br/'> Fies </a></li>
                            <li><a href='https://acessounico.mec.gov.br/prouni'> Prouni </a></li>
                                <div class='redes_sociais'>
                            <li class='botão'><button><i class='fa-brands fa-facebook'></i></button></li>
                            <li class='botão'><button><i class='fa-brands fa-twitter'></i></button></li>
                            <li class='botão'><button><i class='fa-brands fa-instagram'></i></button></li>
                                </div>
                            <div class='login'>
                                <li class='img_login'>
                                    <button class='botão_login'><img src='style/img/foto_default.png'></a></button>
                                </li>
                            </div>
                        </ul>
                    </nav>
        </div>
        <!-- MENU TOTAL -->
        <div class='container_user'> 
            <div class='logo'> 
            <img src='style/img/guia_jovem_home.png'>
            </div>
            <div class='Menu'>
                <nav>
                    <ul>
                        <li><a href='index.php'> Home </a></li>
                        <li><a href='https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem'> Enem </a></li>
                        <li><a href='https://sisfiesportal.mec.gov.br/'> Fies </a></li>
                        <li><a href='https://acessounico.mec.gov.br/prouni'> Prouni </a></li>
                    </ul>
                </nav>
            </div> 
            <div class='redes_sociais'>
                <button><i class='fa-brands fa-facebook'></i></button>
                <button><i class='fa-brands fa-twitter'></i></button>
                <button><i class='fa-brands fa-instagram'></i></button>
            </div>
            <div class='Login_user'>
                <div class='DropDown'>
                <button><img src='style/img/foto_default.png' title='Perfil'></a></button>
                <div class='DropDown_Menu'>
                    <form method='POST'>
                    <input type='submit' name='submit_logout' value='LogOut'>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

<?php
    if(isset($_POST['submit_logout'])){
    header('Location:../../index.php');
    }
?>
