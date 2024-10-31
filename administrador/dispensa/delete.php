<?php
session_start();
include_once("../conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_itens = "UPDATE dados_dispensa SET excluido='S' WHERE id='$id'";
	$resultado_itens = mysqli_query($conexao, $result_itens);
	if(mysqli_affected_rows($conexao)){
		$_SESSION['msg'] = "<p style='color:green;'>Processo apagado com sucesso</p>";
		header("Location: gerenciar_processos.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o Processo não foi apagado com sucesso</p>";
		header("Location: gerenciar_processos.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um Processo</p>";
	header("Location: gerenciar_processos.php");
}
