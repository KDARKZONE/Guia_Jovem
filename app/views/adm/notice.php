<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador</title>
        <link rel="icon" href="../assets/style/adm/img/logooo.png">
        <link rel="stylesheet" href="../assets/style/adm/css/dados.css">
        <link rel="stylesheet" href="../assets/style/adm/css/hidden.css">
        <script src="../assets/js/adm-option.js"></script>
        <script src="../assets/js/adm-option.js"></script>
        <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
    </head>
    <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel de Controle</title>
        <link rel="icon" href="../assets/style/adm/img/logooo.png">
        <link rel="stylesheet" href="../assets/style/adm/css/dados.css">
        <link rel="stylesheet" href="../assets/style/adm/css/hidden.css">
        <script src="../assets/js/adm-option.js"></script>
        <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
    </head>
    
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
    <!-- Inicio -->
    <section>
        <div class="Welcome">
        <table id="usuariosTable" class="hidden">
        <tr class="title-table">
            <td class="title">Id:</td>
            <td class="title">Data e hora de Publicação:</td>
            <td class="title">Thumb:</td>
            <td class="title">Titulo:</td>
            <td class="title">Conteudo:</td>
            <td class="title">Editar/Deletar</td>
        </tr>
        <?php
            require_once("../../models/database/conexao.php");
            $dbConnection = new Conexao();
            $db = $dbConnection->conexao();
            $sql = "SELECT ID_post, data_hora_post, thumb, titulo FROM post";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>".$row['ID_post']."</td>";
                echo "<td>".$row['data_hora_post']."</td>";
                echo "<td>".$row['thumb']."</td>";
                echo "<td>".$row['titulo']."</td>";
                echo "<td>".$row['conteudo']."</td>";
                echo "<td class='btn'>";
                echo "<form action='delete_notice.php' method='POST' style='display:inline'>";
                echo "<input type='hidden' name='id' value='".$row['ID_post']."'>";
                echo "<button type='submit'> Deletar </button>";
                echo "</form>";
                echo "<form action='edit_notice.php' method='post' style='display:inline'>";
                echo "<input type='hidden' name='id' value='".$row['ID_post']."'>";
                echo "<button type='submit'> Editar </button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
        </div>
    </section>