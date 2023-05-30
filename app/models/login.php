<?php  
    require_once("../models/database/conexao.php");
    Class Login extends Conexao{
        protected  $Email; 
        protected  $Senha;
        public function RealizarLogin(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $this->Email = $_POST['email'];
                $this->Senha = base64_encode($_POST['senha']);
                try{
                    $conexão = $this->conexao();
                    $query = $conexão->prepare("SELECT*FROM perfis WHERE email = :email AND senha = :senha");
                    $query->bindParam(':email',$this->Email);
                    $query->bindParam(':senha',$this->Senha);
                    $query->execute();
                    if($query->rowCount() > 0){
                        $row = $query->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['usuario'] = Array(
                            'Nome' => $row['nome'],
                            'Email' => $row['email'],
                            'Senha' => $row['senha'],
                            'Ni' => $row['senha']
                        );
                        $_SESSION['administrador'] = null;
                        echo "<script> alert(' O usuario já Cadastrado !! ')</script>";
                    }
                    else{
                        echo "<script> alert(' O Usuario Não Cadastrado !!')</script>";
                    }
                }catch(PDOException $e){
                    echo "<script> alert(' Error: ".$e->getMessage()."')</script>";
                }
            }else{
                echo "<script>alert('Os Dados não foram Enviados Corretamente Verifique o Metodo')</script>";
            }
        }
    }
    $Login = new Login();
    echo $Login->RealizarLogin();
?>