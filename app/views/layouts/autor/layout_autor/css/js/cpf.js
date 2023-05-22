var cnpj = document.getElementById('cnpj');
    
cnpj.addEventListener('keyup', function(event) {
  var cnpjValue = cnpj.value;
  
  // Remove caracteres não numéricos
  cnpjValue = cnpjValue.replace(/\D/g, '');
  
  // Aplica a formatação
  cnpjValue = cnpjValue.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, '$1.$2.$3/$4-$5');
  
  // Atualiza o valor do campo
  cnpj.value = cnpjValue;
});