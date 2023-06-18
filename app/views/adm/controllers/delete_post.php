<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        
        // Excluir os comentários relacionados ao post
        $sqlDeleteComentarios = "DELETE FROM comentarios WHERE ID_post = :id";
        $stmtDeleteComentarios = $db->prepare($sqlDeleteComentarios);
        $stmtDeleteComentarios->bindParam(':id',$id);
        $stmtDeleteComentarios->execute();
        
        // Excluir o post
        $sqlDeletePost = "DELETE FROM post WHERE ID_post = :id";
        $stmtDeletePost = $db->prepare($sqlDeletePost);
        $stmtDeletePost->bindParam(':id',$id);
        $stmtDeletePost->execute();
        
        header("Location:../post.php"); 
        exit;
    }