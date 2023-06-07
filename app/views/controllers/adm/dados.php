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
            <fieldset class="Configuer">
                <legend>
                    <input type="checkbox" id="hidden">
                    <label for="hidden">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </label>
                </legend>
            <header class="configuer-container">
                <form method="POST">
                    <div class="configuer-option">
                        <div class="op"><a><i class="fa-solid fa-user"></i><input type="submit" name="usuario" value="Usuario"></a></div>
                        <div class="op"><a><i class="fa-solid fa-user-tie"></i><input type="submit" name="administrador" value="Administrador"></a></div>
                        <div class="op"><a><i class="fa-solid fa-tag"></i><input type="submit" name="autor" value="Autor"></a></div>
                        <div class="op"><a><i class="fa-solid fa-delete-left"></i><input type="submit" name="clear" value="Limpar"></a></div>
                    </div>
                </form>
            </header>
            </fieldset>
            </header>
            <table id="usuariosTable" class="hidden">
                <tr class="title-table">
                    <td class="title">Id:</td>
                    <td class="title">Nome:</td>
                    <td class="title">E-mail:</td>
                    <td class="title">Senha: </td>
                    <td class="title">Nivel de Acesso</td>
                    <td class="title">Editar/Deletar</td>
                </tr>
                    <?php 
                    
                        // |----------------------------------------| Seleçao de Tabelas com PHP |------------------------------| \\

                        #Pegando o Checkbox
                        if(isset($_POST['clear'])){
                            echo "<tr style='display:none'></tr>";
                        }
                        else
                        if(isset($_POST['usuario'])){
                        require_once("../conexao/conexao.php"); 
                        $dbConnection = new Conexao();
                        $db = $dbConnection->conexao();
                        // |---------------------------------------------------| USUARIO |---------------------------------------| \\
                        $sql = "SELECT ID_perfil, nome ,email,senha ,nivel_acesso FROM Perfis WHERE nivel_acesso = 'usuário comum'";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr class='usuario'>";
                            echo "<td>".$row['ID_perfil']."</td>";
                            echo "<td>".$row['nome']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['senha']."</td>";
                            echo "<td>".$row['nivel_acesso']."</td>";
                            echo "<td class='btn'><button> Deletar </button><button> Editar </button>";
                            echo "</tr>";
                        }
                    } else 
                    if(isset($_POST['administrador'])){
                        require_once("../conexao/conexao.php"); 
                        $dbConnection = new Conexao();
                        $db = $dbConnection->conexao();
                 // |--------------------------------------------------| ADMINISTRADOR |-----------------------------------| \\
                $sql = "SELECT ID_perfil, nome,email,senha , nivel_acesso FROM Perfis WHERE nivel_acesso = 'administrador'";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr class='administrador' id='tabelaAdministrador'>";
                    echo "<td>".$row['ID_perfil']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['senha']."</td>";
                    echo "<td>".$row['nivel_acesso']."</td>";
                    echo "<td class='btn'><button> Deletar </button><button> Editar </button>";
                    echo "</tr>";
                }
            }
            else 
            if(isset($_POST['autor'])){
                require_once("../conexao/conexao.php"); 
                        $dbConnection = new Conexao();
                        $db = $dbConnection->conexao();
                    // |-------------------------------------------------------| AUTOR |--------------------------------------|\\
                    $sql = "SELECT ID_perfil, nome,email,senha, nivel_acesso FROM Perfis WHERE nivel_acesso = 'autor'";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr class='autor' id='tabelaAutor'>";
                        echo "<td>".$row['ID_perfil']."</td>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['senha']."</td>";
                        echo "<td>".$row['nivel_acesso']."</td>";
                        echo "<td class='btn'><button> Deletar </button><button> Editar </button>";
                        echo "</tr>";
                    }
                }else{
                    return null;
                }
                ?>
            </table>
        </div>
    </section>
 <!-- RODAPÉ -->
 <footer>
 </footer>
</body>
<script src="../adm-js/adm-option.js"></script>
</html>
<?php
    if(isset($_POST['logout'])){ header("Location:/XAMPP/htdocs/Guia_Jovem-Organizacao/site/Logout/Logout.php");}else{ return null;}
    ?>