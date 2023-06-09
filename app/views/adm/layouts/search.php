    <form method="POST">
    <div class="search-box">
    <input type="text" class="search-txt" placeholder="Pesquisar" name="search">
    <button type="submit" name="Pesquisar"><a href="#" class="search-btn">
        <i class="fa-solid fa-magnifying-glass"></i>
    </a></button>
    </div>
    </form>
    <header>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fa-solid fa-bars"></i> 
    </label>
    <nav>
        <ul>
        <li><a href="index.php" class="op"> Home </a></li>
        <li><a href="search.php" class="op"> Pesquisar </a></li>
        <li><a href="dados.php" class="op"> Dados </a></li>
        <li><a href="notice.php" class="op"> Noticias </a></li>
        <li><a href="analise.php" class="op"> Analise </a></li>
        </ul>
    </nav>
    <div class="Dados">
        <fieldset class="Result">
        <?php
        if(isset($_POST['Pesquisar'])){
            require_once("resul-search.php");
        }
        else{
            return null;
        }
        ?>
    </fieldset>
    </div>
    
</body>