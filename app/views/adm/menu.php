<?php
    require_once("cabecario.php");
?>
        <header class="cabeçario">
        <!-- MENU RESPONSIVO -->
            <div class="Icone_Menu">
                <input type="checkbox" id="check">
                    <label for="check">
                        <i class="fa-solid fa-bars" id="icone"></i>
                    </label>
                    <nav class="opções">
                        <ul>
                            <li><a href="#"> Home </a></li>
                            <li><a href="#"> Pesquisar </a></li>
                            <li><a href="#"> Dados </a></li>
                            <li><a href="#"> Apagar </a></li>
                            <li><a href="#"> Analise </a></li>
                        </ul>
                    </nav>
                <div class="login">
                    <!--<button><a class="modal-link-responsive"><img src="#" title="Entrar"></a></button>-->
                </div>
            </div>
        <!-- MENU TOTAL -->
        <div class="container">
            <div class="logo"> 
            <img src="./style/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="./menu.php"> Home </a></li>
                        <li><a href="../../controllers/adm/search.php"> Pesquisar </a></li>
                        <li><a href="../../controllers/adm/dados.php"> Dados </a></li>
                        <li><a href="../../controllers/adm/notice.php"> Noticia </a></li>
                        <li><a href="../../controllers/adm/analise.php"> Analise </a></li>
                      </ul>
                </nav>
            </div> 
            <div class="Login">
                <nav>
                    <ul>
                        <li class="DropDown">
                            <button><i class="fa-solid fa-user"></i></button>
                            <div class="DropDown_Menu">
                                <a>Nome :   <?php echo $_SESSION['Perfil']['Nome'];?></a>
                                <a>Email :  <?php echo $_SESSION['Perfil']['Email'];?></a>
                                <a>Senha :  <?php echo $_SESSION['Perfil']['Senha'];?></a>
                                <a>Nivel :  <?php echo $_SESSION['Perfil']['Nivel de Acesso'];?></a>
                                <a class="Btn-logout"><form method="POST"><input type="submit" name="logout" value="Sair"></form></a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Inicio -->
    <section>
        <div class="Welcome">
            <h3<p>Olá Administrador <?php echo  $_SESSION['Perfil']['Nome']?></p></h3>
        </div>
    </section>
 <!-- RODAPÉ -->
 <footer>
 </footer>
</body>
</html>
<?php
    if(isset($_POST['logout'])){header("Location:../logout.php");}else{return null;}
?>


        