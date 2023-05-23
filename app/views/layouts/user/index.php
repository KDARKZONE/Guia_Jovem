<?php
    # para trabalhar com sessões sempre iniciamos com session_start.
    
    # inclui os arquivos header, menu e login.
    require_once ('layout_user/header.php');
    require_once('layout_user/menu.php');
?>
    <body>
        <section class="main_section">
            <div class="container_img_user">
                <img src="icones/57073.png" class="icone_Welcome"><p class="P1"> Bem - Vindo <?php echo @$_SESSION['usuario']['nome']; ?></p>
            </div>
            <div class="container_notice_user">
                <fieldset class="container_Notices">
                    <legend><i class="fa-solid fa-newspaper"></i>Noticias para <?php echo @$_SESSION['usuario']['nome']?></legend>
                </fieldset>
            </div> 
    </body>
<?php if($_SERVER['REQUEST_METHOD']=="POST"){if(isset($_POST['logout'])){header('location: logout.php');}} ?>