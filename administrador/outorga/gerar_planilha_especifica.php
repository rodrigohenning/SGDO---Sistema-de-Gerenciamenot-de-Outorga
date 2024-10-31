 <?php
	session_start();
	include_once('../conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>GERAR PLANILHA ESPECIFICA</title>
	<head>
	<body>
		<?php
		if(isset($_POST['msg_contato'])){
			// Define o nome do arquivo que será exportado
			$arquivo = 'dados_outorga_especifico.xls';
			
			// Cria uma tabela HTML com o formato da planilha
			$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="22">Dados Das Outorgas</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Id do processo</b></td>';	
		$html .= '<td><b>Requerente</b></td>';
		$html .= '<td><b>cpf</b></td>';
		$html .= '<td><b>Processo Administrativo</b></td>';
		$html .= '<td><b>Situação</b></td>';
		$html .= '<td><b>Caixa</b></td>';
		$html .= '<td><b>Numero da outorga</b></td>';
		$html .= '<td><b>Atividade</b></td>';
		$html .= '<td><b>Municipio</b></td>';
		$html .= '<td><b>Coordenadas Geograficas</b></td>';
		$html .= '<td><b>Bacia Hidrografica</b></td>';
		$html .= '<td><b>Rio</b></td>';
		$html .= '<td><b>Tipo de Captação</b></td>';
		$html .= '<td><b>Zona</b></td>';
		$html .= '<td><b>Volume acumulado m³</b></td>';
		$html .= '<td><b>Volume m³ por dia</b></td>';
		$html .= '<td><b>Vazao m³ por hora</b></td>';
		$html .= '<td><b>Horas por dia</b></td>';
		$html .= '<td><b>Dias por Mês</b></td>';
		$html .= '<td><b>Meses por ano</b></td>';
		$html .= '<td><b>Data da Emissão</b></td>';
		$html .= '<td><b>validade</b></td>';
		$html .= '</tr>';

			
			foreach($_POST['msg_contato'] as $id => $msg_contato){
				//echo "ID do item: $id <br>";
				//Selecionar todos os itens da tabela 
				$result_itens = "SELECT * FROM dados_outorga WHERE id = $id LIMIT 1";
				$resultado_itens = mysqli_query($conexao , $result_itens);
				
				while($row_itens = mysqli_fetch_assoc($resultado_itens)){
					$html .= '<tr>';
			$html .= '<td>'.$row_itens["id"].'</td>';		
			$html .= '<td>'.$row_itens["requerente"].'</td>';
			$html .= '<td>'.$row_itens["cpf"].'</td>';
			$html .= '<td>'.$row_itens["processo"].'</td>';
			$html .= '<td>'.$row_itens["situacao"].'</td>';
			$html .= '<td>'.$row_itens["caixa"].'</td>';
			$html .= '<td>'.$row_itens["outorga"].'</td>';
			$html .= '<td>'.$row_itens["atividade"].'</td>';
			$html .= '<td>'.$row_itens["municipio"].'</td>';
			$html .= '<td>'.$row_itens["coordenadas"].'</td>';
			$html .= '<td>'.$row_itens["bacia"].'</td>';
			$html .= '<td>'.$row_itens["rio"].'</td>';
			$html .= '<td>'.$row_itens["captacao"].'</td>';
			$html .= '<td>'.$row_itens["zona"].'</td>';
			$html .= '<td>'.$row_itens["volume_a"].'</td>';
			$html .= '<td>'.$row_itens["volume_d"].'</td>';
			$html .= '<td>'.$row_itens["vazao_h"].'</td>';
			$html .= '<td>'.$row_itens["hora_d"].'</td>';
			$html .= '<td>'.$row_itens["dia_m"].'</td>';
			$html .= '<td>'.$row_itens["meses_a"].'</td>';
			$html .= '<td>'.$row_itens["data"].'</td>';
			$html .= '<td>'.$row_itens["validade"].'</td>';
			$html .= '</tr>';
				}
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
			echo "Nenhum processo selecionado";
		}
		
		?>
	</body>
</html>