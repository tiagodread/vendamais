<?php 
include('conecta_banco.php');

function limpaCPF_CNPJ($valor){
	$valor = trim($valor);
	$valor = str_replace(".", "", $valor);
	$valor = str_replace(",", "", $valor);
	$valor = str_replace("-", "", $valor);
	$valor = str_replace("/", "", $valor);
	$valor = str_replace("(", "", $valor);
		$valor = str_replace(")", "", $valor);
		return $valor;
	}


	function getTodosClientes(){
		$sql = "SELECT * FROM clientes";
		$r = mysql_query($sql);
		return $r;
	}
	
	function getClienteNome(){
		var_dump($_POST['nome']);
		$nome = "";
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];

		}		
		$sql = "SELECT * FROM clientes WHERE nome like '%" . $nome . "%'";
		$r = mysql_query($sql);
		return $r;
	}

	function getTotalClientes(){
		$sql = "SELECT COUNT(id) FROM clientes";
		$r = mysql_query($sql);
		$row = mysql_fetch_row($r);
		return $row[0];
	}

	
	


	?>