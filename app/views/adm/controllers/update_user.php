<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        // $nivel_de_acesso = $_POST['nivel_acesso'];
        $escolha = $_POST['editar'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE Perfis SET nivel_acesso = :nivel_acesso WHERE ID_perfil = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':nivel_acesso',$escolha);
        $stmt->execute();
        header("Location: ../dados.php");
        exit;
    }
?>