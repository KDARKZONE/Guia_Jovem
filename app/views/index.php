<?php
 /** Verificação de Sessões */
 session_start();
 if(isset($_SESSION['Perfil']) && $_SESSION['administrador']){
  header('Location: adm/index.php');
 }
 else
 if(isset($_SESSION['Perfil']) && $_SESSION['usuario comum']){
  header('Location: user/index.php');
 }
 else
 if(isset($_SESSION['Perfil']) && $_SESSION['autor']){
  header('Location: autor/index.php');
 }
 else{
  require_once("site/header.php");
  require_once("site/menu.php");
 }
?>
<?php
  # verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
  # se não passa direto.
  if (isset($_GET['error'])) {
    echo "<script>alert(" . $_GET['error'] . ")</script>";
  }
?>
<?php
  echo "
        <header class='post' style='margin-top: 6cm;'>
            <section class='noticias'>";
            require_once("../models/database/conexao.php");
            $dbConnection = new Conexao();
            $db = $dbConnection->conexao();
            $sql = "SELECT * FROM post";
            $stmt = $db->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $caminho = 'autor/controllers/';
?>
            <article>
              <div class="noticias">
                <a href="artigo_show.php?id=<?= $row['ID_post'] ?>">
                  <img src="<?= $caminho . $row["thumb"]; ?>" alt="Imagem post" title="Imagem Post" style="width:300px;height:300px;">
                </a>
                <p>
                  <a href="artigo_show.php?id=<?= $row['categoria'] ?>" class="category"><?= $row['categoria'] ?></a>
                </p>
                <h2>
                  <a href="artigo_show.php?id=<?= $row['ID_post'] ?>" class="title">
                    <?=$row['titulo']?>
                  </a>
                </h2>
                <h4>
                <a href="artigo_show.php?id=<?= $row['conteudo'] ?>" class="category"><?= $row['conteudo'] ?></a>
                </h4>
              </div>
            </article>
            
<?php } ?>
</header>
<?php
require_once("site/footer.php");
?>