<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "SELECT * FROM Perfis WHERE ID_perfil = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
    }
?>
<html>
    <head>
        <title>
            Editar 
        </title>
        <link rel="stylesheet" href="../../assets/style/autor/css/form-autor.css">
        <style>@import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap");</style>
    </head>
    <?php
        if($perfil['nivel_acesso'] == 'usuario comum'){
          require_once("edit-usuario-comum.php");
        }
        else
        if($perfil['nivel_acesso'] == 'administrador'){
            require_once("edit-administrador.php");
        }
        else
        if($perfil['nivel_acesso'] == 'autor'){
            require_once("edit-autor.php");
        }
    ?>