<?php 
session_start();
require_once("inc/conecta_banco.php");
require_once("inc/functions.php");

if (isset($_SESSION['validacao'])) {


	if($_POST['tipo_registro'] == 'add_cliente'){

		$nome 		= 	$_POST['nome'];
		$cpf 		= 	limpaCPF_CNPJ($_POST['cpf']);
		$rg 		= 	limpaCPF_CNPJ($_POST['rg']);
		$nasc 		= 	$_POST['nascimento'];
		$profissao 	= 	$_POST['profissao'];
		$endereco 	= 	$_POST['endereco'];
		$cidade 	= 	$_POST['cidade'];
		$bairro 	=	$_POST['bairro']; 
		$estado 	=	$_POST['estado'];
		$celular 	= 	limpaCPF_CNPJ($_POST['celular']);

		if($_POST['genero'] == 1){
			$sexo = 'M';
		}else if($_POST['genero'] == 0){
			$sexo = 'F';
		}

		if(isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['cep'])){
			$telefone 	= 	limpaCPF_CNPJ($_POST['telefone']);
			$email 		= 	$_POST['email'];
			$cep 		= 	limpaCPF_CNPJ($_POST['cep']); 
		}

		$sql = "INSERT INTO clientes (nome, cpf, rg, sexo, nasc, profissao, endereco, cidade, bairro, estado, cep, celular,
			telefone, email) VALUES ('$nome','$cpf','$rg','$sexo','$nasc','$profissao','$endereco','$cidade','$bairro',
			'$estado','$cep','$celular','$telefone','$email')";

mysql_query($sql);
/*
echo $nome . "<br>" . $cpf . "<br>" . $rg . "<br>" . $nasc . "<br>" . $profissao . "<br>" . $endereco . "<br>" . $cidade . "<br>" . $bairro . "<br>" . $estado . "<br>" .
$sexo . "<br>" . $telefone . "<br>" . $celular . "<br>" . $email . "<br>" . $cep;
*/
echo "<script> 
alert('Cadastro realizado!');
document.location.href=('add_cliente.php');
</script>";

}//Fim do cadastro de clientes

}






?>