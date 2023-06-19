<?php
    session_start();
    $idPerfil = $_SESSION['Perfil']['ID_perfil'];
    require_once("../../../models/database/conexao.php");
    $dbConnection_usuario = new Conexao();
    $db_usuario = $dbConnection_usuario->conexao();
    $sql_usuario = "SELECT*FROM usuarios_comuns WHERE ID_perfil = :ID_perfil";
    $stmt_usuario = $db_usuario->prepare($sql_usuario);
    $stmt_usuario->bindParam(':ID_perfil',$idPerfil);
    if($stmt_usuario->execute()){
        while($row = $stmt_usuario->fetch(PDO::FETCH_ASSOC)){
            $usuario = $row['usuario'];
        }
    }
     $Pasta = 'Perfil-Img/';/** Criando uma variavel que guarde o Caminho que a Pasta onde a Imagem será guardada **/
     $Nome_Imagem = $_FILES['foto']['name'];/** Pegando o Nome do Arquivo  */
     $New_Nome_Imagem = uniqid($Nome_Imagem);/** Adicionando um Novo Nome ao Nome do Arquivo */
     $Extensao = strtolower(pathinfo($Nome_Imagem,PATHINFO_EXTENSION)); /** strtolower e usado para transformar as letras de MAISCULAS para todas minusculas, no caso da imagem estar em JPG ou PNG, mas a função pathinfo('',PATHINFO_EXTENSION) para buscar a extensão da Imagem (PNG ou JPG) */
     /** Criando uma Excessão */
     if($Extensao != 'jpg' && $Extensao != 'png' && $Extensao != 'JPEG'){
         die("<script>alert('Tipo de Arquivo não aceito Verifique se a Extenção esta em png ou jpg');
         window.location.href='../index.php';</script>");
     }
     /** Caso exista erros */
     if($_FILES['foto']['error'] >= 1){
         die("<scrip>alert('Error ao Tentar enviar um arquivo certifique-se que o arquivo é realmente uma imagem');
         window.location.href='index.php';</script>");
     }
     $New_Pasta = $Pasta.$New_Nome_Imagem.".".$Extensao; 
     $imagem = move_uploaded_file($_FILES['foto']['tmp_name'],$New_Pasta);
     require_once("../../../models/database/conexao.php");
    $dbConnection = new Conexao();
    $db = $dbConnection->conexao();

    $sql = "UPDATE usuarios_comuns SET foto_usuario = :foto_usuario WHERE usuario = :usuario";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':foto_usuario', $New_Pasta);
    $stmt->bindParam(':usuario', $usuario);
    if ($stmt->execute()) {
        die("<script>alert('Foto Enviada');
        window.location.href='../../index.php';</script>");
    } else {
        $errorInfo = $stmt->errorInfo();
        echo "Erro: " . $errorInfo[2];
    }
    ?> 