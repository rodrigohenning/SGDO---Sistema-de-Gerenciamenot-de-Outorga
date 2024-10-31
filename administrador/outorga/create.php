<?php
include_once('verifica_login.php');

include_once("../conexao.php");


$requerente = $_POST['requerente'];
$cpf = $_POST['cpf'];
$processo = $_POST['processo'];
$situacao = $_POST['situacao'];
$caixa = $_POST['caixa'];
$outorga = $_POST['outorga'];
$atividade = $_POST['atividade'];
$municipio = $_POST['municipio'];
$coordenadas = addslashes($_POST['coordenadas']);
$bacia = $_POST['bacia'];
$rio = $_POST['rio'];
$captacao = $_POST['captacao'];
$zona = $_POST['zona'];
$volume_a = $_POST['volume_a'];
$volume_d = $_POST['volume_d'];
$vazao_h = $_POST['vazao_h'];
$hora_d = $_POST['hora_d'];
$dia_m = $_POST['dia_m'];
$meses_a = $_POST['meses_a'];
$data = $_POST['data'];
$validade = $_POST['validade'];
$excluido = 'N';

$sql = "insert into dados_outorga (requerente,cpf,processo,situacao,caixa,coordenadas,outorga,atividade,municipio,bacia,rio,captacao,zona,volume_a,volume_d,vazao_h,hora_d,dia_m,meses_a,data,validade,excluido) values ('$requerente','$cpf','$processo','$situacao','$caixa','$coordenadas','$outorga','$atividade','$municipio','$bacia','$rio','$captacao','$zona','$volume_a','$volume_d','$vazao_h','$hora_d','$dia_m','$meses_a','$data','$validade','$excluido')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf-8">
		<title>CADASTRAR OUTORGA</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../bootstrap.min.css" rel="stylesheet">

	<head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SGDO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">INICIO</a></li> 
      <li class="active"><a href="#">CADASTRAR PROCESSO</a></li>
      <li><a href="gerenciar_processos.php">GERENCIAR PROCESSOS</a></li>
      <li><a href="painel_de_controle.php">PAINEL DE CONTROLE</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="background-color: #fff;">	

