<?php
session_start();

echo($_SESSION['nome_usuario'] . "<br>" . $_SESSION['senha_usuario']);


?>