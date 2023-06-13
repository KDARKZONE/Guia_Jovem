<?php 
  @session_start();
  if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true){
    require_once("database/conexao.php");
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
                    echo '
                    <form method="POST" action="autor.php">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" required>
                                                    
                        <label for="data_nascimento">Data de Nascimento:</label>
                        <input type="date" name="data_de_nascimento" id="data_de_nascimento" required>
                                                    
                        <button type="submit" name="enviar">Enviar</button>
                    </form>';
                    if(isset($_POST['enviar'])){
                        require_once("autor.php");
                    }
                    /** Cria um Arquivo em PHP com o acton:'processar_formulario' , cria ai um ar */
                }
                else{
                    echo "os dados ja estão cadastrados";
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
  <!-- protected $cpf;
    //     protected $data_de_nascimento;
    //     protected $ID_perfil;
    //     public function verificarAutor() {
    //         // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //             $this->cpf = $_POST['cpf'];
    //             $this->data_de_nascimento = $_POST['data_de_nascimento'];
    //             $this->ID_perfil = $_SESSION['Perfil']['ID_perfil'];
    //             try{
    //                 $conexao = $this->conexao();
    //                 $stmt = $conexao->prepare("INSERT INTO autores (ID_perfil) VALUES (:ID_perfil)");
    //                 $stmt = $conexao->prepare("SELECT cpf, data_de_nascimento FROM autores WHERE ID_perfil = :ID_perfil");
    //                 $stmt->bindParam(':ID_perfil', $this->ID_perfil ); // Use o ID do perfil
    //                 $stmt->execute();
    //                 if($stmt->rowCount() > 1){
    //                 // return "<script>alert('Os dados não foram enviados pelo metodo POST')</script>";
    //                 echo "dados foram encontrados";
    //                 }
    //                 else{
    //                     $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //                     $cpf = $row['cpf'];
    //                     $data_de_nascimento = $row['data_de_nascimento'];
    //                     // $ID_perfil = $row['ID_perfil'];
    //                         if (empty($cpf) && empty($data_de_nascimento)) {
    //                             // Exiba o formulário para o autor digitar CPF e data de nascimento
    //                             echo '
    //                                 <form method="POST" action="processar_formulario.php">
    //                                     <label for="cpf">CPF:</label>
    //                                     <input type="text" name="cpf" id="cpf" required>
                                        
    //                                     <label for="data_nascimento">Data de Nascimento:</label>
    //                                     <input type="date" name="data_de_nascimento" id="data_de_nascimento" required>
                                        
    //                                     <button type="submit">Enviar</button>
    //                                 </form>';
    //                         } else{
    //                             return null;
    //                         }
    //                     }
    //                 } 
    //                 catch (PDOException $e) {
    //                     echo "Erro: " . $e->getMessage();
    //                 }
    //             // }
    //             // else{
    //             //     return "<script>alert('Os dados não foram enviados pelo metodo POST')</script>";
    //             // }
    //         }
    //     }
    //  $autor = new Verificacao();
    //  echo $autor->verificarAutor(); -->