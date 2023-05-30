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
                        $_SESSION['Perfil'] = Array(
                            'Nome' => $row['nome'],
                            'Email' => $row['email'],
                            'Senha' => $row['senha'],
                            'Nivel de Acesso' => $row['nivel_acesso']
                        );
                       require_once("/xampp/htdocs/Guia_Jovem/app/models/sessao.php");

                    }
                    else{
                        echo "<script> alert('O Usuario Não Cadastrado, registre-se')</script>";
                    }
                }catch(PDOException $e){
                    echo "<script> alert(' Error: ".$e->getMessage()."')</script>";
                }
            }else{
                return null;
                // echo "<script>alert('Os Dados não foram Enviados Corretamente Verifique o Metodo')</script>";
            }
        }
    }
    $Login = new Login();
    echo $Login->RealizarLogin();
?>