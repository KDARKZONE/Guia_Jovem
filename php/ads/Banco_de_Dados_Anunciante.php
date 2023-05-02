<?php
    require_once("index.php");
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $Banco = 'guia_jovem';

    try{
        $banco_de_dados = new PDO("mysql:host=$host;dbname=$Banco",$user,$password);
        echo "CONNECT SUCEFULL";
    }
    catch(PDOException $E){
        echo "ERROR".$E->getMessage();
    }
    $sql = "INSERT INTO Anunciante (nome,cnpj,email,endereco,senha) VALUES (:nome,:cnpj,:email,:endereco,:senha)";
    $stmt = $banco_de_dados->prepare($sql);
    $stmt->bindParam(':nome',$NOME);
    $stmt->bindParam(':cnpj',$CNPJ);
    $stmt->bindParam(':email',$EMAIL);
    $stmt->bindParam(':endereco',$ENDERECO);
    $stmt->bindParam(':senha',$SENHA);
    $bd = $stmt->execute();
    if($bd){
        echo "USUARIO INSERIDO";
    }
    else{
        echo "ERROR";
    }
?>