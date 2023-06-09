<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        // $nome = $_POST['nome'];
        // $email = $_POST['email'];
        // $senha = $_POST['senha'];
        $nivel_de_acesso = $_POST['nivel_acesso'];
        require_once("../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE Perfis SET nivel_acesso = :nivel_acesso WHERE ID_perfil = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':nivel_acesso',$nivel_de_acesso);
        $stmt->execute();
        header("Location: dados.php");
        exit;
    }
?>