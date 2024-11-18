
$(document).ready(function() {
  // Máscara para CPF
  $('#cpf').on('input', function() {
    var cpf = $(this).val().replace(/\D/g, '');

    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d{2})$/, '$1-$2');

    $(this).val(cpf);
  });

  // Máscara para telefone
  $('#contato').on('input', handlePhone);
});

const handlePhone = (event) => {
  let input = event.target;
  input.value = phoneMask(input.value);
};

const phoneMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{2})(\d)/,"($1) $2")
  value = value.replace(/(\d)(\d{4})$/,"$1-$2")
  return value
}

$(document).ready(function() {
  $('#cnpj').on('input', function(event) {
    let input = event.target;
    input.value = cnpjMask(input.value);
  });
});

const cnpjMask = (value) => {
  if (!value) return "";
  value = value.replace(/\D/g, "");
  value = value.replace(/(\d{2})(\d)/, "$1.$2");
  value = value.replace(/(\d{3})(\d)/, "$1.$2");
  value = value.replace(/(\d{3})(\d)/, "$1/$2");
  value = value.replace(/(\d{4})(\d)/, "$1-$2");
  return value;
};

// máscara de CEP
document.getElementById('cep').addEventListener('input', function () {
  var cep = this.value;
  this.value = mascaraCep(cep);
});
function mascaraCep(cep) {
  cep = cep.replace(/\D/g, '');
  cep = cep.replace(/^(\d{5})(\d)/, '$1-$2');
  return cep;
}


