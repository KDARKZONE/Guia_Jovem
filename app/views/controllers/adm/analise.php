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
            <img src="../img/img-site/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="../Layout/Administrador.php"> Home </a></li>
                        <li><a href="../adm-acess/adm-pesquisar.php"> Pesquisar </a></li>
                        <li><a href="../adm-acess/adm-dados.php"> Dados </a></li>
                        <li><a href="../adm-acess/adm-noticia.php"> Noticias </a></li>
                        <li><a href="../adm-acess/adm-analise.php"> Analise </a></li>
                      </ul>
                </nav>
            </div>
            <div class="Login">
                <nav>
                    <ul>
                        <li class="DropDown">
                            <button><i class="fa-solid fa-user"></i></button>
                            <div class="DropDown_Menu">
                                <a>Nome :   <?php echo $_SESSION['administrador']['Nome'];?></a>
                                <a>Email :  <?php echo $_SESSION['administrador']['Email'];?></a>
                                <a>Senha :  <?php echo $_SESSION['administrador']['Senha'];?></a>
                                <a>Nivel : Administrador</a>
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
            <fieldset class="Painel-de-Controle">
                <legend class="painel-de-controle">
                    Painel de Controle 
                </legend>
                <fieldset class="Dados"><legend class="Descricao-Dado">Usuario Comum</legend><i class="fa-solid fa-user"></i><br>
                <?php 
                    require_once("../conexao/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();
                    $sql = "SELECT COUNT(*) AS total_usuarios_comuns FROM Perfis WHERE nivel_acesso = 'usuário comum'";
                    $stmt = $db->prepare($sql);
                    if($stmt->execute()){
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $totalUsuarioComuns = $row['total_usuarios_comuns'];
                        echo "Total de Usuarios: <br> <p>".$totalUsuarioComuns." Usuarios </p> ";
                    }else{
                        echo "Error";
                    }

                ?></fieldset>
                <fieldset class="Dados"><legend class="Descricao-Dado">Administrador</legend><i class="fa-sharp fa-solid fa-user-tie"></i><br>
                <?php 
                    require_once("../conexao/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();
                    $sql = "SELECT COUNT(*) AS total_administradores FROM Perfis WHERE nivel_acesso = 'administrador'";
                    $stmt = $db->prepare($sql);
                    if($stmt->execute()){
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $totalAdm = $row['total_administradores'];
                        echo "Total de Administradores: <br> <p>".$totalAdm." Administradores </p>";
                    }
                    else{
                        echo "Error";
                    }
                ?></fieldset>
                <fieldset class="Dados"><legend class="Descricao-Dado">Autores</legend><i class="fa-solid fa-tag"></i><br>
                <?php 
                    require_once("../conexao/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();
                    $sql = "SELECT COUNT(*) AS total_autor FROM Perfis WHERE nivel_acesso = 'autor'";
                    $stmt = $db->prepare($sql);
                    if($stmt->execute()){
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $totalAutor = $row['total_autor'];
                        echo "Total de Autores: <br> <p>".$totalAutor." Autores </p>";
                    }
                    else{
                        echo "Error";
                    }
                ?></fieldset>
                <fieldset class="Dados"><legend class="Descricao-Dado">Total</legend><i class="fa-solid fa-square-poll-vertical"></i><br>
                <?php 
                    require_once("../conexao/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();
                    $sql = "SELECT COUNT(*) AS total FROM Perfis WHERE nivel_acesso";
                    $stmt = $db->prepare($sql);
                    if($stmt->execute()){
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $total = $row['total'];
                        echo "Total de Cadastramentos: <br> <p>".$total." Cadastros </p>";
                    }
                ?></fieldset>
            </fieldset>
        </div>
    </section>
 <!-- RODAPÉ -->
 <footer>
 </footer>
</body>
</html>
<?php
    if(isset($_POST['logout'])){ header("Location:/XAMPP/htdocs/Guia_Jovem-Organizacao/site/Logout/Logout.php");}else{ return null;}
?>