<?php 
    require_once "layouts/header.php";
    require_once "layouts/menu.php";
?>
        <div class="container-autor" style="margin-top: 5cm; color: black;">
           <?php
           // Obtém o ID do perfil do autor logado
           $ID_perfil = $_SESSION['Perfil']['ID_perfil'];
           
           // Realiza a conexão com o banco de dados
           require_once("../../models/database/conexao.php");
           $dbConnection = new Conexao();
           $db = $dbConnection->conexao();
           $sql_autores = "SELECT * FROM autores";
           $stmt = $db->prepare($sql_autores);
           if($stmt->execute()){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $cpf = $row['cpf'];
            }
           }
            //Consulta SQL para puxar os anúncios do autor logado
           $sql_cpf = "SELECT*FROM post WHERE cpf = :cpf";
           $stmt_cpf = $db->prepare($sql_cpf);
           $stmt_cpf->bindParam(':cpf',$cpf);
           if($stmt_cpf->execute()){
           // Loop para exibir os anúncios do autor
           echo'<table width="1200px">
                    <tr>
                        <th class="title">Id:</th>
                        <th class="title">Data e hora de Publicação:</th>
                        <th class="title">Titulo:</th>
                        <th class="title">Categoria:</th>
                        <th class="title">Editar/Deletar</th>
                    </tr>';
           while ($row_cpf = $stmt_cpf->fetch(PDO::FETCH_ASSOC)) {
            echo'
                    <tr>
                    <td align="center">'.$row_cpf['ID_post'].'</td>
                    <td align="center">'.$row_cpf['data_hora_post'].'</td>
                    <td align="center">'.$row_cpf['titulo'].'</td>
                    <td align="center">'.$row_cpf['categoria'].'</td>
                    <td align="center" class="'.'btn'.'">
                    <form action="controllers/delete.php" method="POST" style="display:inline">
                    <input type="hidden" name="id" value='.$row_cpf["ID_post"].'>
                    <button type="submit">Deletar</button>
                    </form>
                    <form action="controllers/edit.php" method="post" style="display:inline">
                    <input type="hidden" name="id" value='.$row_cpf["ID_post"].'>
                    <button type="submit">Editar</button>
                    </form>
                    </td>
                    </tr>';
           }
           echo'</table>';
        }
           ?>
        </div>
