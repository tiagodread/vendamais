<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Web Agenda - Login</title>
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <script src="semantic/dist/jquery-3.1.0.min.js"></script>
  <script src="semantic/dist/semantic.min.js"></script>
</head>

<body>

  <div class="ui equal width center aligned padded grid">
    <div class="row"></div>
    <div class="row"><img src="img/fastfood.png" class="image" alt="Fastfood"></div>
    <div class="row">
      <div class="column">
        <form action="verificalogin.php" class="ui form" id="form-login" method="post">
          <div class="ui centered card">
            <div class="content">
              <div class="header">Login</div>
            </div>
            <div class="content">
              <div class="field">        
                <div class="two fiels">
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="user icon"></i>
                      <input type="text" name="email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="lock icon"></i>
                      <input type="password" name="senha" placeholder="Senha">
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="extra content" align="center">
              <div class="ui fluid large teal submit button">Login</div>
              <div class="content">
                Não possui cadastro? Cadastre-se <a href="cadastrar.php">aqui</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row"></div>

    <script type="text/javascript">
      $(function(){
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
    </script>
  </body>


  </html>

