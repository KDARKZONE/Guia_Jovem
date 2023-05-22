<?php
session_start();
require_once("layout_adm/header.php");
require_once("layout_adm/menu.php");
require_once("layout_adm/footer.php");
?>

<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['Esvaziar'])){
        $sql = "DELETE FROM perfis";
        $stmt = $BANCO_DE_DADOS->exec($sql);
    }
   }
?>