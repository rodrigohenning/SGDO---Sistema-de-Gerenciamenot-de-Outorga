<?php

$hostname = "localhost";
$user = "root";
$password = "helpdesk";
$database = "dados_sgdo";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
	print "falha na conexao com banco de dados";
}

?>