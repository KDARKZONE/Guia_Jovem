<?php
    require_once "header.php";
?>
<body>
        <header class="cabeçario">
            <!-- MENU RESPONSIVO -->
                <div class="Icone_Menu">
                    <input type="checkbox" id="check">
                        <label for="check">
                            <i class="fa-solid fa-bars" id="icone"></i>
                        </label>
                        <nav class="opções">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem">Enem</a></li>
                                <li><a href="https://sisfiesportal.mec.gov.br/">Fies</a></li>
                                <li><a href="https://acessounico.mec.gov.br/prouni">Prouni</a></li>
                                <div class="redes_sociais">
                                <li class="botão"><button><i class="fa-brands fa-facebook"></i></button></li>
                                <li class="botão"><button><i class="fa-brands fa-twitter"></i></button></li>
                                <li class="botão"><button><i class="fa-brands fa-instagram"></i></button></li>
                                </div>
                            </ul>
                        </nav>
                </div>
            </div>
            <!-- MENU TOTAL -->
            <div class="container">
                <div class="logo"> 
                <img src="../assets/style/autor/img/guia_jovem_home.png">
                </div>
                <div class="Menu">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="Meus_post.php">Meus Posts</a></li>
                            <li><a href="postar.php">Postar Artigo</a></li>
                        </ul>
                    </nav> 
                </div> 
                <div class="redes_sociais">
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-twitter"></i></button>
                    <button><i class="fa-brands fa-instagram"></i></button>
                </div>
                <div class="Login">
                    <div class="DropDown">
                        <button class="conta"><img src="../assets/style/autor/img/foto_default.png"></a></button>
                        <div class="DropDown_Menu">
                            <a class="Informações"><form method="POST" action="controllers/logout.php"><input type="submit" name="logout" value="Logout"></form></a>
                        </div>
                </div>
                </div>
            </div>
        </header>