<?php 
session_start();
require_once("inc/conecta_banco.php");
if (isset($_SESSION['validacao'])) {


	if($_POST['tipo_registro'] == 'add_cliente'){

		$nome 		= 	$_POST['nome'];
		$cpf 		= 	$_POST['cpf'];
		$rg 		= 	$_POST['rg'];
		$nasc 		= 	$_POST['nascimento'];
		$profissao 	= 	$_POST['profissao'];
		$endereco 	= 	$_POST['endereco'];
		$cidade 	= 	$_POST['cidade'];
		$bairro 	=	$_POST['bairro']; 
		$estado 	=	$_POST['estado'];
		$celular 	= 	$_POST['celular'];

		if($_POST['genero'] == 1){
			$sexo = 'M';
		}else if($_POST['genero'] == 0){
			$sexo = 'F';
		}

		if(isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['cep'])){
			$telefone 	= 	$_POST['telefone'];
			$email 		= 	$_POST['email'];
			$cep 		= 	$_POST['cep']; 
		}

		$sql = "INSERT INTO "
		echo $nome . "<br>" . $cpf . "<br>" . $rg . "<br>" . $nasc . "<br>" . $profissao . "<br>" . $endereco . "<br>" . $cidade . "<br>" . $bairro . "<br>" . $estado . "<br>" .
		$sexo . "<br>" . $telefone . "<br>" . $celular . "<br>" . $email . "<br>" . $cep;
	}

/*
	

&*/



}





?>