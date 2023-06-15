<body style="background-color: #333; display: flex; align-items: center; justify-content: center;">
    <div class="content">
    <form action="update_user.php" method='POST'>
        <input type='hidden' name='id' value='<?php echo $perfil['ID_perfil']; ?>"'>
        <select name="editar" class="inputs required" style="font-family: 'Fira Sans',sans-serif">
            <option value="<?php $perfil['nivel_acesso'];?>"><?php echo $perfil['nivel_acesso']; ?></option>
            <option value="usuario comum">Usuario</option>
            <option value="autor">Autor</option>
        </select>
        <button type='submit' name="enviar"> Salvar </button>
    </form>
</div>
</body>
</html>