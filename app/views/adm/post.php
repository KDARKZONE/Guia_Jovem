<?php 
    require_once "layouts/header.php";
    require_once "layouts/menu.php";
?>
    <section class="noticia">
        <div class="post">
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
                echo "<form action='controllers/delete_post.php' method='POST' style='display:inline'>";
                echo "<input type='hidden' name='id' value='".$row['ID_post']."'>";
                echo "<button type='submit'>Deletar</button>";
                echo "</form>";
                echo "<form action='controllers/delete_post.php' method='post' style='display:inline'>";
                echo "<input type='hidden' name='id' value='".$row['ID_post']."'>";
                echo "<button type='submit'>Editar</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
        </div>
    </section>