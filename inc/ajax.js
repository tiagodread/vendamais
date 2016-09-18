  document.getElementById("nomeCliente").addEventListener("keyup", procurar);


  function procurar(){
    var a = $("#nomeCliente").val();
    console.log(a);
    buscar($("#nomeCliente").val())    
  }

  function buscar(nome)
  {
    var page = "functions.php";
    $.ajax
    ({
      type: 'POST',
      dataType: 'html',
      url: page,
      beforeSend: function () {
        $("#dados").html("Carregando...");
      },
      data: {nome: nome},
      success: function (msg)
      {
        alert(msg);
        $("#dados").html(msg);
      }
    });
  }