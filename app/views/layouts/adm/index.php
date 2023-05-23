<?php
session_start();
require_once("layout_adm/header.php");
require_once("layout_adm/menu.php");
?>
    <section>
            <article>
                <p>PAINEL DE CONTROLE</p>
            </article>
        </section>
    </body>
</html>
<?php
    if(isset($_POST['logout'])){
        header('Location:../../logout.php');
    }
?>