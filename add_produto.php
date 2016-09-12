<?php
include('inc/header.php');
session_start();
if (isset($_SESSION['validacao'])) {

echo "Logado";


}else
	{
		echo "<script>
		alert('Voce nao esta logado no sistema!');	
		location.href='index.php';
	</script>";
}
?>