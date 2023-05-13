<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['Esvaziar'])){
        $sql = "DELETE FROM perfis";
        $stmt = $BANCO_DE_DADOS->exec($sql);
    }
   }
?>