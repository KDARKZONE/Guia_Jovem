
<?php
    session_start();
    require_once('../models/login.php');
    require_once 'site/header.php';
    require_once 'site/menu.php';
?>

<?php
        # verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
        # se não passa direto.
        if(isset($_GET['error'])) {
            echo "<script>alert(". $_GET['error'] .")</script>";
        }
    ?>

    <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
<header>
 <section >
        <?php 
            require_once("../models/database/conexao.php");
            $dbConnection = new Conexao();
            $db = $dbConnection->conexao();
            $sql = "SELECT thumb FROM post";
            $stmt = $db->prepare($sql);
            $stmt->execute(); 
            echo '<header class="post">';
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $caminho = 'autor/controllers/';
            echo '
                    <article class="noticias">
                        <a href="#">
                            <img src="'.$caminho.$row["thumb"].'" width="200" height="400" alt="Imagem post" title="Imagem Post">
                        </a>    
                        <p><a href="" class="category">Categoria</a></p>
                            <h2><a href=    "" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                                    error do    lorem. Recusandae,
                                    quo ex labor    um voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                                    aut 
                                    et e    veniet eaque quaerat!</a></h2>
                    </article>';
            
        }
        
        ?>
    </section>
</header>
    <!--FIM DA SESSÃO DE ARTIGOS-->
<?php
    
?>
<?php
require_once("site/footer.php");
?>
