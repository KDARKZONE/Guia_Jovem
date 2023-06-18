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
                    <td class="title">Categoria:</td>
                    <td class="title">Conteudo:</td>
                    <td class="title">Editar/Deletar</td>
                </tr>
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
           while ($row_cpf = $stmt_cpf->fetch(PDO::FETCH_ASSOC)) {
               echo "<tr>";
               echo "<td>".$row_cpf['ID_post']."</td>";
               echo "<td>".$row_cpf['data_hora_post']."</td>";
               echo "<td>".$row_cpf['thumb']."</td>";
               echo "<td>".$row_cpf['titulo']."</td>";
               echo "<td>".$row_cpf['categoria']."</td>";
               echo "<td>".$row_cpf['conteudo']."</td>";
               echo "<td class='btn'>";
               echo "<form action='controllers/delete.php' method='POST' style='display:inline'>";
               echo "<input type='hidden' name='id' value='".$row_cpf['ID_post']."'>";
               echo "<button type='submit'>Deletar</button>";
               echo "</form>";
               echo "<form action='controllers/edit.php' method='post' style='display:inline'>";
               echo "<input type='hidden' name='id' value='".$row_cpf['ID_post']."'>";
               echo "<button type='submit'>Editar</button>";
               echo "</form>";
               echo "</td>";
               echo "</tr>";
           }
        }
           ?>
        </div>
    </section>