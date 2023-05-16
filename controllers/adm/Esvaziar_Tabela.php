<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados </title>
    <link rel="icon" href="style/img/logooo.png">
    <link rel="stylesheet" href="style/styles.css"> 
    <script src="https://kit.fontawesome.com/7bcc76ecaf.js" crossorigin="anonymous"></script>
</head>
<body>
<fieldset>
            <h1> PAINEL DE CONTROLE </h1>
        </fieldset>
        <header>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa-solid fa-bars"></i> 
        </label>
        <nav>
            <ul>
                <li><a href="painel_de_controle.php"> Home </a></li>
                <li><a href="vizualizar.php"> Vizualizar Banco (Criptografado) </a></li>
                <li><a href="Esvaziar_Tabela.php"> Limpar Tabela </a></li>
                <li><a href="search.html"> Pesquisar no Banco</a></li>
                <li><a href="Deletar_item.html"> Deletar item </a></li>
            </ul>
        </nav>
    </header>
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
    <footer>
        <?php
        if(isset($_POST['submit']));
            require_once("clear_table.php");
        ?>
        <form method="POST" action="Esvaziar_Tabela.php"> 
        <input type="submit" value="Esvaziar" name="Esvaziar">
        </form>
    </footer>
</body>
</html>