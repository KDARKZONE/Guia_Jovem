<?php 
  session_start();
  if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true){
    echo "<script> alert('Bem - Vindo  ".$_SESSION['Perfil']['Nome']."')</script>";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      if(isset($_POST['termos'])){
        $radio = $_POST['termos'];
        if($radio == 'C'){
          echo "<script>alert('Parabéns,".$_SESSION['Perfil']['Nome'].", voçê agora e Autor')</script>";
        }
        else 
        if($radio == 'D'){
          echo "<script>alert('Desculpe, precisamos que concorde com os Termos de Publicidade');
          window.location.href='../../layouts/autor/menu.php';</script>";
        }
        else 
        if($radio != 'C' && $radio != 'D'){
          echo "<script>alert('Selecione pelo menos uma das Alternativas por favor !!!');
          window.location.href='../../layouts/autor/menu.php';</script>";
        }
      }
    }
  }
  else{
    echo "<script>alert('Não existe conta cadastratada, por favor cadastre-se novamente');
    window.location.href='../../../../index.php';<script>";
  }

?>
<?php
  require_once("./head.php");
?>
<body>
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
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                            <li><a href="https://sisfiesportal.mec.gov.br/"> Fies </a></li>
                            <li><a href="https://acessounico.mec.gov.br/prouni"> Prouni </a></li>
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
            <img src="./style/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="index.php"> Home </a></li>
                        <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                        <li><a href="https://sisfiesportal.mec.gov.br/"> Fies </a></li>
                        <li><a href="https://acessounico.mec.gov.br/prouni"> Prouni </a></li>
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
                    <button class="conta"><img src="./style/img/foto_default.png"></a></button>
                    <div class="DropDown_Menu">
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Nome']; ?></a>
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Email']; ?></a>
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Senha']; ?></a>
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Nivel de Acesso'];?></a>
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
              <img src="./style/img/logooo.png" class="img">
              <div>
                <p>Cadastramento da Postagem</p>
              </div>
              </div>
            </legend>
            <div class="content">
	          <form id="form" method="POST" action="./insert-post.php" enctype="multipart/form-data">
		          <div>	
			          <input type='text' placeholder='Digita o Titulo da Noticia' name="titulo" class="inputs required" oninput="NoticeValidate()" required>
			          <span class="span-required"> Nome deve ter no minimo 15 caracteres </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Digite a Descrição sobre sua Noticia' name="descrição" class="inputs required" oninput="DescriptionValidate()" required>
			          <span class="span-required"> A Noticia deve ter pelo menos 40 caracteres  </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Insira o Link de sua Instituição' name="link" class="inputs required" oninput="LinkValidade()" required>
			          <span class="span-required"> Link deve ser válido </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Insira o Número de Telefone Principal' name="tel1" class="inputs required" oninput="Tel1Validade()" required>
			          <span class="span-required"> Telefone deve ter pelo menos 9 adicione seu DDD </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Insira o Número de Telefone Reserva' name="tel2" class="inputs required" oninput=" Tel2Validade()" required>
			          <span class="span-required"> Telefone deve ter pelo menos 9 digitos incluindo o DDD </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Digite o Nome da Instituição Anunciante' name="instituição" class="inputs required" oninput="instituicaoValidade()" required>
			          <span class="span-required"> Digite o Nome da Instituição sem Abreviações  </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Insira o seu CNPJ' class="inputs required" name="cnpj" oninput="cnpjvalidate()" required>
			          <span class="span-required"> CNPJ da empresa tem 14 caracteres  </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Insira o seu CPF' class="inputs required" name="cpf" oninput="cpfValidade()" required>
			          <span class="span-required"> CPF do Anunciante tem 11 caracteres </span>
		          </div>
              <div>	
			          <input type='text' placeholder='Insira qual Categoria, Ex: Enem, Sisu, Prouni, Fies ou Cursos Profissionalizantes' name="categoria" class="inputs required" oninput=" categoriaValidade()" required>
			          <span class="span-required"> o Post deve ter apenas uma Categoria </span>
		          </div>
              <div>	
			          <input type='file' placeholder='Insira uma Foto de sua Instituição' name="imagem" class="" required>
			          <!-- <span class="span-required"> </span> -->
		          </div>
              <button type='submit' name="cadastrar"> Cadastrar POST</button>
            </form>
          </fieldset>
        </div>
      </section>
    </header>
</body>
<script src="../autor/autor-js/autor-js.js"></script>
</html>