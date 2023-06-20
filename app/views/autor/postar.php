<?php
   require_once("layouts/header.php");
   require_once("layouts/menu.php");
?>
 <header class="post">
                <section class="noticias">
                    <div class="div">
                        <fieldset>
                            <legend>
                                <div class="item-ilustrativo">
                                    <img src="../assets/style/autor/img/logooo.png" class="img">
                                    <div>
                                        <p style="color:black;">Cadastro da Notícia</p>
                                    </div>
                                </div>
                            </legend>
                            <div class="content">
                                <form id="form" method="POST" action="controllers/insert.php" enctype="multipart/form-data">
                                <div>	
                                    <input type='text' placeholder='Insira seu título aqui' name="titulo" class="inputs required" oninput="noticeValidate()" required>
                                    <span class="span-required">Título</span>
                                </div>
                            <div>
                                <textarea placeholder='Insira sua notícia aqui' name='conteudo' style="font-family: 'Fira Sans',sans-serif" rows="7"name="conteudo" class="inputs required" oninput=" descriptionValidate()" required></textarea>
                                <span class="span-required">Artigo</span>
                            </div>
                            <div>
                            <select name="categoria" class="inputs required">
                                <option value="Enem">Enem</option>
                                <option value="Prouni">Prouni</option>
                                <option value="Sisu">Sisu</option>
                                <option value="Fies">Fies</option>
                                <option value="Cursos">Cursos Técnicos</option>
                            </select>
                            </div>
                            <div>	
                                <input type='file' name="imagem" class="" required>
                            </div>
                            <button type='submit' name="cadastrar">Cadastrar POST</button>
                                </form>
                        </div>
                    </fieldset>
                </div>
            </section>
        </header>
    </body>
    <script src="../assets/js/autor-js.js"></script>