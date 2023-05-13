<?php
    $Email = $_POST['email'];
    $Senha = $_POST['senha'];

    if($Email == "andersonpiresdacruz@gmail.com" || $Email == "kauaalmeida8995@gmail.com" && $Senha == "Bolsolula1322"){
        require_once("adm/painel_de_controle.php");
    }
    else{
        try{
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'guia_jovem';

        $conection = new PDO("mysql:host=$host;dbname=$dbname", $user , $password);
        try{
            $Email;
            $Senha;
            $sql = "SELECT * FROM perfis WHERE email = :email AND senha = :senha";
            $stmt = $conection->prepare($sql);
            $stmt->bindParam(':email',$Email);
            $stmt->bindParam(':senha',$Senha);
            $stmt->execute(array(':email' => $Email , 'senha' => base64_encode($Senha)));
            if($stmt->rowCount() > 0){
                require_once('user/usuario.html');
            }
            else{
                echo "<script>alert('E-mail ou Se   nha estão Incorretos ')</script>";
            }
        }
        catch(PDOException $E){
            echo "Error system in".$E->getMessage();
        }
    }
    catch(PDOException $E){
        echo "Error system in".$E->getmessage();
    }
    }
    
?> 