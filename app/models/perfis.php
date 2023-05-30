    <?php
    require_once("../models/database/conexao.php");
    Class Perfis Extends Conexao{
        public $Nome;
        public $Email;
        public $Senha;
        public $Usuario;
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
                            echo "<script> alert(' Esse Usuario Ja Esta Cadastrado ')</script>";
                        }
                        else{
                            $query = $conexao->prepare("INSERT INTO perfis (nome,email,senha) VALUES (:nome,:email,:senha)");
                            $query->bindParam(':nome',$this->Nome);
                            $query->bindParam(':email',$this->Email);
                            $query->bindParam(':senha',$this->Senha);
                            $query->bindParam(':usuario',$this->Usuario);
                            $query->execute();
                            echo "<script> alert(' Cadastro efetuado com sucesso! ')</script>";
                    }
                    }catch (PDOException $E){
                        return "Error in inset Sing-in in the Banck. Error in ".$E->getMessage();
                    }
                }
            }
    }
    $Cadastrar = new Perfis();
    echo $Cadastrar->CadastrarPerfil(); 
    
?>
