<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        // Excluir registros da tabela 'comentarios' relacionados ao ID_perfil
        $sqlDeleteComentarios = "DELETE FROM comentarios WHERE ID_perfil = :id";
        $stmtDeleteComentarios = $db->prepare($sqlDeleteComentarios);
        $stmtDeleteComentarios->bindParam(':id', $id);
        $stmtDeleteComentarios->execute();

        // Excluir registros da tabela 'post' relacionados ao ID_perfil
        $sqlDeletePosts = "DELETE FROM post WHERE ID_perfil = :id";
        $stmtDeletePosts = $db->prepare($sqlDeletePosts);
        $stmtDeletePosts->bindParam(':id', $id);
        $stmtDeletePosts->execute();

        // Excluir registros da tabela 'autores' relacionados ao ID_perfil
        $sqlDeleteAutores = "DELETE FROM autores WHERE ID_perfil = :id";
        $stmtDeleteAutores = $db->prepare($sqlDeleteAutores);
        $stmtDeleteAutores->bindParam(':id', $id);
        $stmtDeleteAutores->execute();

        // Excluir registros da tabela 'usuarios_comuns' relacionados ao ID_perfil
        $sqlDeleteUsuariosComuns = "DELETE FROM usuarios_comuns WHERE ID_perfil = :id";
        $stmtDeleteUsuariosComuns = $db->prepare($sqlDeleteUsuariosComuns);
        $stmtDeleteUsuariosComuns->bindParam(':id', $id);
        $stmtDeleteUsuariosComuns->execute();

        // Excluir registro da tabela 'perfis'
        $sqlDeletePerfil = "DELETE FROM perfis WHERE ID_perfil = :id";
        $stmtDeletePerfil = $db->prepare($sqlDeletePerfil);
        $stmtDeletePerfil->bindParam(':id', $id);
        $stmtDeletePerfil->execute();
        header("Location:../dados.php");
        $sql = "DELETE FROM Perfis WHERE ID_perfil = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        header("Location:dados.php");
        exit;
    }
    var_dump($stmtDeletePerfil);
?>