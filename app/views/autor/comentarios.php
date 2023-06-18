<?php
    require_once("layouts/header.php");
    require_once("layouts/menu.php");  
?>
 <section class="noticia"> 
        <div class="post">
            <table id="usuariosTable" class="hidden">
                <tr class="title-table">
                    <td class="title">ID Comentário</td>
                    <td class="title">Data e Hora</td>
                    <td class="title">Comentário</td>
                    <td class="title">ID do Post</td>
                    <td class="title">ID do Perfil</td> 
                </tr>
                <?php
                    require_once("../../models/database/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();

                    $authorID = $_SESSION['Perfil']['ID_perfil'];

                    $sql = "SELECT * FROM comentarios WHERE ID_perfil = :ID_perfil ORDER BY data_hora_comentario DESC";

                    $stmt = $db->prepare($sql);
                    $stmt->bindParam(':ID_perfil', $authorID);
                    $stmt->execute();

                    ?>
                        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                            <tr>
                                <td><?php echo $row['ID_comentario']; ?></td>
                                <td><?php echo $row['data_hora_comentario']; ?></td>
                                <td><?php echo $row['comentario']; ?></td>
                                <td><?php echo $row['ID_post']; ?></td>
                                <td><?php echo $row['ID_perfil']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </table>