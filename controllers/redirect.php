<?php
    session_start();

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $Email = $_POST['email'];
        $Senha = $_POST['senha'];

        if($Email == "andersonpiresdacruz@gmail.com" || $Email == "kauaalmeida8995@gmail.com" && $Senha == "Bolsolula1322"){
            $_SESSION['email'] = $Email;
            header('Location:adm/index.php');
        }
        else{
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
                    $_SESSION['email'] = $Email;
                    header('Location:user/usuario.php');
                }
                else{
                    echo "<script>alert('Usuario Invalido Cadastre-se');
                    window.location.href='../index.php';</script>";
                    exit;
                }
            }
            catch(PDOException $E){
                echo "Error system in".$E->getMessage();
            }
        }
    }
    else{
        header('Location:../index.php');
    }
?>




























<?php
/*
    if(isset($_POST['email']) && isset($_POST['senha'])){
        $Email = $_POST['email'];
        $Senha = $_POST['senha'];

    if($Email == "andersonpiresdacruz@gmail.com" || $Email == "kauaalmeida8995@gmail.com" && $Senha == "Bolsolula1322"){
        header('Location:adm/index.php');
    }
    else{
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
                header('Location:user/usuario.php');
            }
            else{
                echo "<script>alert('Usuario Invalido Cadastre-se');
                window.location.href='../index.php';</script>";
        exit;
            }
        }
        catch(PDOException $E){
            echo "Error system in".$E->getMessage();
        }
    }
    }
else{
    header('Location:../index.php');
}*/
?>