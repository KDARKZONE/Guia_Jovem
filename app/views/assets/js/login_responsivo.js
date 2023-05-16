    // Seleciona o link e a janela modal
    var link_responsive = document.querySelector('.modal-link-responsive');
    var modal_responsive_Login = document.querySelector('.modal_responsive_Login');
    var overlay_responsive_Login = document.querySelector('.overlay_responsive_Login');

    // Adiciona um listener de evento para o link
    link_responsive.addEventListener('click', function (event) {
        event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

        overlay_responsive_Login.style.display = 'block'; // exibe a camada escura
        modal_responsive_Login.style.display = 'block'; // exibe a janela modal
    });

    // Adiciona um listener de evento para a camada escura
    overlay_responsive_Login.addEventListener('click', function () {
        overlay_responsive_Login.style.display = 'none'; // oculta a camada escura
        modal_responsive_Login.style.display = 'none'; // oculta a janela modal
    });