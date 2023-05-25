<?php
        @$_SESSION['nome'] = $_POST['nome'];
        @$_SESSION['email'] = $_POST['email'];
        @$_SESSION['senha'] = $_POST['senha'];
        Function Nome(){
            if(isset($_SESSION['nome']) && !empty($_SESSION['nome'])){
                return $_SESSION['nome'];
            }
            else{
                return null;
            }
        }
        Function Email(){
            if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
                return $_SESSION['email'];
            }
            else{
                return null;
            }
        }
        Function Senha(){
            if(isset($_SESSION['senha']) && !empty($_SESSION['senha'])){
                return $_SESSION['senha'];
            }
            else{
                return null;
            }
        }
        require_once("./database/conexao.php");
            /** Criando a Classe  que vai herdar a conexão com o banco*/ 
            class Perfis extends Conexao{ 
                protected $Nome; /** Atributo Nome da Classe Dado Como Protegido  */
                protected $Email; /** Atributo Email da Classe Dado Como Protegido  */
                protected $Senha; /** Atributo Senha da Classe Dado como Protegido  */
                protected $Foto; /** Inserir foto default no banco quando o usuário for cadastrado  */
                protected $Nivel_de_acesso; /** Inserir nivel de acesso default no banco quando o usuário for cadastrado para usuario comum */
            public function __construct(){
                parent::__construct();
            }
                /** Criando uma função publica com o Metodo Magico __set()  */
                public function __setNome($VALUE){ /** Pegando o Parametro $NOME e Criando um Parametro Value */
                    if(preg_match('/[A-Z]/',$VALUE) && preg_match('/[a-z]/',$VALUE)){ /** o Parametro Value ta sendo usado para checar se o Parametro Value e uma string */
                        return  $this->Nome = $VALUE; /** retornando o Parametro NOME igual a VALUE para checar se o NOME inserido e uma string */
                    }
                    else
                    {
                        return "ERROR";
                    }
                }
                /** Criando uma função publica com o Metodo Magico __get() */
                public function __getNome(){ 
                    return $this->Nome;/** Retornando ao Nome */
                }
                /** Criando uma Função Publica com o Metodo Magico __set() */
                public function __setEmail($VALUE){
                    if(filter_var($VALUE, FILTER_VALIDATE_EMAIL)){/** Atraves do filter_var, FILTER_VALIDATE_EMAIL validamos se o VALUE e um email */
                        return $this->Email = $VALUE; /** retornando ao Paramentro EMAIL */
                        
                    }
                    else{
                        return "ERROR";
                    }
                }
                public function __getEmail(){
                    return $this->Email;
                }

                public function setSenha($VALUE){
                    if(preg_match('/[A-Z]/',$VALUE)&& preg_match('/[a-z]/',$VALUE)&& preg_match('/[1 - 9]/',$VALUE)){
                        return base64_encode( $this->Senha = $VALUE);
                    }
                    else{
                        return "ERROR";
                    }
                }
                public function getSenha(){
                    return $this->Senha;
                }
                public function cadastro($dados){
                $stmt = $this->conexao->prepare("SELECT*FROM perfis WHERE nome = :nome AND email = :email AND senha = :senha");
                    $stmt->execute([':nome' => Nome() , ':email' => Email() , ':senha' => Senha()]);
                if($stmt->rowCount() > 0){
                        return "<script>alert('Usuario Ja Cadastrado')</script>";
                }
                else{
                
                    $sql = "INSERT INTO perfis (nome, email,senha) VALUES (:nome,:email,:senha) ";
                    $stmt = $this->conexao->prepare($sql);
                    $stmt->bindParam(":nome",$dados["nome"]);
                        
                    $stmt->bindParam(":email",$dados["email"]);
                        
                    $stmt->bindParam(":senha",$dados["senha"]);
                    $stmt->execute();
                    return "<script>alert('Usuario Cadastrado com sucesso')</script>";
                }
            
            }
            
        }
        // $index = new Perfis(Nome(),Email(),Senha());
        // $NOME_DO_USUARIO = $index->__setNome(Nome());
        // $EMAIL_DO_USUARIO = $index->__setEmail(Email());
        // $SENHA_DO_USUARIO = $index->setSenha(Senha());
?>  