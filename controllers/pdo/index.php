<?php

    @$nome = $_POST['nome'];
    @$email = $_POST['email'];
    @$senha = $_POST['senha'];
    Function Nome($nome){
        if(isset($nome) && !empty($nome)){
            return $nome;
        }
        else{
            return "Nenhum Nome Inserido";
        }
    }
    Function Email($email){
        if(isset($email) && !empty($email)){
            return $email;
        }
        else{
            return "Nenhum E-mail";
        }
    }
    Function Senha($senha){
        if(isset($senha) && !empty($senha)){
            return $senha;
        }
        else{
            return "Nenhum Senha";
        }
    }
    require_once("Classe_Cadastro.php");
    $index = new CADASTRO($nome,$email,$senha);
    $NOME_DO_USUARIO = $index->__setNome(Nome($nome));
    $EMAIL_DO_USUARIO = $index->__setEmail(Email($email));
    $SENHA_DO_USUARIO = $index->setSenha(Senha($senha));
    require_once("insert.php");
    try{
        $NOME_DO_USUARIO;
        $sql = "SELECT * FROM perfis WHERE nome_usuario = :nome";
        $stmt = $BANCO_DE_DADOS->prepare($sql);
        $stmt->bindParam(':nome',$NOME_DO_USUARIO);
        $stmt->execute();
        if ($stmt->rowCount() > 0){
            if(isset($_POST['submit'])){
                echo "<script> alert('E-mail ja se Encontra Cadastrado')</script>";
            }
        }
        else{
            if(isset($_POST['submit'])){
                
                echo "<script> alert('Usuario Cadastrado com sucesso')</script>";
            }
        }
    }
    catch(PDOException $E){
        echo "Error system in local ".$E->getMessage();
    }
?>