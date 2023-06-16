<?php
session_start();
require_once('../models/login.php');
require_once 'site/header.php';
require_once 'site/menu.php';
?>

<?php
# verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
# se não passa direto.
if (isset($_GET['error'])) {
    echo "<script>alert(" . $_GET['error'] . ")</script>";
}
?>

<!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
<header class="post">
    <section>
        <?php
        require_once("../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "SELECT * FROM post";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        echo '<header class="post">';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $caminho = 'autor/controllers/';
        ?>
            <article>
                <div class="noticias">
                    <a href="artigo_show.php?id=<?= $row['ID_post'] ?>">
                        <img src="<?= $caminho . $row["thumb"]; ?>" alt="Imagem post" title="Imagem Post" style="width:300px;height:300px;">
                    </a>
                    <p>
                        <a href="" class="category">Categoria</a>
                    </p>
                    <h2>
                        <a href="" class="title">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error do lorem. Recusandae,
                            quo ex labor um voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et e veniet eaque quaerat!
                        </a>
                    </h2>
                </div>
            </article>

        <?php } ?>
    </section>
</header>
<!--FIM DA SESSÃO DE ARTIGOS-->
<?php
require_once("site/footer.php");
?>