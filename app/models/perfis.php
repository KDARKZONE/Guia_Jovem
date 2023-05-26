<?php
    require_once("../models/database/conexao.php");
    
    class Perfis extends Conexao{
        protected $Nome;
        protected $Email;
        protected $Senha;
        protected $Foto;
        protected $Nivel_de_acesso;
    
        public function __construct(){
            parent::__construct();
        }
    
        public function getNome(){
            return $this->Nome;
        }
    
        public function getEmail(){
            return $this->Email;
        }
    
        public function getSenha(){
            return $this->Senha;
        }
    
        public function cadastro($dados){
                $stmt = $this->conexao->prepare("SELECT * FROM perfis WHERE email = :email AND senha = :senha");
                $stmt->execute([':email' => $dados['email'], ':senha' => $dados['senha']]);
    
                if($stmt->rowCount() > 0){
                    return "<script>alert('Usuário já cadastrado')</script>";
                }
                else{
                    $sql = "INSERT INTO perfis (nome, email, senha) VALUES (:nome, :email, :senha)";
                    $stmt = $this->conexao->prepare($sql);
                    $stmt->bindParam(":nome", $dados["nome"]);
                    $stmt->bindParam(":email", $dados["email"]);
                    $stmt->bindParam(":senha", $dados["senha"]);
                    $stmt->execute();
    
                    return "<script>alert('Usuário cadastrado com sucesso')</script>";
                }
            }
        }
    // }
    $index = new Perfis();
    echo $index->cadastro($_POST);
    
?>