<section>
			
			<?php

			if ($linhas == 1) {
				print "<h3 style='color: green;'>Cadastro realizado com sucesso!</h3>";
			}else{
				print "<h3 style='color: green;'>Cadastro não efetuado <br> informações duplicadas de outro processo!</h3>";			}

			?>


		</section>


	<h1>CADASTRAR OUTORGA</h1>
			<hr>

			<form method="post" action="create.php" class="form-group">
				
				<br>
                
				<h4>REQUERENTE</h4>
                <input type="text" name="requerente" class="form-control" maxlength="100" required Placeholder="Inserir o nome completo">
                <h4>CPF OU CNPJ</h4>
                <input type="text" name="cpf" class="form-control" maxlength="14" required Placeholder="Inserir CPF ou CNPJ do Requerente. OBS: Somente Numeros">
                <h4>PROCESSO ADMINISTRATIVO</h4>
                <input type="text" name="processo" class="form-control" maxlength="25" required Placeholder="Inserir o numero do processo. ex: 0001/2020">       

                 <h4>SITUAÇÃO DO PROCESSO</h4>      
                <select type="text" name="situacao" class="form-control" maxlength="20" required>
                <option>SELECIONE A SITUAÇÃO DO PROCESSO</option>
                <option >EM ANALISE</option>
                <option>PARA ASSINATURA</option>
                <option>ASSINADO</option>
                <option>FALTA DADOS</option>
                <option>INDEFERIDO</option>
                <option>CANCELADO</option>
                <option>JUDICIALIZADO</option>
                <option>OUTROS</option>
                 </select> 

				<h4>CAIXA</h4>
				<input type="text" name="caixa" class="form-control" maxlength="15" required required Placeholder="Inserir onde está o processo: ex: Caixa-01">
                <h4>COORDENADAS GEOGRAFICAS</h4>
                <input type="text" name="coordenadas" class="form-control" maxlength="100" required Placeholder="Inserir as Coordenas de Acordo Com o CAR.">
                <h4>NUMERO DA OUTORGA</h4>
				<input type="text" name="outorga" class="form-control" maxlength="9" Placeholder="Inserir o Numero da Dispensa. ex: 0001/2020">
				<h4>ATIVIDADE</h4>
				<input type="text" name="atividade" class="form-control" maxlength="20">
				<h4>MUNICIPIO</h4>
                <select type="text" name="municipio" class="form-control" maxlength="30">
                <option>SELECIONE O MUNICIPIO</option>
                <option >ACRELANDIA</option>
                <option >ASSIS BRASIL</option>
                <option >BRASILEIA</option>
                <option >BUJARI</option>
                <option >CAPIXABA</option>
                <option >CRUZEIRO DO SUL</option>
                <option >EPITACIOLANDIA</option>
                <option >FEIJO</option>
                <option >JORDAO</option>
                <option >MANOEL URBANO</option>
                <option >MARECHAL THAUMATURGO</option>
                <option >MANCIO LIMA</option>
                <option >PLACIDO DE CASTRO</option>
                <option >PORTO ACRE</option>
                <option >PORTO WALTER</option>
                <option >RIO BRANCO</option>
                <option >RODRIGUES ALVES</option>
                <option >SANTA ROSA DO PURUS</option>
                <option >SENA MADUREIRA</option>
                <option >SENADOR GUIOMARD</option>
                <option >TARAUACA</option>
                <option >XAPURI</option>
                </select>
				<h4>BACIA HIDROGRAFICA</h4>
                <input type="text" name="bacia" class="form-control" maxlength="20" Placeholder="Inserir a Bacia Hidrografica. ex: Rio Acre">
				<h4>RIO</h4>
				<input type="text" name="rio" class="form-control" maxlength="20" Placeholder="Inserir Nome do Rio: ex: Rio Acre">
				<h4>TIPO DE CAPTAÇÃO</h4>      
                <select type="text" name="captacao" class="form-control" maxlength="20">
                <option>SELECIONE O TIPO DE CAPTAÇÃO</option>
                <option >SUPERFICIAL</option>
                <option>SUBTERRANEO</option>
                </select>
				<h4>ZONA</h4>
				<input type="text" name="zona" class="form-control" maxlength="7" Placeholder="Inserir a zona: Rural ou Urbana">
				<h4>VOLUME ACUMULADO M³</h4>
				<input type="text" name="volume_a" class="form-control" maxlength="15" Placeholder="Volume Aculumado total em m³">
				<h4>VOLUME M³ POR DIA</h4>
				<input type="text" name="volume_d" class="form-control" maxlength="15" Placeholder="Volume Aculumado por dia em m³">
				<h4>VAZÃO M³ POR HORA</h4>
				<input type="text" name="vazao_h" class="form-control" maxlength="15" Placeholder="Vazaão por Hora em m³">
				<h4>HORAS POR DIA</h4>
				<input type="text" name="hora_d" class="form-control" maxlength="15" Placeholder="Quantidade de horas a ser captadas por dia³">
				<h4>DIAS POR MÊS</h4>
				<input type="text" name="dia_m" class="form-control" maxlength="20" Placeholder="Quantidades de dias a serem captados por mês">
				<h4>MESES POR ANO</h4>
				<input type="text" name="meses_a" class="form-control" maxlength="20">

				<h4>DATA DA EMISSÃO</h4>
				<input type="date" name="data" class="form-control">
				<h4>VALIDADE</h4>
				 <input type="text" name="validade" class="form-control"  maxlength="20" Placeholder="Validade da Outorga">
				<br>
				<input type="submit" value="Salvar" class="btn btn-success btn-lg">
				<input type="reset" value="Limpar" class="btn btn-danger btn-lg">

			</form>


		</div>
		
	


</body>
</html>