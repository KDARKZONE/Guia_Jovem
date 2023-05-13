    // Seleciona o link e a janela modal
    var link_responsive_Cadastro = document.querySelector('.modal-link-responsive-Cadastro');
    var modal_responsive_Cadastro= document.querySelector('.modal_responsive_Cadastro');
    var overlay_responsive_Cadastro = document.querySelector('.overlay_responsive_Cadastro');

    // Adiciona um listener de evento para o link
    link_responsive_Cadastro.addEventListener('click', function (event) {
        event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

        overlay_responsive_Cadastro.style.display = 'block'; // exibe a camada escura
        modal_responsive_Cadastro.style.display = 'block'; // exibe a janela modal
    });

    // Adiciona um listener de evento para a camada escura
        overlay_responsive_Cadastro.addEventListener('click', function () {
        overlay_responsive_Cadastro.style.display = 'none'; // oculta a camada escura
        modal_responsive_Cadastro.style.display = 'none'; // oculta a janela modal
    });