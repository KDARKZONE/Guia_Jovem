
<?php
    # para trabalhar com sessões sempre iniciamos com session_start.
    session_start();
    # inclui os arquivos header, menu e login.
    require_once 'layouts/site/header.php';
    require_once 'layouts/site/menu.php';
?>

<?php
        # verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
        # se não passa direto.
        if(isset($_GET['error'])) {
            echo "<script>alert(". $_GET['error'] .")</script>";
        }
    ?>

<body>
    <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
<header class="post">
    <section class="noticias">
            <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>

        <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>
        <article>
            <a href="#">
                <img src="assets/img/post.jpg"" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>

        <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>

        <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>

        <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>

        <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>
        
        <article>
            <a href="#">
                <img src="assets/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>
    </header>
<?php
require_once("layouts/site/footer.php");
?>