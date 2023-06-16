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
            require_once("../../../models/database/conexao.php");
            $dbConnection = new Conexao();
            $db = $dbConnection->conexao();
            $sql = "INSERT INTO autores (ID_perfil, cpf, data_de_nascimento) VALUES (:ID_perfil, :cpf,:data_de_nascimento)";
            $stmt = $db->prepare($sql);
            $stmt->BindParam(':cpf',$this->cpf);
            $stmt->BindParam(':data_de_nascimento',$this->data_de_nascimento);
            $stmt->BindParam(':ID_perfil',$ID_perfil);
            if($stmt->execute()){
                echo "<script> alert(' Cadastro efetuado com sucesso! ');
                    window.location.href='../index.php';</script>";
            }
            else{
                return "<script>alert('Error')</script>";
            }   
        }
    }
    $autor = new Autor();
    echo $autor->Autor();
?>