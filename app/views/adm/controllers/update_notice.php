<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        $conteudo = $_POST['conteudo'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE post SET conteudo = :conteudo WHERE ID_post = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':conteudo',$conteudo);
        $stmt->execute();
        header("Location:../notice.php");
        exit;
    }
?> 