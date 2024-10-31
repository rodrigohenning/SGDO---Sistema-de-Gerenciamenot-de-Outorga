 <?php
	session_start();
	include_once('../conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Gerar Planilha Expecifica</title>
	<head>
	<body>
		<?php
		if(isset($_POST['msg_contato'])){
			// Definimos o nome do arquivo que será exportado
			$arquivo = 'dados_dispensa_especifico.xls';
			
			// Criamos uma tabela HTML com o formato da planilha
			$html = '';
			$html .= '<table border="1">';
			$html .= '<tr>';
			$html .= '<td colspan="16">Dados do Sistema</tr>';
			$html .= '</tr>';
			
			
			$html .= '<tr>';
		$html .= '<td><b>Id do processo</b></td>';	
		$html .= '<td><b>Requerente</b></td>';
		$html .= '<td><b>CPF</b></td>';
		$html .= '<td><b>Processo Administrativo</b></td>';
		$html .= '<td><b>Situação</b></td>';
		$html .= '<td><b>Localização do Processo</b></td>';
		$html .= '<td><b>Coordenadas Geograficas</b></td>';
		$html .= '<td><b>Numero da dispensa</b></td>';
		$html .= '<td><b>Atividade</b></td>';
		$html .= '<td><b>Municipio</b></td>';
		$html .= '<td><b>Projeto de Assentamento</b></td>';
		$html .= '<td><b>Bacia Hidrografica</b></td>';
		$html .= '<td><b>Tipo de Capatção</b></td>';
		$html .= '<td><b>Lamina Liberada</b></td>';
		$html .= '<td><b>Data da Liberação</b></td>';
		$html .= '<td><b>Observação</b></td>';
		$html .= '</tr>';

			
			foreach($_POST['msg_contato'] as $id => $msg_contato){
				//echo "ID do item: $id <br>";
				//Selecionar todos os itens da tabela 
				$result_itens = "SELECT * FROM dados_dispensa WHERE id = $id LIMIT 1";
				$resultado_itens = mysqli_query($conexao , $result_itens);
				
				while($row_itens = mysqli_fetch_assoc($resultado_itens)){
					$html .= '<tr>';
			$html .= '<td>'.$row_itens["id"].'</td>';		
			$html .= '<td>'.$row_itens["requerente"].'</td>';
			$html .= '<td>'.$row_itens["cpf"].'</td>';
			$html .= '<td>'.$row_itens["processo"].'</td>';
			$html .= '<td>'.$row_itens["situacao"].'</td>';
			$html .= '<td>'.$row_itens["localizacao"].'</td>';
			$html .= '<td>'.$row_itens["coordenadas"].'</td>';
			$html .= '<td>'.$row_itens["dispensa"].'</td>';
			$html .= '<td>'.$row_itens["atividade"].'</td>';
			$html .= '<td>'.$row_itens["municipio"].'</td>';
			$html .= '<td>'.$row_itens["pa"].'</td>';
			$html .= '<td>'.$row_itens["bacia"].'</td>';
			$html .= '<td>'.$row_itens["captacao"].'</td>';
			$html .= '<td>'.$row_itens["lamina"].'</td>';
			$html .= '<td>'.$row_itens["data"].'</td>';
			$html .= '<td>'.$row_itens["obs"].'</td>';
			$html .= '</tr>';				}
			}
			// Configurações header para forçar o download
			header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
			header ("Cache-Control: no-cache, must-revalidate");
			header ("Pragma: no-cache");
			header ("Content-type: application/x-msexcel");
			header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
			header ("Content-Description: PHP Generated Data" );
			// Envia o conteúdo do arquivo
			echo $html;
			exit;
		}else{
			echo "Nenhum item selecionado";
		}
		
		?>
	</body>
</html>