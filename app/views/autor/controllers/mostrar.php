<?php
    require_once("../../../models/database/conexao.php");
    $dbConnection = new Conexao();
    $db = $dbConnection->conexao();
    $sql = "SELECT*FROM post";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<img src=".$row['thumb'].">";
    }
?>