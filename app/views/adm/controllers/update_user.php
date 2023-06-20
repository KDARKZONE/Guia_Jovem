<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['ID_perfil'];
        // $nivel_de_acesso = $_POST['nivel_acesso'];
        $escolha = $_POST['editar'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE Perfis SET nivel_acesso = :nivel_acesso WHERE ID_perfil = :ID_perfil";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':ID_perfil',$id);
        $stmt->bindParam(':nivel_acesso',$escolha);
        $stmt->execute();
        header("Location: ../dados.php");
        exit;
    }
?>