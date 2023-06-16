<?php
    # caso o Administrador queira Saber os Nomes das Pessoas que estão no Banco Ordenado pela Primeira Letra do Nome
    require_once("../../../models/database/conexao.php");
    $dbConnection = new Conexao();
    $db = $dbConnection->conexao();
    @$Letra = $_POST['search'];
    $ultimaletra  = strtolower(substr($Letra, strrpos(trim($Letra), ' ') + 1, 1));
    
    if(
        strpos(strtolower($Letra), 'buscar') !== false ||
        strpos(strtolower($Letra), 'busque') !== false ||
        strpos(strtolower($Letra), 'mostre') !== false ||
        strpos(strtolower($Letra), 'mostrar') !== false


    )
        {
            
            try{
                if(
                    ($ultimaletra == 'A' || $ultimaletra == 'a') ||
                    ($ultimaletra == 'B' || $ultimaletra == 'b') ||
                    ($ultimaletra == 'C' || $ultimaletra == 'c') ||
                    ($ultimaletra == 'D' || $ultimaletra == 'd') ||
                    ($ultimaletra == 'E' || $ultimaletra == 'e') ||
                    ($ultimaletra == 'F' || $ultimaletra == 'f') ||
                    ($ultimaletra == 'G' || $ultimaletra == 'g') ||
                    ($ultimaletra == 'H' || $ultimaletra == 'h') ||
                    ($ultimaletra == 'I' || $ultimaletra == 'i') || 
                    ($ultimaletra == 'J' || $ultimaletra == 'j') ||
                    ($ultimaletra == 'K' || $ultimaletra == 'k') ||
                    ($ultimaletra == 'L' || $ultimaletra == 'l') ||
                    ($ultimaletra == 'M' || $ultimaletra == 'm') ||
                    ($ultimaletra == 'N' || $ultimaletra == 'n') ||
                    ($ultimaletra == 'O' || $ultimaletra == 'o') ||
                    ($ultimaletra == 'P' || $ultimaletra == 'p') ||
                    ($ultimaletra == 'Q' || $ultimaletra == 'q') ||
                    ($ultimaletra == 'R' || $ultimaletra == 'r') ||
                    ($ultimaletra == 'S' || $ultimaletra == 's') ||
                    ($ultimaletra == 'T' || $ultimaletra == 't') ||
                    ($ultimaletra == 'U' || $ultimaletra == 'u') ||
                    ($ultimaletra == 'V' || $ultimaletra == 'v') ||
                    ($ultimaletra == 'X' || $ultimaletra == 'x') ||
                    ($ultimaletra == 'Y' || $ultimaletra == 'y') ||
                    ($ultimaletra == 'Z' || $ultimaletra == 'z')
                ){
                    $sql = "SELECT nome FROM perfis WHERE nome LIKE :letra";
                    $stmt = $db->prepare($sql);
                    $stmt->execute(['letra' => $ultimaletra.'%']);
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $row['nome']."<br>";
                    }
                }
                else{
                    return null;
                }
            }catch(PDOException $E){
                echo "Error in the system ".$E->getMessage();
            }
    }
    else
    if(
        strpos(strtolower($Letra), 'quantidade') !== false 
        
    ){
        try{
            if(
                ($ultimaletra == 'A' || $ultimaletra == 'a') ||
                ($ultimaletra == 'B' || $ultimaletra == 'b') ||
                ($ultimaletra == 'C' || $ultimaletra == 'c') ||
                ($ultimaletra == 'D' || $ultimaletra == 'd') ||
                ($ultimaletra == 'E' || $ultimaletra == 'e') ||
                ($ultimaletra == 'F' || $ultimaletra == 'f') ||
                ($ultimaletra == 'G' || $ultimaletra == 'g') ||
                ($ultimaletra == 'H' || $ultimaletra == 'h') ||
                ($ultimaletra == 'I' || $ultimaletra == 'i') || 
                ($ultimaletra == 'J' || $ultimaletra == 'j') ||
                ($ultimaletra == 'K' || $ultimaletra == 'k') ||
                ($ultimaletra == 'L' || $ultimaletra == 'l') ||
                ($ultimaletra == 'M' || $ultimaletra == 'm') ||
                ($ultimaletra == 'N' || $ultimaletra == 'n') ||
                ($ultimaletra == 'O' || $ultimaletra == 'o') ||
                ($ultimaletra == 'P' || $ultimaletra == 'p') ||
                ($ultimaletra == 'Q' || $ultimaletra == 'q') ||
                ($ultimaletra == 'R' || $ultimaletra == 'r') ||
                ($ultimaletra == 'S' || $ultimaletra == 's') ||
                ($ultimaletra == 'T' || $ultimaletra == 't') ||
                ($ultimaletra == 'U' || $ultimaletra == 'u') ||
                ($ultimaletra == 'V' || $ultimaletra == 'v') ||
                ($ultimaletra == 'X' || $ultimaletra == 'x') ||
                ($ultimaletra == 'Y' || $ultimaletra == 'y') ||
                ($ultimaletra == 'Z' || $ultimaletra == 'z')
            ) 
            {
            $sql = "SELECT COUNT(*) AS total FROM perfis WHERE nome LIKE :letra";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':letra', $ultimaletra.'%');
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($result) {
                $totalRegistros = $result['total'];
                echo "Total de registros que começam com a letra '$ultimaletra': " . $totalRegistros;
            } else {
                echo "Nenhum registro encontrado.";
            }
        }
        } catch (PDOException $e) {
            echo "Falha na conexão com o banco de dados: " . $e->getMessage();
        }
    }
?>