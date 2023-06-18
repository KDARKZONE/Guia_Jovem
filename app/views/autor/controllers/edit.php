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
    <body style="background-color: #333; display: flex; align-items: center; justify-content: center;">
        <div class="content" style="width:100%;">
            <form action='uptade.php' method='POST'>
                <input type='hidden' name='id' value='<?php echo $perfil["ID_post"]?>'>
                <label style="font-family: 'Fira Sans',sans-serif; color: white;"> Conteudo :</label><input type='text' name='new_conteudo' class="inputs required" style="font-family: 'Fira Sans',sans-serif" value="<?php echo  $perfil['conteudo']?>">
                <button type='submit'>Salvar</button>
            </form>
        </div>
    </body>