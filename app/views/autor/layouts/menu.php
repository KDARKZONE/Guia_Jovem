<?php
session_start();
if(isset($_SESSION['Perfil']) &&  $_SESSION['autor'] == true){
    echo "<script>alert(' Olá Bem vindo ".$_SESSION['Perfil']['Nome']."')</script>";
}
else{
    echo "<script>alert('Não existe conta cadastrada, por favor cadastre-se novamente');
    window.location.href='../../index.php';</script>";
}
require_once("./head.php");
?>
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
            <img src="./img/guia_jovem_home.png">
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
                    <button class="conta"><img src="./img/foto_default.png"></a></button>
                    <div class="DropDown_Menu">
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Nome']; ?></a>
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Email']; ?></a>
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Senha']; ?></a>
                        <a class="Informações"><?php echo @$_SESSION['Perfil']['Nivel de Acesso'];?></a>
                        <a class="Informações"><form method="POST" action="../logout.php"><input type="submit" name="logout" value="Logout"></form></a>
                    </div>
            </div>
            </div>
        </div>
    </header> 
    <header class="post">
        <section class="noticias">
            <div class="item-ilustrativo">
                <img src="./img/logooo.png" class="img">
                <div class="text">
                    <p> Bem - Vindo <?php echo $_SESSION['Perfil']['Nome']; ?></p>
                </div>
            </div>
        </section>
        <section class="noticias"> 
            <div class="div">
            <fieldset>
                <legend>
                    <div>
                        <img src="./img/logooo.png" class="img">
                        <div>
                            <p>
                                Bem - Vindo <?php echo $_SESSION['Perfil']['Nome'];?>
                            </p>
                        </div>
                    </div>
                </legend>
                <div class="div-fieldset">
                    <div class="item-ilustrativo">
                        <img src="./img/ícone-de-vetor-isolado-do-anunciante-rgb-básico-que-pode-modificar-ou-editar-facilmente-172549205.webp" class="img">
                        <div class="text">
                            <p>
                            Bem-vindo ao Guia Jovem! Estamos entusiasmados em tê-lo como autor em nossa plataforma de notícias de ensino superior e técnico. Compartilhe suas ideias e conhecimentos conosco, promovendo o aprendizado e enriquecendo nossa comunidade. Estamos aqui para apoiá-lo em sua jornada e ansiosos para ver suas valiosas contribuições. Juntos, vamos construir um ambiente de crescimento e aprendizado contínuo. Seja bem-vindo ao Guia Jovem!
                            </p>
                        </div>
                    </div>
                </div>
            </fieldset>
            </div>
        </section>
        <section class="noticias"> 
            <div class="div">
            <fieldset>
                <legend>
                    <div>
                        <img src="./img/logooo.png" class="img">
                        <div>
                            <p>
                                Avisos Importantes para Você,  <?php echo $_SESSION['Perfil']['Nome'];?>
                            </p>
                        </div>
                    </div>
                </legend>
                <div class="div-fieldset">
                    <div class="item-ilustrativo">
                        <img src="./img/75427.png" class="img">
                        <div class="text">
                            <p>
                            Avisos Importantes para Autores do Guia Jovem:<br>
                            1° - Precisão e Credibilidade: Forneça informações precisas e confiáveis sobre como ingressar no Ensino Superior e ensino técnico.<br>
                            2° - Orientação e Clareza: Explique de forma clara e abrangente o processo de candidatura e os requisitos necessários.<br>
                            3° - Diversidade e Inclusão: Aborde diferentes experiências e perspectivas para tornar o conteúdo relevante para todos os leitores.<br>
                            4° - Conselhos Práticos: Compartilhe dicas úteis sobre preparação para exames, escolha de cursos e opções de financiamento estudantil.<br>
                            5° - Atualização Regular: Mantenha-se atualizado e revise o conteúdo regularmente para fornecer informações precisas e atualizadas.<br>
                            6° - Interatividade e Engajamento: Incentive a interação com os leitores e crie um ambiente colaborativo.<br>
                            7° - Apoio à Tomada de Decisão: Ajude os leitores a tomarem decisões informadas, oferecendo informações imparciais e equilibradas.<br>
                            Agradecemos seu compromisso em fornecer informações valiosas aos nossos leitores do Guia Jovem.<br>
                           </p>
                        </div>
                    </div>
                </div>
            </fieldset>
            </div>
        </section>
        <section class="noticias"> 
            <div class="div">
            <fieldset>
                <legend>
                    <div>
                        <img src="./img/logooo.png" class="img">
                        <div>
                            <p>
                                Como as Publicações devem ser Feitas,   <?php echo $_SESSION['Perfil']['Nome'];?>
                            </p>
                        </div>
                    </div>
                </legend>
                <div class="div-fieldset">
                    <div class="item-ilustrativo">
                        <img src="./img/75427.png" class="img">
                        <div class="text">
                            <p>
                                <ol>
                                    <li>Precisão e atualização: O site deve fornecer informações precisas, confiáveis e atualizadas sobre os programas governamentais, requisitos de elegibilidade, prazos e processos de inscrição. Verifique regularmente as mudanças nas políticas e atualize as informações correspondentes.</li>
                                    <li>Organização clara e intuitiva: O site deve ser organizado de forma clara e intuitiva, com uma estrutura de navegação lógica e fácil de usar. Divida as informações em seções distintas para cada programa (Prouni, Fies, Sisu, cursos técnicos) e forneça uma visão geral de cada um, juntamente com detalhes específicos.</li>
                                    <li>Linguagem acessível: Escreva o conteúdo do site em uma linguagem clara, concisa e acessível, evitando jargões técnicos sempre que possível. Isso ajudará os visitantes a compreenderem facilmente as informações e a tomar decisões informadas sobre seu ingresso no Ensino Superior.</li>
                                    <li>Orientações passo a passo: Forneça orientações detalhadas e passo a passo para cada programa e processo de inscrição. Explique claramente os requisitos, documentos necessários, datas importantes e como proceder em cada etapa do processo.</li>
                                    <li>Recursos complementares: Além das informações básicas sobre os programas governamentais, inclua recursos complementares, como perguntas frequentes, dicas para uma inscrição bem-sucedida, depoimentos de estudantes beneficiados e informações sobre outras opções de financiamento educacional.</li>
                                    <li>Links úteis e referências: Inclua links úteis para os sites oficiais dos programas governamentais, documentos relevantes, legislação e outras fontes confiáveis de informações. Isso ajudará os visitantes a obter informações mais detalhadas, caso desejem aprofundar seu conhecimento.</li>
                                    <li>Responsividade e compatibilidade: Certifique-se de que o site seja responsivo e compatível com dispositivos móveis, para que os usuários possam acessar as informações facilmente em qualquer dispositivo. Teste a compatibilidade do site em diferentes navegadores para garantir uma experiência consistente.</li>
                                    <li>Feedback e suporte: Forneça uma maneira fácil para os visitantes do site entrarem em contato com os autores para tirar dúvidas ou solicitar informações adicionais. Responda prontamente e ofereça suporte amigável e útil.</li>
                                    <li>Política de privacidade: Inclua uma política de privacidade no site, informando aos usuários como suas informações pessoais são coletadas, armazenadas e utilizadas. Garanta que o site esteja em conformidade com as leis de proteção de dados e forneça opções claras para o usuário gerenciar suas informações.</li>
                                    <li>Divulgação transparente: Se o site incluir links de afiliados, anúncios ou conteúdo patrocinado, divulgue de forma transparente essas parcerias comerciais. Isso ajudará a construir confiança com os visitantes e garantir uma abordagem ética e transparente em relação a qualquer forma de monetização.</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </fieldset>
            </div>
        </section>
        <section class="noticias"> 
            <div class="div">
                <fieldset>
                    <legend>
                        <div>
                            <img src="./img/logooo.png" class="img">
                            <div>
                                <p> Termos e Condições para voçê ser Autor </p>
                            </div>
                        </div>
                    </legend>
                    <div>
                        <form method="POST" action="../../controllers/autor/index.php">
                            <input type="radio" name="termos" value="C"> Li e concordo <br>
                            <input type="radio" name="termos" value="D"> Discordo <br>
                            <div class="submit">
                            <input type="submit" value="Enviar" name="submit">
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>
        </section>
    </header>
    </body>
</html>