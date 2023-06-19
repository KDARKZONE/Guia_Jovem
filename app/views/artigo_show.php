<?php
  session_start();
  require_once('../models/login.php');
  require_once 'site/header.php';
  require_once 'site/menu.php';
  if (!isset($_GET['id']) || !$_SESSION['Perfil']) {
    echo "<script>alert('Para comentar e necessario que se cadastre');
    window.location.href='index.php';</script>";
  }

  # cria a variavel $dbh que vai receber a conexão com o SGBD e banco de dados.
  require_once("../models/database/conexao.php");
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
    // $query = "DELETE FROM `guia_jovem`.`comentarios` WHERE ID_comentario = $idComentario";
    // $stmt = $dbh->prepare($query);
    // $stmt->execute();


    # cria um comando SQL para adicionar valores na tabela categorias 
    $query = "INSERT INTO `guia_jovem`.`comentarios`  
    (`data_hora_comentario`, `comentario`, `id_post`, `id_perfil`,`nome`)
    VALUES (:data_hora_comentario, :comentario, :id_post, :id_perfil, :nome)";

    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':data_hora_comentario', date('Y-m-d H:i:s'));
    $stmt->bindParam(':comentario', $comentario);
    $stmt->bindParam(':id_post', $id);
    $stmt->bindParam(':id_perfil', $idPerfil);
    $stmt->bindParam(':nome',$Nome);
    # executa o comando SQL para inserir o resultado.
    $stmt->execute();

    # verifica se a quantiade de registros inseridos é maior que zero.
    # se sim, redireciona para a pagina de admin com mensagem de sucesso.
    # se não, redireciona para a pagina de cadastro com mensagem de erro.
    if ($stmt->rowCount() > 0) {
      header('location: user/index.php?success=Comentário inserido com sucesso!');
    } else {
      echo '<pre>';
      var_dump($stmt->errorInfo());
      header('location: index.php?error=Erro ao inserir comentario!');
    }
  }

  # cria uma consulta banco de dados buscando todos os dados da tabela  
  # ordenando pelo campo data e limita o resultado a 10 registros.
  $query = "SELECT * FROM post 
            LEFT JOIN comentarios ON comentarios.ID_post = post.ID_post 
              WHERE post.ID_post = " . $id;
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
  <html>
    <head>
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
      <textarea name="comentario" id="" cols="30" rows="10"></textarea><br>
      <?php 
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['nome'].": ".$row['comentario']."<br>";
      }
      ?>
      <input type="submit" value="Enviar">
    </form>