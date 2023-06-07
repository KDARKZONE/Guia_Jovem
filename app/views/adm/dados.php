<?php
    session_start();
    if(isset( $_SESSION['Perfil']) &&  $_SESSION['administrador'] == true){
        echo "<script>alert('Olá Administrador ".$_SESSION['Perfil']['Nome']."')</script>";
    }
    else{
        echo "<script>alert('Não existe conta cadastrada, por favor cadastra-se novamente');
        window.location.href = '../../index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Administrador </title>
        <link rel="icon" href="layout_adm/img/logooo.png">
        <link rel="stylesheet" href="styles/dados.css">
        <link rel="stylesheet" href="styles/hidden.css">
        <script src="../../adm-js/adm-option.js"></script>
        <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
    </head>
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
            <img src="./styles/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="../../layouts/adm/menu.php"> Home </a></li>
                        <li><a href="./search.php"> Pesquisar </a></li>
                        <li><a href="./dados.php"> Dados </a></li>
                        <li><a href="./notice.php"> Noticias </a></li>
                        <li><a href="./analise.php"> Analise </a></li>
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
                            require_once("/XAMPP/htdocs/Guia_Jovem-main/Guia_Jovem-main/app/models/database/conexao.php"); 
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
                            echo "<td class='btn'>";
                            echo "<form action='./CRUD/delete.php' method='POST' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Deletar </button>";
                            echo "</form>";
                            echo "<form action='./CRUD/edit.php' method='post' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Editar </button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else 
                    if(isset($_POST['administrador'])){
                        require_once("/XAMPP/htdocs/Guia_Jovem-main/Guia_Jovem-main/app/models/database/conexao.php");
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
                    echo "<td class='btn'>";
                            echo "<form action='./CRUD/delete.php' method='POST' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Deletar </button>";
                            echo "</form>";
                            echo "<form action='./CRUD/edit.php' method='post' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Editar </button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                }
            }
            else 
            if(isset($_POST['autor'])){
                require_once("/XAMPP/htdocs/Guia_Jovem-main/Guia_Jovem-main/app/models/database/conexao.php");
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
                        echo "<td class='btn'>";
                        echo "<form action='./CRUD/delete.php' method='POST' style='display:inline'>";
                        echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                        echo "<button type='submit'> Deletar </button>";
                        echo "</form>";
                        echo "<form action='./CRUD/edit.php' method='post' style='display:inline'>";
                        echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                        echo "<button type='submit'> Editar </button>";
                        echo "</form>";
                        echo "</td>";
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
</html>