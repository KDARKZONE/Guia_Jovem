<?php

    $nome = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
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
    require_once("Banco_de_Dados.php");
    require_once("Cripty.php");
    echo "<br><button><a href='Descripty.php'> DESCRIP </a></button>";
?>