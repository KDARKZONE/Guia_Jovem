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
                                <a class="Btn-logout"><form method="POST" action="./logout-adm.php"><input type="submit" name="logout" value="Sair"></form></a>
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
                    require_once("../../models/database/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();
                    $sql = "SELECT COUNT(*) AS total_usuarios_comuns FROM Perfis WHERE nivel_acesso = 'usuario comum'";
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
                    require_once("models/database/conexao.php");
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
                    require_once("../../models/database/conexao.php");
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
                   require_once("../../models/database/conexao.php");
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
