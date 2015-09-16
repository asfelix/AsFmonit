<?php

	// header('Content-type: text/html; charset=utf-8');
	$host = '';
	$port = '';
	$user = '';
	$pass = '';
	$bd = '';
	
	$conexao = mysql_connect($host, $user, $pass) or die('Não foi possível conectar: ' . mysql_error());
	mysql_select_db($bd) or die('Não foi possível conectar: ' . mysql_error());
	$author = "";
	$project = "";
	$client = "";
	$owner = "";
	$siteowner = "";

?>
