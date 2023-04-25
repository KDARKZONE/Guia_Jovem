<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'anderson24062004';
    $Banco_De_Dados = 'guia_jovem';

    try{
        $BANCO_DE_DADOS = new PDO("mysql:host=$host;dbname=$Banco_De_Dados",$user,$password);
        echo "<br> Guia Jovem DB";
    }
    catch(PDOException $E){
        echo "ERROR".$E->getMessage();
    }

    $sql = "SELECT * FROM dados_cadastrais";
    $stmt = $BANCO_DE_DADOS->query($sql);
    
    echo "<table border='1px solid'><tr><th>Nome:</th><th>E-mail:</th><th>Senha:</th></tr>";
    while($bd = $stmt->fetch()){
        echo "<tr><td>".$bd['nome']."</td><td>".$bd['email']."</td><td>".$bd['senha']."</td></tr>";
    }
    echo "</table>";
    //$sql = "DELETE FROM dados_cadastrais";
    //$stmt = $BANCO_DE_DADOS->prepare($sql);
    //$stmt->execute();

?>