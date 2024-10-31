<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: http://localhost/sistema_de_gerenciamento/login.php');
	exit();
}