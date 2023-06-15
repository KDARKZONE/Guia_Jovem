<?php 
    require_once "layouts/header.php";
    require_once "layouts/menu.php";
?>
<section class="dados">
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
                            require_once("../../models/database/conexao.php"); 
                        $dbConnection = new Conexao();
                        $db = $dbConnection->conexao();
                        // |---------------------------------------------------| USUARIO |---------------------------------------| \\
                        $sql = "SELECT ID_perfil, nome, email, nivel_acesso FROM Perfis WHERE nivel_acesso = 'usuario comum'";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr class='usuario'>";
                            echo "<td>".$row['ID_perfil']."</td>";
                            echo "<td>".$row['nome']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['nivel_acesso']."</td>";
                            echo "<td class='btn'>";
                            echo "<form action='controllers/delete_user.php' method='POST' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Deletar </button>";
                            echo "</form>";
                            echo "<form action='controllers/edit_user.php' method='post' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Editar </button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else 
                    if(isset($_POST['administrador'])){
                        require_once("../../models/database/conexao.php");
                        $dbConnection = new Conexao();
                        $db = $dbConnection->conexao();
                 // |--------------------------------------------------| ADMINISTRADOR |-----------------------------------| \\
                $sql = "SELECT ID_perfil, nome, email, nivel_acesso FROM Perfis WHERE nivel_acesso = 'administrador'";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr class='administrador' id='tabelaAdministrador'>";
                    echo "<td>".$row['ID_perfil']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['nivel_acesso']."</td>";
                    echo "<td class='btn'>";
                            echo "<form action='controllers/delete_user.php' method='POST' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Deletar </button>";
                            echo "</form>";
                            echo "<form action='controllers/edit_user.php' method='post' style='display:inline'>";
                            echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                            echo "<button type='submit'> Editar </button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                }
            }
            else 
            if(isset($_POST['autor'])){
                require_once("../../models/database/conexao.php");
                        $dbConnection = new Conexao();
                        $db = $dbConnection->conexao();
                    // |-------------------------------------------------------| AUTOR |--------------------------------------|\\
                    $sql = "SELECT ID_perfil, nome, email, nivel_acesso FROM Perfis WHERE nivel_acesso = 'autor'";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr class='autor' id='tabelaAutor'>";
                        echo "<td>".$row['ID_perfil']."</td>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['nivel_acesso']."</td>";
                        echo "<td class='btn'>";
                        echo "<form action='controllers/delete_user.php' method='POST' style='display:inline'>";
                        echo "<input type='hidden' name='id' value='".$row['ID_perfil']."'>";
                        echo "<button type='submit'> Deletar </button>";
                        echo "</form>";
                        echo "<form action='controllers/edit_user.php' method='post' style='display:inline'>";
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