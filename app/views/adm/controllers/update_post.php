<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['ID_post'];
        $conteudo = $_POST['conteudo'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE post SET conteudo = :conteudo WHERE ID_post = :ID_post";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':ID_post',$id);
        $stmt->bindParam(':conteudo',$conteudo);
        $stmt->execute();
        header("Location:../notice.php");
        exit;
    }
?> 