
<?php
  require_once("layouts/header.php");
  require_once("layouts/menu.php");
?>
<?php
  echo "
        <header class='post'>
            <section class='noticias'>";

            require_once("../../models/database/conexao.php");
            $dbConnection = new Conexao();
            $db = $dbConnection->conexao();
            $sql = "SELECT * FROM post";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $caminho = '../autor/controllers/';
?>
           <article>
              <div class="noticias">
                <a href="../artigo_show.php?id=<?= $row['ID_post'] ?>">
                  <img src="<?= $caminho . $row["thumb"]; ?>" alt="Imagem post" title="Imagem Post" style="width:300px;height:300px;">
                </a>
                <p>
                  <a href="../artigo_show.php?id=<?= $row['categoria'] ?>" class="category"><?= $row['categoria'] ?></a>
                </p>
                <h2>
                  <a href="../artigo_show.php?id=<?= $row['ID_post'] ?>" class="title">
                    <?=$row['titulo']?>
                  </a>
                </h2>
                <h4>
                <a href="../artigo_show.php?id=<?= $row['conteudo'] ?>" class="category"><?= $row['conteudo'] ?></a>
                </h4>
              </div>
            </article>

<?php } ?>
</header>