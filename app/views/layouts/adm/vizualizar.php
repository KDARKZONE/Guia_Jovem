<?php
session_start();
require_once("layout_adm/header.php");
require_once("layout_adm/menu.php");
require_once("layout_adm/footer.php");
?>
    <section>
        <article>
        <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $Banco_De_Dados = 'guia_jovem';

    try{
        $BANCO_DE_DADOS = new PDO("mysql:host=$host;dbname=$Banco_De_Dados",$user,$password);
    }
    catch(PDOException $E){
        echo "ERROR".$E->getMessage();
    }

    $sql = "SELECT*FROM perfis";
    $stmt = $BANCO_DE_DADOS->query($sql);
    
    echo "<table border='1px solid'><tr><th>Nome:</th><th>E-mail:</th><th>Senha:</th></tr>";
    while($bd = $stmt->fetch()){
        echo "<tr><td>".$bd['nome']."</td><td>".$bd['email']."</td><td>".$bd['senha']."</td></tr>";
    }
    echo "</table>";
?>
        </article>
    </section>
</body>
</html>









































