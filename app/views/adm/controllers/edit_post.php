<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "SELECT * FROM post WHERE ID_post = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $perfil = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "<form action='update_post.php' method='POST'>";
        echo "<input type='hidden' name='id' value='".$perfil['ID_post']."'>";
        echo "Nivel de Acesso:<input type='text' name='nivel_acesso' value='".$perfil['conteudo']."'>";
        echo "<button type='submit'>Salvar</button>";
        echo "</form>";
    }
?> 