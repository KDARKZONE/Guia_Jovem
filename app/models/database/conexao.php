<?php
    /** Criando a Classe Conexao armazenará a Conexao com o Banco De Dados */
    class Conexao{
        protected $conexao;
        
        /** Acessando os Atributos e Adicionando os Parametros  */
        public function __construct(){
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $dbname = 'guia_jovem';
            try{
                    $this->conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
                    $this->conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                echo "ERROR in ".$e->getMessage();
            }
        }
        

    }
?>
<?php
    
?>