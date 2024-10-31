<?php
session_start();
include_once("../conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "UPDATE dados_outorga SET excluido='N' WHERE id='$id'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	if(mysqli_affected_rows($conexao)){
		$_SESSION['msg'] = "<p style='color:green;'>Processo restaurado com sucesso</p>";
		header("Location: painel_de_controle.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro, processo não foi restaurado com sucesso</p>";
		header("Location: painel_de_controle.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um Processo</p>";
	header("Location: painel_de_controle.php");
}
