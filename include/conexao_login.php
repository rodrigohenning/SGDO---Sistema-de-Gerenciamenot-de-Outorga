<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'helpdesk');
define('DB', 'dados_sgdo');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não foi possivel conectar ao banco');

?>