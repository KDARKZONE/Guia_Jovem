<?php
session_start();
if (!isset($_SESSION['Perfil'])) {
    echo "Você precisa estar logado para acessar esta página.";
    exit;
}
$perfil = $_SESSION['Perfil'];

// Obtém o ID do perfil
$perfilId = $perfil['ID_perfil'];
$nome = $perfil['nome'];
$email = $perfil['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Importando o jQuery -->
    <script src="../../assets/js/edit-user.js"></script>
    <link rel="stylesheet" href="controllers-style/edit.css">
</head>
<body>
    <div class="content">
        <form method="POST" action="teste.php" enctype="multipart/form-data" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
            <div id="profile-picture">
                <img id="profile-image" src="../../assets/style/user/img/nula.png" alt="Foto de Perfil">
                <input type="file" id="image-input" accept="image/*" name="foto">
            </div>
            <button type="submit" class="Cadastrar_foto" style="border: none; background-color:indigo; color: white; font-size: 12px; padding: 5px;"> Cadastrar Foto </button>
        </form>
        <form method="POST" action="update.php" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="Id" value="<?php echo $perfilId; ?>">
                <label for="nome">Nome:</label>
                <input type="text" name="Nome" id="nome" class="inputs required" placeholder="Nome" value="<?php echo $nome; ?>" required>

                <label for="email">Email:</label>
                <input type="text" name="Email" id="email" class="inputs required" value="<?php echo $email; ?>" required>

            <button type="submit" name="enviar" id="btn">Atualizar</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>