<?php
$conecta = mysql_connect("localhost", "root", "");
mysql_set_charset('utf8'); // para a conexão com o MySQL
mysql_select_db("lanchonete",$conecta);
?>