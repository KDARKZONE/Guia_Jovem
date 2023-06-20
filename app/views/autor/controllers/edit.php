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
            <form action='uptade.php' method='POST' enctype="multipart/form-data">
                <input type='hidden' name='id' value='<?php echo $perfil["ID_post"]?>'>
                <label style="font-family: 'Fira Sans',sans-serif; color: white;">Titulo: </label><input type="text" name='new_titulo' class="inputs required" style="font-family: 'Fira Sans',sans-serif" value="<?php echo  $perfil['titulo']?>">
                <label style="font-family: 'Fira Sans',sans-serif; color: white;">Conteudo: </label><textarea name='new_conteudo' class="inputs required" style="font-family: 'Fira Sans',sans-serif" rows="7"><?php echo  $perfil['conteudo']?></textarea>
                <label style="font-family: 'Fira Sans',sans-serif; color: white;">Categoria:</label>
                <select name="new_categoria" class="inputs required">
                    <option value="<?php $perfil['categoria']?>"><?= $perfil['categoria'] ?></option>
                    <option value="Enem">Enem</option>
                    <option value="Prouni">Prouni</option>
                    <option value="Sisu">Sisu</option>
                    <option value="Fies">Fies</option>
                    <option value="Cursos">Cursos Técnicos</option>
                </select>
                <label style="font-family: 'Fira Sans',sans-serif; color: white;">Imagem:</label><img name='new_conteudo' class="inputs required" src="<?php echo  $perfil['thumb']?>">                
                <label style="font-family: 'Fira Sans',sans-serif; color: white;">Nova Imagem:</label><input type="file" name='new_image' class="inputs required" style="font-family: 'Fira Sans',sans-serif">
                <button type='submit'>Salvar</button>
            </form>
        </div>
    </body>