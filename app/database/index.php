<?php
    // session_start();
    // @$_SESSION['nome'] = $_POST['nome'];
    // @$_SESSION['email'] = $_POST['email'];
    // @$_SESSION['senha'] = $_POST['senha'];
    // Function Nome(){
    //     if(isset($_SESSION['nome']) && !empty($_SESSION['nome'])){
    //         return $_SESSION['nome'];
    //     }
    //     else{
    //         return null;
    //     }
    // }
    // Function Email(){
    //     if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
    //         return $_SESSION['email'];
    //     }
    //     else{
    //         return null;
    //     }
    // }
    // Function Senha(){
    //     if(isset($_SESSION['senha']) && !empty($_SESSION['senha'])){
    //         return $_SESSION['senha'];
    //     }
    //     else{
    //         return null;
    //     }
    // }
    // require_once("Classe_Cadastro.php");
    // $index = new Usuario(Nome(),Email(),Senha());
    // $NOME_DO_USUARIO = $index->__setNome(Nome());
    // $EMAIL_DO_USUARIO = $index->__setEmail(Email());
    // $SENHA_DO_USUARIO = $index->setSenha(Senha());
    // require_once("insert.php");
    // try{
    //     $stmt = $BANCO_DE_DADOS->prepare("SELECT*FROM perfis WHERE nome = :nome AND email = :email AND senha = :senha");
    //     $stmt->execute([':nome' => Nome() , ':email' => Email() , ':senha' => Senha()]);
    //     if($stmt->rowCount() > 0){
    //         echo "<script>alert('Usuario Ja Cadastrado')</script>";
    //     }
    //     else{
    //         echo "<script>alert('Usuario Cadastrado com sucesso')</script>";
    //     }
    // }
    // catch(PDOException $E){
    //     echo "Error system in local ".$E->getMessage();
    // }
?>