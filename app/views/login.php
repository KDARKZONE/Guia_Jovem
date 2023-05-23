<?php
   session_start();
   // Requerir os Dados Caso o Formulario for Metodo Post
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Recebendo as Variaveis com Sessões 
    @$_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    // validando os Dados
    function Nome(){
        if($_SESSION['nome'] && !empty($_SESSION['nome'])){
            return $_SESSION['nome'];
        }
        else{
            return null;
        }
    }
    function Email(){
        if($_SESSION['email'] && !empty($_SESSION['email'])){
            return $_SESSION['email'];
        }
        else{
            return null;
        }
    }
   function Senha(){
    if($_SESSION['senha'] && !empty($_SESSION['senha'])){
        return $_SESSION['senha'];
    }
    else{
        return null;
    }
   }
}
   // Redirecionando o E-mail e Senha Administrativos
   if(((Email() == 'andersonpiresdacruz@gmail.com')&&(Senha() == 'Bolsolula1322')) || ((Email() == 'kauaalmeida8995@gmail.com')&&(Senha() == 'Bolsolula1322'))){
    header('Location:layouts/adm/index.php');
   }
   else{
    // se não tente a conexão com o Banco de Dados para ser um Usuario
    try{
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'guia_jovem';

        $conexão = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        $stmt = $conexão->prepare("SELECT*FROM perfis WHERE email = :email AND senha = :senha");
        $stmt->execute([':email' => Email() , ':senha' => Senha()]);
        if($stmt->rowCount() > 0){
            $_SESSION['usuario'] = true;
            // Redireciona o usuario para a Tela de Usuario
            header('Location: layouts/user/index.php');
            // Raviavel que puxa o Nome, pelo E-mail e a Senha
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // Puxando as Variaveis
            $_SESSION['nome_usuario'] = $NomeUsuario = $row['nome'];
            $_SESSION['email_usuario'] = $EmailUsuario = $row['email'];
            $_SESSION['senha_usuario'] = $SenhaUsuario = $row['senha'];
            // colocando elas em uma array
            $_SESSION['usuario'] = array(
                'nome' => $_SESSION['nome_usuario'],
                'email' => $_SESSION['email_usuario'],
                'senha' => $_SESSION['senha_usuario']
            );
        }
        else{
            echo "O usuario não foi encontrado";
        }
    }catch(PDOException $E){
        return 'Error in Conection in the Banck '.$E->getMessage();
    }
    // Validando se os Dados Ja Existem no Banco de Dados
}
?>