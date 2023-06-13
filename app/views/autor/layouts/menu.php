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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem">Enem</a></li>
                                <li><a href="https://sisfiesportal.mec.gov.br/">Fies</a></li>
                                <li><a href="https://acessounico.mec.gov.br/prouni">Prouni</a></li>
                                <div class="redes_sociais">
                                <li class="botão"><button><i class="fa-brands fa-facebook"></i></button></li>
                                <li class="botão"><button><i class="fa-brands fa-twitter"></i></button></li>
                                <li class="botão"><button><i class="fa-brands fa-instagram"></i></button></li>
                                </div>
                            </ul>
                        </nav>
                </div>
            </div>
            <!-- MENU TOTAL -->
            <div class="container">
                <div class="logo"> 
                <img src="../assets/style/autor/img/guia_jovem_home.png">
                </div>
                <div class="Menu">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem">Enem</a></li>
                            <li><a href="https://sisfiesportal.mec.gov.br/">Fies</a></li>
                            <li><a href="https://acessounico.mec.gov.br/prouni">Prouni</a></li>
                        </ul>
                    </nav>
                </div> 
                <div class="redes_sociais">
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-twitter"></i></button>
                    <button><i class="fa-brands fa-instagram"></i></button>
                </div>
                <div class="Login">
                    <div class="DropDown">
                        <button class="conta"><img src="../assets/style/autor/img/foto_default.png"></a></button>
                        <div class="DropDown_Menu">
                            <a class="Informações"><form method="POST" action="../../layouts/logout.php"><input type="submit" name="logout" value="Logout"></form></a>
                        </div>
                </div>
                </div>
            </div>
        </header>
        <header class="post">
            <section class="noticias">
                <div class="div">
                    <fieldset>
                        <legend>
                            <div class="item-ilustrativo">
                                <img src="../assets/style/autor/img/logooo.png" class="img">
                                <div>
                                    <p>Cadastro da Notícia</p>
                                </div>
                            </div>
                        </legend>
                        <div class="content">
                            <form id="form" method="POST" action="controllers/" enctype="multipart/form-data">
                                <div>	
                                    <input type='text' placeholder='Insira seu título aqui' name="titulo" class="inputs required" oninput="NoticeValidate()" required>
                                    <span class="span-required">Título</span>
                                </div>
                                <div>	
                                    <input type='text' placeholder='Insira sua notícia aqui' name="descrição" class="inputs required" oninput="DescriptionValidate()" required>
                                    <span class="span-required">Manchete</span>
                                </div>
                                <div>	
                                    <input type='text' placeholder='Insira o seu CPF aqui' class="inputs required" name="cpf" oninput="cpfValidade()" required>
                                    <span class="span-required">CPF</span>
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
