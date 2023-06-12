const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
function setError(index){
    campos[index].style.border = '2px solid red';
    spans[index].style.display = 'block';
}
function removeError(index){
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}
function NoticeValidate(){
    if(campos[0].value.length <= 15){
        setError(0);
    }
    else{
        removeError(0);
    }
}
function DescriptionValidate(){
    if(campos[1].value.length <= 40){
        setError(1);
    }
    else{
        removeError(1);
    }
}
function LinkValidade(){
    if(campos[2].value.length <= 60){
        setError(2);
    }
    else{
        removeError(2);
    }
}
function Tel1Validade() {
    const tel1Input = document.querySelector('[name="tel1"]');
    const unmaskedValue = tel1Input.value.replace(/\D/g, '');
    const maskedValue = formatPhoneNumber(unmaskedValue);
    tel1Input.value = maskedValue;
    
    if (unmaskedValue.length < 11) {
      setError(3);
    } else {
      removeError(3);
    }
  }
  
  function Tel2Validade() {
    const tel2Input = document.querySelector('[name="tel2"]');
    const unmaskedValue = tel2Input.value.replace(/\D/g, '');
    const maskedValue = formatPhoneNumber(unmaskedValue);
    tel2Input.value = maskedValue;
    
    if (unmaskedValue.length < 11) {
      setError(4);
    } else {
      removeError(4);
    }
  }
  
  function formatPhoneNumber(value) {
    const formattedValue = value.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    return formattedValue;
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    const phoneInputs = document.querySelectorAll('.phone-mask');
    const phoneMaskOptions = {
      mask: '(99) 99999-9999'
    };
  
    Inputmask(phoneMaskOptions).mask(phoneInputs);
  });
function instituicaoValidade(){
    if(campos[5].value.length <= 10){
        setError(5);
    }
    else{
        removeError(5);
    }
}
function cnpjvalidate() {
    const cnpjInput = document.querySelector('[name="cnpj"]');
    const unmaskedValue = cnpjInput.value.replace(/\D/g, '');
    const maskedValue = formatCNPJ(unmaskedValue);
    cnpjInput.value = maskedValue;
  
    if (unmaskedValue.length <= 11) {
      setError(6);
    } else {
      removeError(6);
    }
  }
  
  function formatCNPJ(value) {
    const formattedValue = value.replace(/^(\d{3})(\d{3})(\d{4})(\d{2})$/, '$1.$2/$3-$4');
    return formattedValue;
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    const cnpjInput = document.querySelector('.cnpj-mask');
    const cnpjMaskOptions = {
      mask: '999.999/9999-99'
    };
  
    Inputmask(cnpjMaskOptions).mask(cnpjInput);
  });
  function cpfValidade() {
    const cpfInput = document.querySelector('[name="cpf"]');
    const unmaskedValue = cpfInput.value.replace(/\D/g, '');
    const maskedValue = formatCPF(unmaskedValue);
    cpfInput.value = maskedValue;
  
    if (unmaskedValue.length < 11) {
      setError(7);
    } else {
      removeError(7);
    }
  }
  
  function formatCPF(value) {
    const formattedValue = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, '$1.$2.$3-$4');
    return formattedValue;
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    const cpfInput = document.querySelector('.cpf-mask');
    const cpfMaskOptions = {
      mask: '999.999.999-99'
    };
  
    Inputmask(cpfMaskOptions).mask(cpfInput);
  });
function categoriaValidade(){
    if(campos[8].value.length <= 25){
        setError(8);
    }
    else{
        removeError(8);
    }
}
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('form');

  if (form) {
    form.addEventListener('submit', function(event) {
      event.preventDefault();
        NoticeValidate();
        DescriptionValidate();
        LinkValidade();
        Tel1Validade();
        Tel2Validade();
        instituicaoValidade();
        cnpjvalidate();
        cpfValidade();
        categoriaValidade();
      // Suas validações e outras ações aqui
      
      // Se tudo estiver válido, você pode enviar o formulário
      form.submit();
    });
  }
});
