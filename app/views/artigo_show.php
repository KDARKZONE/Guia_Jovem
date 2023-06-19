<?php
  session_start();
  
  require_once 'site/header.php';
  // require_once 'site/menu.php';
  if (!isset($_GET['id']) || !$_SESSION['Perfil']) {
    header('location: index.php?error=Artigo não encontrado.');
    exit;
  }
  require_once("../models/database/conexao.php");

  # cria a variavel $dbh que vai receber a conexão com o SGBD e banco de dados.
  
  $dbConnection = new Conexao();
  $dbh = $dbConnection->conexao();

  # cria variavel que recebe parametro da categoria
  # se foi passado via get quando o campo select do
  # formulario é modificado.    
  $id = isset($_GET['id']) ? $_GET['id'] : 0;

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idPerfil = $_SESSION['Perfil']['ID_perfil'];
    $comentario = $_POST['comentario'];
    // exit;
    $idComentario = $_POST['ID_comentario'];
    $Nome = $_SESSION['Perfil']['nome'];
    // $query = "DELETE FROM guia_jovem`.`comentarios` WHERE ID_comentario = $idComentario";
    // $stmt = $dbh->prepare($query);
    // $stmt->execute();


    # cria um comando SQL para adicionar valores na tabela categorias 
    $query = "INSERT INTO comentarios (data_hora_comentario, comentario, ID_post, ID_perfil)
    VALUES (:data_hora_comentario, :comentario, :ID_post, :ID_perfil)";

    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':data_hora_comentario', date('Y-m-d H:i:s'));
    $stmt->bindParam(':comentario', $comentario);
    $stmt->bindParam(':ID_post', $id);
    $stmt->bindParam(':ID_perfil', $idPerfil);
    # executa o comando SQL para inserir o resultado.
    $stmt->execute();

    # verifica se a quantiade de registros inseridos é maior que zero.
    # se sim, redireciona para a pagina de admin com mensagem de sucesso.
    # se não, redireciona para a pagina de cadastro com mensagem de erro.
    if ($stmt->rowCount() > 0) {
      // echo "<script>alert('Comentario inserido')</script>";
    } else {
      echo '<pre>';
      var_dump($stmt->errorInfo());
      header('location: index.php?error=Erro ao inserir comentario!');
    }
  }

  # cria uma consulta banco de dados buscando todos os dados da tabela  
  # ordenando pelo campo data e limita o resultado a 10 registros.
  $query = "SELECT * FROM post LEFT JOIN comentarios ON comentarios.ID_post = post.ID_post WHERE post.ID_post = " . $id;
  $stmt = $dbh->prepare($query);

  # executa a consulta banco de dados e aguarda o resultado.
  $stmt->execute();

  # Faz um fetch para trazer os dados existentes, se existirem, em um array na variavel $row.
  # se não existir retorna null
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  # destroi a conexao com o banco de dados.
  $dbh = null;
    if (!$row) {
      header('location: index.php?error=Artigo não encontrado.');
      exit;
    }
    $caminho = 'autor/controllers/';
  ?>
  <!-- Inicio do Layout dos Comentarios -->
  <?php
    $ID_perfil = $_SESSION['Perfil']['ID_perfil'];
    require_once("../models/database/conexao.php");
    $dbConnection = new Conexao();
    $db = $dbConnection->conexao();
    $sql = "SELECT*FROM usuarios_comuns WHERE ID_perfil = :ID_perfil";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':ID_perfil',$ID_perfil);
    if($stmt->execute()){
      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $usuario =  $result['usuario'];
      }
     
    } 
  ?>
  <html>
    <heead>
      <title>
        Comentar Post
      </title>
    </head>
    <body>
    <h1><?= $row['titulo']; ?></h1>
    <section>
      <img src="<?= $caminho . $row['thumb']; ?>" alt="<?= $row['titulo']; ?>">
    </section>
    <h2>Comentários</h2>
    <form action="" method="post">
      <input type="hidden" name="ID_comentario" value="<?= $row['ID_comentario'] ?>">
      <textarea name="comentario" id="" cols="50" rows="2,5"></textarea><br>
      <?php 
      $perfil_comentario = $_SESSION['Perfil']['ID_perfil'];
      require_once("../models/database/conexao.php");
      $dbConnection = new Conexao();
      $db = $dbConnection->conexao();
      $sql = "SELECT*FROM  comentarios WHERE ID_post = :ID_post";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':ID_post',$_GET['id']);
      if($stmt->execute()){
        $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($comentarios as $comentario) {     
          $sql = "SELECT*FROM usuarios_comuns WHERE ID_perfil = :ID_perfil";
          $stmt = $db->prepare($sql);
          $stmt->bindParam(':ID_perfil',$comentario['ID_perfil']);
          $stmt->execute();
          $usuario_comentario = $stmt->fetch(PDO::FETCH_ASSOC);
          $text = $comentario['comentario'];
          echo '<p class="comentario">'.$usuario_comentario["usuario"].": ".$text.'</p>   '; echo "<br>";   
          }
      }
      ?>
      <input type="submit" value="Enviar" width="50px">
    </form>