
// Seleciona o link e a janela modal
var link = document.querySelector('.modal-link');
var modal = document.querySelector('.modal');
var overlay = document.querySelector('.overlay');

// Adiciona um listener de evento para o link
link.addEventListener('click', function (event) {
event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

overlay.style.display = 'block'; // exibe a camada escura
modal.style.display = 'block'; // exibe a janela modal
});

// Adiciona um listener de evento para a camada escura
overlay.addEventListener('click', function () {
overlay.style.display = 'none'; // oculta a camada escura
modal.style.display = 'none'; // oculta a janela modal
});

// Seleciona o link e a janela modal
var link_1 = document.querySelector('.modal-link_1');
var modal_1 = document.querySelector('.modal_1');
var overlay_1 = document.querySelector('.overlay_1');

// Adiciona um listener de evento para o link
link_1.addEventListener('click', function (event) {
event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

overlay_1.style.display = 'block'; // exibe a camada escura
modal_1.style.display = 'block'; // exibe a janela modal
});

// Adiciona um listener de evento para a camada escura
overlay_1.addEventListener('click', function () {
overlay_1.style.display = 'none'; // oculta a camada escura
modal_1.style.display = 'none'; // oculta a janela modal
});
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
