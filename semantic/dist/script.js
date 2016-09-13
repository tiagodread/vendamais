$('document').ready(function(){

  $('div#erro').hide();

  $('#form-login').form({
    email : {
      identifier : 'email',
      rules : [
      {
        type : 'email',
        prompt : 'Preencha o campo com o nome de usuário.'
      }
      ]
    },
    senha : {
      identifier : 'senha',
      rules : [{
        type : 'empty',
        prompt : 'A senhad deve conter no minimo 8 caracteres.'
      }]
    }
  });
  
  $('.ui.dropdown')
  .dropdown();

  $('.tabular .attached')
  .tab();

  $("#Celular").mask("(99) 99999-9999");
  $("#Telefone").mask("(99) 9999-9999");
  $("#CPF").mask("999.999.999-99");
  $("#RG").mask("99.999.999-*");
  $("#cep").mask("99999-999");

$(document).ready(function(){
  $('.menu .item').tab();
});

$('#teste').click(function(){
  $('.ui.sidebar')
  .sidebar('toggle');
});
});