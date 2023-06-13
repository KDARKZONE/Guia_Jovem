<?php 
  session_start();
  if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true){

    require_once("../../models/database/conexao.php");
  
    class Autor extends Conexao{
        protected $cpf;
        protected $data_de_nascimento;
        protected $ID_perfil;
    
        public function verificarAutor() {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $this->cpf = $_POST['cpf'];
                $this->data_de_nascimento = $_POST['data_de_nascimento'];
                try{
                    $conexao = $this->conexao(); // Conecte-se ao banco de dados
                    // Verifique se o autor já possui CPF e data de nascimento preenchidos
                    $query = $conexao->prepare("SELECT cpf, data_nascimento FROM autores WHERE id_perfil = :id_perfil");
                    $query->bindParam(':id_perfil', $_SESSION['Perfil']['ID_perfil']); // Use o ID do perfil
                    $query->execute();
    
                    $row = $query->fetch(PDO::FETCH_ASSOC);
                    $cpf = $row['cpf'];
                    $dataNascimento = $row['data_nascimento'];
                    $id_perfil = $conexao->lastInsertId();
    
                    if (empty($cpf) && empty($dataNascimento)) {
                        // Exiba o formulário para o autor digitar CPF e data de nascimento
                        echo '
                            <form method="POST" action="processar_formulario.php">
                                <label for="cpf">CPF:</label>
                                <input type="text" name="cpf" id="cpf" required>
                                
                                <label for="data_nascimento">Data de Nascimento:</label>
                                <input type="date" name="data_de_nascimento" id="data_de_nascimento" required>
                                
                                <button type="submit">Enviar</button>
                            </form>
                        ';
                    } else {
                      return null;
                    }
                } catch (PDOException $e) {
                    echo "Erro: " . $e->getMessage();
                }
            }
        }
    }
    
    $autor = new Autor();
    $autor->verificarAutor();
  
  }
  else{
    echo "<script>alert('Não existe conta cadastratada, por favor cadastre-se novamente');
    window.location.href='../../../../index.php';<script>";
  }
 ?>