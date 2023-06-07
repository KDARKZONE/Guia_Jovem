
<?php
    session_start();
    require_once('../models/login.php');
    require_once 'site/head.php';
    require_once 'site/menu.php';
?>

<?php
        # verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
        # se não passa direto.
        if(isset($_GET['error'])) {
            echo "<script>alert(". $_GET['error'] .")</script>";
        }
    ?>

    <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
 <?php 
    echo '
    <header class="post">
        <section class="noticias">
            <article>
                <a href="#">
                    <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
                </a>    
                    <p><a hr    ef="" class="category">Categoria</a></p>
                    <h2><a href=    "" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error do    lorem. Recusandae,
                            quo ex labor    um voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut 
                            et e    veniet eaque quaerat!</a></h2>
            </article>  

            <article>
                <a href="#">
                    <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                        <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                        <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                        <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                        <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                        <img src="assets/style/site/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                            error dolorem. Recusandae,
                            quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                            aut
                            et eveniet eaque quaerat!</a></h2>
        </article>
    </header>';  
?>
    <!--FIM DA SESSÃO DE ARTIGOS-->

<?php
require_once("site/footer.php");
?>
