<?php
    # para trabalhar com sessões sempre iniciamos com session_start.
    session_start();
    # inclui os arquivos header, menu e login.
    require_once ('layout_user/menu.php');
    require_once('layout_user/header');
    require_once('layout_user/footer');
?>
