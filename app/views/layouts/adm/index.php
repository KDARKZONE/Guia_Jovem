<?php
session_start();
require_once("layout_adm/header.php");
require_once("layout_adm/menu.php");
require_once("layout_adm/footer.php");
?>
    <section>
        <article>
            <p>CONTROLE</p>
        </article>
    </section>
</body>
</html>
<?php
    if(isset($_POST['submit_logout'])){
        session_destroy();
        header('Location:../../index.php');
    }
?>