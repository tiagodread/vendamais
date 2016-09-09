<?php

session_start();
require("inc/conecta_banco.php");


$email=$_POST['email'];
$senha=$_POST['senha'];

$logar = mysql_query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'") or die("Erro ao selecionar usuário");  


if (mysql_num_rows($logar)>0)
{
      // passou, prepara a sessão

  $consulta = mysql_query("SELECT id,adm FROM `usuario` WHERE email = '$email'") or die ("Erro ao selecionar usuário");  
  $linhas = mysql_num_rows($consulta);
  while($linhas = mysql_fetch_array($consulta)){
    $idUsuario = $linhas['id'];
    $tipoUser = $linhas['adm'];

  }   
  $_SESSION['nome_usuario']=$email;
  $_SESSION['senha_usuario']=$senha;
  $_SESSION['validacao']="1";
  $_SESSION['id']=$idUsuario;
  $_SESSION['tipo_usuario'] = $tipoUser;
        header("Location: home.php");  // chama página da consulta

      }else{

       echo "<script> 
       alert('Dados incorretos, tente novamente...');
       document.location.href=('index.php');
     </script>";echo 0;
   }
   

   

   ?>




