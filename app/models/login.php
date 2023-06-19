
<?php  
    require_once("database/conexao.php");
    Class Login extends Conexao{
        protected  $Email; 
        protected  $Senha;
        public function RealizarLogin(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $this->Email = $_POST['email'];
                $this->Senha = base64_encode($_POST['senha']);
                try{
                    $conexao = $this->conexao();
                    $query = $conexao->prepare("SELECT*FROM perfis WHERE email = :email AND senha = :senha");
                    $query->bindParam(':email',$this->Email);
                    $query->bindParam(':senha',$this->Senha);
                    $query->execute();
                    if($query->rowCount() > 0){
                        $row = $query->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['Perfil'] = Array(
                            'nome' => $row['nome'],
                            'email' => $row['email'],
                            'ID_perfil' => $row['ID_perfil'],
                            'nivel_acesso' => $row['nivel_acesso']
                        );
                       require_once("sessao.php");
                    }
                    else{
                        echo "<script> alert('Oops! Verifique se os dados estão corretos e tente novamente ')
                        window.location.href='../../index.php';</script>";
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