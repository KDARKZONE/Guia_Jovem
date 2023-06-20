<?php
    # caso o Administrador queira Saber os Nomes das Pessoas que estão no Banco Ordenado pela Primeira Letra do Nome
    echo "
    <header class='post' style='margin: top -2cm;'>
        <section class='noticias'>";
        
        require_once("../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "SELECT * FROM post";
        $stmt = $db->prepare($sql);
        $stmt->execute();
          $caminho = '../autor/controllers/';
     @$Letra = $_POST['search'];
            $sql_curso = "SELECT*FROM post WHERE categoria = :categoria";
            $stmt_curso = $db->prepare($sql_curso);
            $stmt_curso->bindParam(':categoria',$Letra);
            $stmt_curso->execute();
            while($row = $stmt_curso->fetch(PDO::FETCH_ASSOC)){
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
            <?php
            }
?>       


























