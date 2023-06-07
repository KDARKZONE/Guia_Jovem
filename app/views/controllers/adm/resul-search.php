<?php
    require_once("/XAMPP/htdocs/Guia_Jovem-Organizacao/site/conexao/conexao.php");
    $dbConnection = new Conexao();
    $db = $dbConnection->conexao();
    @$Letra = $_POST['search'];
    $Array = Array($Letra);
    $ultimoitem = end($Array);
    $tamanho = strlen($ultimoitem);
    $ultimaletra = substr($ultimoitem,$tamanho - 1);
    $sql = "SELECT nome FROM perfis WHERE nome LIKE :letra";
    $stmt = $db->prepare($sql);
    $stmt->execute(['letra' => $ultimaletra.'%']);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['nome']."<br>";
    }
?>