const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

function setError(index) {
  campos[index].style.border = '2px solid red';
  spans[index].style.display = 'block';
}

function removeError(index) {
  campos[index].style.border = '';
  spans[index].style.display = 'none';
}

function noticeValidate() {
  if (campos[0].value.length <= 15) {
    setError(0);
  } else {
    removeError(0);
  }
}

function descriptionValidate() {
  if (campos[1].value.length <= 40) {
    setError(1);
  } else {
    removeError(1);
  }
}

function cpfValidate() {
  const cpfInput = document.querySelector('[name="cpf"]');
  const unmaskedValue = cpfInput.value.replace(/\D/g, '');
  const maskedValue = formatCPF(unmaskedValue);
  cpfInput.value = maskedValue;

  if (unmaskedValue.length < 11) {
    setError(2);
  } else {
    removeError(2);
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

  if (form) {
    campos[0].addEventListener('input', noticeValidate);
    campos[1].addEventListener('input', descriptionValidate);
    campos[2].addEventListener('input', cpfValidate);

    form.addEventListener('submit', function(event) {
      event.preventDefault();
      // Suas validações e outras ações aqui
      // Se tudo estiver válido, você pode enviar o formulário
      form.submit();
    });
  }
});