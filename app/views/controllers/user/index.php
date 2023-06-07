<?php
require_once "layouts/head.php";
require_once "layouts/menu.php";
?>
<?php
        # verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
        # se não passa direto.
        if(isset($_GET['error'])) {
            echo "<script>alert(". $_GET['error'] .")</script>";
        }
    ?>
    <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
    <header class="post">
    </header>
<?php
require_once "layouts/footer.php";
?>