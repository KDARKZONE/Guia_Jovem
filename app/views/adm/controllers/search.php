<body class="body-search">
    <form method="POST">
        <div class="search-box">
            <input type="text" class="search-txt" placeholder="Pesquisar" name="search">
                <button type="submit" name="Pesquisar" class="search-btn">
                    <a href="#">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </button>
        </div>
    </form>
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