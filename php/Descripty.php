<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'anderson24062004';
    $dbname = 'guia_jovem';

    try{
        $BANCO = new PDO("mysql:host=$host;dbname=$dbname", $user , $password);
        echo "<br> Connect Sucefull";
    }
    catch(PDOException $E){
        echo "ERROR".$E->getMessage();
    }

    $sql = "SELECT * FROM dados_cadastrais";
    $stmt = $BANCO->query($sql); 
    echo "<br><table border='1px solid'><tr><th>Nome:</th><th>E-mail:</th><th>Senha:</th></tr>";
    while($bd = $stmt->fetch()){
        echo "<tr><td>".base64_decode($bd['nome'])."</td><td>".base64_decode($bd['email'])."</td><td>".base64_decode($bd['senha'])."</td></tr>";
    }
    echo "</table>";
   
?>