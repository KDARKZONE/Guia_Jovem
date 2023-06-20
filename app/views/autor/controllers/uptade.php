<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id = $_POST['id'];
        $titulo = $_POST['new_titulo'];
        $conteudo = $_POST['new_conteudo'];
        $categoria = $_POST['new_categoria'];
        $Pasta = 'IMG-autor/';/** Criando uma variavel que guarde o Caminho que a Pasta onde a Imagem será guardada **/
        $Nome_Imagem = $_FILES['new_image']['name'];/** Pegando o Nome do Arquivo  */
        $New_Nome_Imagem = uniqid($Nome_Imagem);/** Adicionando um Novo Nome ao Nome do Arquivo */
        $Extensao = strtolower(pathinfo($Nome_Imagem,PATHINFO_EXTENSION)); /** strtolower e usado para transformar as letras de MAISCULAS para todas minusculas, no caso da imagem estar em JPG ou PNG, mas a função pathinfo('',PATHINFO_EXTENSION) para buscar a extensão da Imagem (PNG ou JPG) */
        /** Criando uma Excessão */
        // if($Extensao != 'jpg' && $Extensao != 'png' && $Extensao != 'JPEG'){
        //     die("<script>alert('Tipo de Arquivo não aceito Verifique se a Extenção esta em png ou jpg');
        //     window.location.href='../index.php';</script>");
        // }
        /** Caso exista erros */
        if($_FILES['new_image']['error'] >= 1){
            die("<scrip>alert('Error ao Tentar enviar um arquivo certifique-se que o arquivo é realmente uma imagem');
            window.location.href='index.php';</script>");
        }
        $New_Pasta = $Pasta.$New_Nome_Imagem.".".$Extensao; 
        $imagem = move_uploaded_file($_FILES['new_image']['tmp_name'],$New_Pasta);

        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE post SET titulo = :titulo, conteudo = :conteudo, categoria = :categoria, thumb = :thumb WHERE ID_post = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':titulo',$titulo);
        $stmt->bindParam(':conteudo',$conteudo);
        $stmt->bindParam(':categoria',$categoria);
        $stmt->bindParam(':thumb',$New_Pasta);
        $stmt->execute();
        header("Location: ../Meus_post.php");
        exit;
    }
?> 