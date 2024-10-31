<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'helpdesk');
define('DBNAME', 'dados_sgdo');

$conexao = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
