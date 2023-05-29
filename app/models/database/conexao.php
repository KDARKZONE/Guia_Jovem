<?php
    /** Criando a Classe Conexão armazenará a Conexão com o Banco De Dados */
    class Conexao{
        protected $host;
        protected $user;
        protected $password;
        protected $dbname;
        /** Acessando os Atributos e Adicionando os Parametros  */
        public function __construct(){
            $this->host = 'localhost';
            $this->user = 'root';
            $this->password = '';
            $this->dbname = 'guia_jovem';
        }
        
        public function conexao(){
            try{
                $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
                $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conexao;
            }catch(PDOException $e){
                echo "ERROR in ".$e->getMessage();
            }
        }
    }
?>