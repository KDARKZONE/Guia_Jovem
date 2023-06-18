<?php
    require_once("../layouts/header.php");
?>
 <html>
        <head>
            <title><?php echo $_SESSION['Perfil']['nome'];?></title>
            <script src="../../assets/js/cpf-validation.js"></script>
            <link rel="icon" href="../../assets/style/autor/img/logooo.png">
            <link rel="stylesheet" href="../../assets/style/autor/css/form-autor.css">
            <style>
            @import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap");</style>
        </head>
        <body style="background-color: #333; display: flex; align-items: center; justify-content: center;">
            <div class="content" style="margin-top: 5cm; width: 40%;">
                <form method="POST" action="autor.php" id="form">
                    <label for="cpf" style="color: white; font-family: 'Fira Sans',sans-serif" >CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="inputs required"  placeholder="Insira o seu CPF" style="font-family: 'Fira Sans',sans-serif;"  oninput="cpfValidate()" maxlength="11" required>
                    <span class="span-required">insira o seu CPF </span>
                    <label for="data_nascimento" style="color: white; font-family: 'Fira Sans',sans-serif" >Data de Nascimento:</label>
                    <input type="date" name="data_de_nascimento" id="data_de_nascimento" class="inputs required" style="font-family: 'Fira Sans', sans-serif; color: white;" required>
                                                
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </div>
        </body>
        <script src="../../assets/js/cpf-validation.js"></script>
    </html>