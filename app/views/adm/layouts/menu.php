<?php
    require_once "header.php";
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dados.php">Dados</a></li>
                        <li><a href="notice.php">Noticia</a></li>
                        <li><a href="analise.php">Analise</a></li>
                        </ul>
                    </nav>
                <div class="perfil">
            
                </div>
            </div>
        <!-- MENU TOTAL -->
        <div class="container">
            <div class="logo"> 
            <img src="../assets/style/adm/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dados.php">Dados</a></li>
                        <li><a href="post.php">Noticia</a></li>
                        <li><a href="analise.php">Analise</a></li>
                      </ul>
                </nav>
            </div> 
            <div class="perfil">
                <nav>
                    <ul>
                        <li class="DropDown">
                            <button><i class="fa-solid fa-user"></i></button>
                            <div class="DropDown_Menu">
                                <a class="Informações"><?php echo @$_SESSION['Perfil']['nome']; ?></a>
                                <a class="Informações"><?php echo @$_SESSION['Perfil']['email']; ?></a>
                                <a class="Informações"><?php echo @$_SESSION['Perfil']['ID_perfil']; ?></a>
                                <a class="Informações"><?php echo @$_SESSION['Perfil']['nivel_acesso'];?></a>
                                <a class="Btn-logout"><form method="POST"><input type="submit" name="logout" value="Sair"></form></a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
<?php
    if(isset($_POST['logout'])){header("Location:controllers/logout.php");}else{return null;}
?>

