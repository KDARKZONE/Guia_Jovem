<?php
require_once("index.php");
    /** CONEXÃO COM BANCO DE DADOS WORKBENCH */
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $Banco_de_Dados = 'guia_jovem';

    try{
        $BANCO_DE_DADOS = new PDO("mysql:host=$host;dbname=$Banco_de_Dados", $user, $password);
        echo "Banco de Dados Encontrado !!!";
    }catch(PDOException $E){
        echo "ERROR".$E->getMessage();
    }
    $sql = "INSERT INTO dados_cadastrais (nome,email,senha) VALUES (:nome,:email,:senha) ";
    $stmt = $BANCO_DE_DADOS->prepare($sql);
    $stmt->bindParam(":nome",$NOME_DO_USUARIO);

    $stmt->bindParam(":email",$EMAIL_DO_USUARIO);

    $stmt->bindParam(":senha",$SENHA_DO_USUARIO);

    $teste = $stmt->execute();
    if($teste){
        echo " <br> USUARIO CADASTRADO COM SUCESSO";
    }
    else{
        echo " ERROR";
    }



?>