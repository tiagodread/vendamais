<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <script src="semantic/dist/jquery-3.1.0.min.js"></script>
  <script src="semantic/dist/semantic.min.js"></script>
  <script src="semantic/dist/script.js"></script>
  <script src="semantic/dist/maskedinput.js" type="text/javascript"></script>
</head>
<body>

  <div class="ui massive menu">
    <a class="item"><img src="img/icon.png" class="image" alt="Fastfood"></a>
    <a class="item">Vender</a>
    <div class="ui dropdown item">Cadastrar <i class="dropdown icon"></i> <div class="menu">
      <a class="item" onclick="location.href='add_cliente.php';">Clientes</a>
      <a class="item" onclick="location.href='add_produto.php';">Produtos</a>
    </div>
  </div>
  <div class="right menu">
  <div class="item">
    <button class="ui red button" onclick="location.href='logout.php';">Sair</button>
  </div>
</div>
</div>


</body>
</html>
