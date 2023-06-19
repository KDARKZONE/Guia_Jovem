    <?php
    require_once("database/conexao.php");
    Class Perfis Extends Conexao{
        protected $Nome;
        protected $Email;
        protected $Senha;
        protected $Usuario;
        public function CadastrarPerfil(){
            
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $this->Nome = $_POST['nome'];
                    $this->Email = $_POST['email'];
                    $this->Senha = base64_encode($_POST['senha']);
                    $this->Usuario = $_POST['usuario'];
                    try {
                        $conexao = $this->conexao();
                        $query = $conexao->prepare("SELECT*FROM perfis WHERE email = :email");
                        $query->bindParam(':email',$this->Email);
                        $query->execute();
                        if($query->rowCount() > 0){
                            echo "<script> alert(' Esse Usuario Ja Esta Cadastrado ');
                            window.location.href='../../index.php';</script>";
                        }
                        else{
                            $query = $conexao->prepare("INSERT INTO perfis (nome,email,senha) VALUES (:nome,:email,:senha)");
                            $query->bindParam(':nome',$this->Nome);
                            $query->bindParam(':email',$this->Email);
                            $query->bindParam(':senha',$this->Senha);
                            $query->execute();
                            $id_perfil = $conexao->lastInsertId();
                            $query2 = $conexao->prepare("INSERT INTO usuarios_comuns (usuario, ID_perfil) VALUES (:usuario,:ID_perfil)");
                            $query2->bindParam(':usuario', $this->Usuario);
                            $query2->bindParam(':ID_perfil', $id_perfil);
                            $query2->execute();
                            echo "<script> alert(' Cadastro efetuado com sucesso! ');
                            window.location.href='../../index.php';</script>";
                            // require_once("")
                    }
                    }catch (PDOException $E){
                        return null;
                    }
                }
            }
    }
    $Cadastrar = new Perfis();
    echo $Cadastrar->CadastrarPerfil(); 
    
?>
