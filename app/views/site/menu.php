
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
                            <li style="padding-top: 15px; padding-left:10px;"><a  href="pesquisar.php">Pesquisar</a></li> 
                            <li><a class="modal-link-responsive">Login</a></li>
                            <div class="redes_sociais">
                            <li class="botão"><button><i class="fa-brands fa-facebook"></i></button></li>
                            <li class="botão"><button><i class="fa-brands fa-twitter"></i></button></li>
                            <li class="botão"><button><i class="fa-brands fa-instagram"></i></button></li>
                            </div>
                        </ul>
                    </nav>
            </div>
            <!-- MENU TOTAL -->
        <div class="container">
            <div class="logo"> 
                <img src="assets/style/site/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem">Enem</a></li>
                        <li><a href="https://sisfiesportal.mec.gov.br/">Fies</a></li>
                        <li><a href="https://acessounico.mec.gov.br/prouni">Prouni</a></li>
                        <li style="padding-top: 15px; padding-left:10px;"><a  href="pesquisar.php">Pesquisar</a></li> 
                      </ul>
                </nav>
            </div> 
            
            <div class="Login">
                <nav>
                    <ul>
                        <li><a class="modal-link">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- MENU POP - UP LOGIN -->
    <div class="overlay"></div>
    <div class="modal">
            <form method="POST" action="../models/login.php">
                <fieldset class="envolver">
                    <legend class="item"><b>Formulario de Login</b></legend>
                    <div class="inputBox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                   
                    <div class="inputBox">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha:</label>
                    </div>
                     <input type="submit" value="Entrar">
                     <a href="#" class="modal-link_1">Não tem uma Conta?</a>
                </fieldset>
            </form>
    </div>
    <!-- POP SE O USUARIO JA EXISTIR -->
   
    <!-- MENU POP - UP CADASTRAMENTO -->
    <div class="overlay_1"></div>
    <div class="modal_1">
        <form method="POST" action="../models/perfis.php">
            <fieldset class="envolver">
                <legend class="item"><b>Formulario de Cadastramento</b></legend>
                <div class="inputBox">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome de Usuario</label>
                </div>

                <div class="inputBox">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Crie uma Senha:</label>
                </div>
                 <input type="submit" value="Cadastrar" name="Cadastro" id="submit">
            </fieldset>
        </form>
    </div>
    <!-- MENU POP - UP LOGIN RESPONSIVE -->
    <div class="overlay_responsive_Login"></div>
    <div class="modal_responsive_Login">
            <form method="POST" action="">
                <fieldset class="envolver">
                    <legend class="item"><b>Formulario de Login</b></legend>
                    <div class="inputBox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    
                    <div class="inputBox">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha:</label>
                    </div>
                     <input type="submit" value="Entrar">
                     <a href="#" class="modal-link-responsive-Cadastro">Não tem uma Conta?</a>
                </fieldset>
            </form>
    </div>
    <!-- MENU POP - UP CADASTRAMENTO RESPOSIVE-->
    <div class="overlay_responsive_Cadastro"></div>
    <div class="modal_responsive_Cadastro">
        <form method="POST" action="">
            <fieldset class="envolver">
                <legend class="item"><b>Formulario de Cadastramento</b></legend>
                <div class="inputBox">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                
                <div class="inputBox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Crie uma Senha:</label>
                </div>
                 <input type="submit" value="Cadastrar">
            </fieldset> 
        </form>
    </div>
