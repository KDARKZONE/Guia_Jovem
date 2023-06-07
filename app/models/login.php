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
                    $conexão = $this->conexao();
                    $query = $conexão->prepare("SELECT*FROM perfis WHERE email = :email AND senha = :senha");
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
                        
                        if (isset($_SESSION['Perfil']) && isset($_SESSION['Perfil']['nivel_acesso'])) {
                            $nivelacesso = $_SESSION['Perfil']['nivel_acesso'];
                
                            if ($nivelacesso === 'usuario comum') {
                                $_SESSION['usuario'] = true;
                                $_SESSION['administrador'] = null;
                                $_SESSION['autor'] = null;
                                header("location:../views/controllers/user/index.php");
                                echo'<script>alert("user")</script>';
                            } elseif ($nivelacesso === 'autor') {
                                $_SESSION['autor'] = true;
                                $_SESSION['usuario comum'] = null;
                                $_SESSION['administrador'] = null;
                                header("location:../views/controllers/autor/index.php");
                            } elseif ($nivelacesso === 'administrador') {
                                $_SESSION['administrador'] = true;
                                $_SESSION['usuario comum'] = null;
                                $_SESSION['autor'] = null;
                                echo'<script>alert("adm")</script>';
                                header("location:../views/controllers/adm/index.php");
                            }
                        } else {
                            return null;
                        }
                    }
                    else{
                        echo "<script> alert('O Usuario Não Cadastrado, registre-se')</script>";
                    }
                }catch(PDOException $e){
                    echo "<script> alert(' Error: ".$e->getMessage()."')</script>";
                }
            }else{
                return null;
            }
        }
    }
    $Login = new Login();
    echo $Login->RealizarLogin();
?>