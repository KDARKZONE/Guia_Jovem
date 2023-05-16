<?php
    if(isset($_POST['submit'])){
        require_once("controllers/pdo/index.php");
    }
?>

<?php
    # para trabalhar com sessões sempre iniciamos com session_start.
    session_start();

    # inclui os arquivos header, menu e login.
    require_once 'layouts/site/header.php';
    require_once 'layouts/site/menu.php';
    require_once 'login.php';
?>

<?php
        # verifica se a variavel $_GET error existe. Se sim, exibe mensagem de error.
        # se não passa direto.
        if(isset($_GET['error'])) {
            echo "<script>alert(". $_GET['error'] .")</script>";
        }
    ?>

<body>
    <header class="cabeçario">
        <!-- MENU RESPONSIVO -->
            <div class="Icone_Menu">
                <input type="checkbox" id="check">
                    <label for="check">
                        <i class="fa-solid fa-bars" id="icone"></i>
                    </label>
                    <nav class="opções">
                        <ul>
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                            <li><a href="https://sisfiesportal.mec.gov.br/"> Fies </a></li>
                            <li><a href="https://acessounico.mec.gov.br/prouni"> Prouni </a></li>
                                <div class="redes_sociais">
                            <li class="botão"><button><i class="fa-brands fa-facebook"></i></button></li>
                            <li class="botão"><button><i class="fa-brands fa-twitter"></i></button></li>
                            <li class="botão"><button><i class="fa-brands fa-instagram"></i></button></li>
                                </div>
                            <div class="login">
                                <li class="img_login">
                                    <button class="botão_login"><a class="modal-link-responsive"><img src="style/img/logooo.png" title="Entrar"></a></button>
                                </li>
                            </div>
                        </ul>
                    </nav>
        </div>
        <!-- MENU TOTAL -->
        <div class="container">
            <div class="logo"> 
            <img src="style/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="index.php"> Home </a></li>
                        <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                        <li><a href="https://sisfiesportal.mec.gov.br/"> Fies </a></li>
                        <li><a href="https://acessounico.mec.gov.br/prouni"> Prouni </a></li>
                    </ul>
                </nav>
            </div> 
            <div class="redes_sociais">
                <button><i class="fa-brands fa-facebook"></i></button>
                <button><i class="fa-brands fa-twitter"></i></button>
                <button><i class="fa-brands fa-instagram"></i></button>
            </div>
            <div class="Login">
                <button><a class="modal-link"><img src="style/img/logooo.png" title="Entrar"></a></button>
            </div>
        </div>
    </header>
    <!-- MENU POP - UP LOGIN -->
    <div class="overlay"></div>
    <div class="modal">
            <form method="POST" action="controllers/redirect.php">
                <fieldset class="envolver">
                    <legend class="item"><b> Formulario de Login </b></legend>
                    <div class="inputBox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput"> E-mail </label>
                    </div>
                    
                    <div class="inputBox">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput"> Senha: </label>
                    </div>
                     <input type="submit" value="Entrar" class="Input_Login_user">
                     <a href="#" class="modal-link_1"> Não tem uma Conta ?</a>
                </fieldset>
            </form>
    </div>
    <!-- POP SE O USUARIO JA EXISTIR -->
   
    <!-- MENU POP - UP CADASTRAMENTO -->
    <div class="overlay_1"></div>
    <div class="modal_1">
        <form method="POST" action="index.php">
            <fieldset class="envolver">
                <legend class="item"><b> Formulario de Cadastramento </b></legend>
                <div class="inputBox">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome Completo </label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> E-mail </label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"> Crie uma Senha: </label>
                </div>
                 <input type="submit" value="Cadastrar" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <!-- MENU POP - UP LOGIN RESPONSIVE -->
    <div class="overlay_responsive_Login"></div>
    <div class="modal_responsive_Login">
            <form method="POST" action="../Guia_Jovem/index.php">
                <fieldset class="envolver">
                    <legend class="item"><b> Formulario de Login </b></legend>
                    <div class="inputBox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput"> E-mail </label>
                    </div>
                    
                    <div class="inputBox">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput"> Senha: </label>
                    </div>
                     <input type="submit" value="Entrar">
                     <a href="#" class="modal-link-responsive-Cadastro"> Não tem uma Conta ?</a>
                </fieldset>
            </form>
    </div>
    <!-- MENU POP - UP CADASTRAMENTO RESPOSIVE-->
    <div class="overlay_responsive_Cadastro"></div>
    <div class="modal_responsive_Cadastro">
        <form method="POST" action="../Guia_Jovem/index.php">
            <fieldset class="envolver">
                <legend class="item"><b> Formulario de Cadastramento </b></legend>
                <div class="inputBox">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome Completo </label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> E-mail </label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"> Crie uma Senha: </label>
                </div>
                 <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
    <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
<header class="post">
    <section class="noticias">
            <article>
            <a href="#">
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
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
                <img src="style/img/post.jpg" width="200" alt="Imagem post" title="Imagem Post">
            </a>
            <p><a href="" class="category">Categoria</a></p>
            <h2><a href="" class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam
                    error dolorem. Recusandae,
                    quo ex laborum voluptate pariatur praesentium error doloremque cumque, mollitia laboriosam vel
                    aut
                    et eveniet eaque quaerat!</a></h2>
        </article>
    </header>

    <!--FIM SESSÃO SESSÃO DE ARTIGOS-->

    <!-- RODAPÉ -->
    <footer>
        <section class="T_R">
            <b> Adicione um Titulo </b>
        </section>
        <nav class="P_C">
            <b> Titulo </b>
            <ul>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
            </ul>
        </nav>
        <nav class="S_C">
            <b> Titulo </b>
            <ul>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
            </ul>
        </nav>
        <nav class="T_C">
            <b> Titulo </b>
            <ul>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
            </ul>
        </nav>
        <nav class="Q_C">
            <b> Titulo </b>
            <ul>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
            </ul>
        </nav>
        <nav class="Qi_C">
            <b> Titulo </b>
            <ul>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
            </ul>
        </nav>
        <nav class="S_C">
            <b> Titulo </b>
            <ul>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
                <li>Insira a Informação</li>
            </ul>
        </nav>
        <nav class="St_C">
            <b> Titulo </b>
            <ul>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
                <li> Insira a Informação</li>
            </ul>
        </nav>
    </footer>
    <!-- FIM DO RODAPÉ -->
    
</body>
    <script type="text/javascript" src="js/pop_up/login.js"></script>
    <script type="text/javascript" src="js/pop_up/cadastro.js"></script>
    <script type="text/javascript" src="js/pop_up/login_responsivo.js"></script>
    <script type="text/javascript" src="js/pop_up/cadastro responsivo.js"></script>
    <script type="text/javascript" src="js/pop_up/cpf.js"></script>
</html>