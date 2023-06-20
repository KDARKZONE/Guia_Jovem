<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['ID_perfil'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        // Excluir registros da tabela 'comentarios' relacionados ao ID_perfil
        $sqlDeleteComentarios = "DELETE FROM comentarios WHERE ID_perfil = :ID_perfil";
        $stmtDeleteComentarios = $db->prepare($sqlDeleteComentarios);
        $stmtDeleteComentarios->bindParam(':ID_perfil', $ID_perfil);
        $stmtDeleteComentarios->execute();
        
        // Excluir registros da tabela 'post' relacionados ao ID_perfil
        $sqlDeletePosts = "DELETE FROM post WHERE ID_perfil = :ID_perfil";
        $stmtDeletePosts = $db->prepare($sqlDeletePosts);
        $stmtDeletePosts->bindParam(':ID_perfil', $ID_perfil);
        $stmtDeletePosts->execute();
        
        // Excluir registros da tabela 'autores' relacionados ao ID_perfil
        $sqlDeleteAutores = "DELETE FROM autores WHERE ID_perfil = :ID_perfil";
        $stmtDeleteAutores = $db->prepare($sqlDeleteAutores);
        $stmtDeleteAutores->bindParam(':ID_perfil', $ID_perfil);
        $stmtDeleteAutores->execute();
        
        // Excluir registros da tabela 'usuarios_comuns' relacionados ao ID_perfil
        $sqlDeleteUsuariosComuns = "DELETE FROM usuarios_comuns WHERE ID_perfil = :ID_perfil";
        $stmtDeleteUsuariosComuns = $db->prepare($sqlDeleteUsuariosComuns);
        $stmtDeleteUsuariosComuns->bindParam(':ID_perfil', $ID_perfil);
        $stmtDeleteUsuariosComuns->execute();
        
        // Excluir registro da tabela 'perfis'
        $sqlDeletePerfil = "DELETE FROM perfis WHERE ID_perfil = :ID_perfil";
        $stmtDeletePerfil = $db->prepare($sqlDeletePerfil);
        $stmtDeletePerfil->bindParam(':ID_perfil', $ID_perfil);
        $stmtDeletePerfil->execute();
        header("Location:../dados.php");
        exit;
    }
?>