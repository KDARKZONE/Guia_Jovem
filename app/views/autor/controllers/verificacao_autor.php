<?php 
  @session_start();
  if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true){
        require_once("../../../models/database/conexao.php");
        class Verificacao extends Conexao{
            protected $ID_perfil;
            Public function Verificar(){
                $this->ID_perfil = $_SESSION['Perfil']['ID_perfil'];
                $conexao = $this->conexao();
                $sql = "SELECT*FROM autores WHERE ID_perfil = :ID_perfil";
                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(':ID_perfil', $this->ID_perfil);
                $stmt->execute();
                if($stmt->execute()){
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    if(@$row['cpf'] == null && @$row['data_de_nascimento'] == null){
                        require_once("form-cadastrar-autor.php");
                        if(isset($_POST['enviar'])){
                            require_once("autor.php");
                        }
                        /** Cria um Arquivo em PHP com o acton:'processar_formulario' , cria ai um ar */
                    }
                    else{
                        header("Location: ../index.php");
                    }
                }
                else{
                    echo "Error ao executar função sql";
                }
                }
            } 
            $teste = new Verificacao();
        echo $teste->Verificar();
        }
   else{
        echo "<script>alert('Não existe conta cadastratada, por favor cadastre-se novamente');
        window.location.href='../../../../index.php';<script>";
    }
 ?>