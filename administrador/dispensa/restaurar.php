<?php
session_start();
include_once("../conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_itens = "UPDATE dados_dispensa SET excluido='N' WHERE id='$id'";
	$resultado_itens = mysqli_query($conexao, $result_itens);
	if(mysqli_affected_rows($conexao)){
		$_SESSION['msg'] = "<p style='color:green;'>processo restaurado com sucesso</p>";
		header("Location: painel_de_controle.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o processo não foi restaurado com sucesso</p>";
		header("Location: painel_de_controle.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um processo</p>";
	header("Location: painel_de_controle.php");
}
