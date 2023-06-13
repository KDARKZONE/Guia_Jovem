<?php
    session_start();
    require_once("verificacao_autor.php");
    class Autor extends Verificacao{
        protected $cpf;
        protected $data_de_nascimento;

        public function Autor(){
            $this->Verificar();
            $ID_perfil = $this->ID_perfil;
            $this->cpf = $_POST['cpf'];
            $this->data_de_nascimento = $_POST['data_de_nascimento'];
            require_once("database/conexao.php");
            $dbConnection = new Conexao();
            $db = $dbConnection->conexao();
            $sql = "INSERT INTO autores (ID_perfil, cpf, data_de_nascimento) VALUES (:ID_perfil, :cpf,:data_de_nascimento)";
            $stmt = $db->prepare($sql);
            $stmt->BindParam(':cpf',$this->cpf);
            $stmt->BindParam(':data_de_nascimento',$this->data_de_nascimento);
            $stmt->BindParam(':ID_perfil',$ID_perfil);
            if($stmt->execute()){
                echo "Dados Inseridos no banco de Dados";
            }
            else{
                echo "Deu erro ai man";
            }   
        }
    }
    $autor = new Autor();
    //echo $autor->Autor();
?>