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
});