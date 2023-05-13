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