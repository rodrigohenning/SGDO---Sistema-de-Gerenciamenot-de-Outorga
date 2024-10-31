 <?php
  include_once('verifica_login.php');
 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CADASTRAR PROCESSO</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../../include/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../include/css/Footer-with-button-logo.css"> 
	<head>
<body >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">SGDO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">INICIO</a></li> 
      <li><a href="#">CADASTRAR PROCESSO</a></li>
      <li><a href="gerenciar_processos.php">GERENCIAR PROCESSO</a></li>
      <li><a href="painel_de_controle.php">PAINEL DE CONTROLE</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logaut.php"><span class="glyphicon glyphicon-log-in"></span> SAIR</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="background-color: #fff;">			

	<h1>CADASTRAR DISPENSA</h1>
    <h5>olá,  <?php echo $_SESSION['usuario']; ?></h5>
			<hr>

			<form method="post" action="create.php" class="form-group">
				
				<br>
                
				<h4>REQUERENTE</h4>
				<input type="text" name="requerente" class="form-control" maxlength="150" required Placeholder="Inserir o nome completo">
				<h4>CPF OU CNPJ</h4>
				<input type="text" name="cpf" class="form-control" maxlength="150" required Placeholder="Inserir CPF ou CNPJ do Requerente. OBS: Somente Numeros">
				<h4>PROCESSO ADMINISTRATIVO</h4>
				<input type="text" name="processo" class="form-control" maxlength="30" required Placeholder="Inserir o numero do processo. ex: 0001/2020">		

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

				<h4>LOCALIZAÇÃO DO PROCESSO</h4>
				<input type="text" name="localizacao" class="form-control" maxlength="30" required Placeholder="Inserir o local onde se encontra o processo. EX: Mesa de Análise">    
                <h4>COORDENADAS GEOGRAFICAS</h4>
				<input type="text" name="coordenadas" class="form-control" maxlength="100" required Placeholder="Inserir as Coordenas de Acordo Com o CAR.">
                <h4>NUMERO DA DISPENSA</h4>
				<input type="text" name="dispensa" class="form-control" maxlength="9" Placeholder="Inserir o Numero da Dispensa. ex: 0001/2020">
				

                <h4>ATIVIDADE</h4>       
                <select type="text" type="text" name="atividade" class="form-control" maxlength="40">
                <option>SELECIONE A ATIVIDADADE REQUERIDA</option>
                <option >DESSEDENTACAO ANIMAL</option>
                <option>PISCICULTURA</option>
                <option>CONSUMO HUMANO</option>
                <option>USO NA INDUSTRIA</option>
                <option>IRRIGACAO</option>
                <option>OUTRAS</option>
                </select>


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

				<h4>PROJETO DE ASSENTAMENTO</h4>
				<input type="varchar" name="pa" class="form-control" maxlength="25" Placeholder="Inserir Projeto de Assentamento se Houver. ex: P.A Balanceio">
				<h4>BACIA HIDROGRAFICA</h4>
				<input type="text" name="bacia" class="form-control" maxlength="20" Placeholder="Inserir a Bacia Hidrografica. ex: Rio Acre">
				<h4>TIPO DE CAPTAÇÃO</h4>		
				<select type="text" name="captacao" class="form-control" maxlength="20">
                <option>SELECIONE O TIPO DE CAPTAÇÃO</option>
                <option >SUPERFICIAL</option>
                <option>SUBTERRANEO</option>
                </select>

				<h4>Lamina Liberada (ha)</h4>
				<input type="text" name="lamina" class="form-control" maxlength="9" Placeholder="Inserir a Lamina D'agua liberada em Hectares. ex: 2,0 ha">
				<h4>DATA DA LIBERAÇÃO</h4>
				<input type="date" name="data" class="form-control">
				<h4>OBSERVAÇÃO</h4>
				 <input type="text" name="obs" class="form-control"  maxlength="500" Placeholder="Inserir Observações Adicionais ao Processo">
				<br>
				<input type="submit" value="Salvar" class="btn btn-success btn-lg">
				<input type="reset" value="Limpar" class="btn btn-danger btn-lg">

			</form>


		</div>






<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo">  <img src="imagens/governo.png" class="rounded" alt="Brasao Governo" width="130" height="170"> </h2>
                </div>
                <div class="col-sm-2">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="../index.php">INICIO</a></li>
                        <li><a href="gerenciar_processos.php">GERENCIAR DISPENSA</a></li>
                        <li><a href="http://localhost/sistema_de_gerenciamento/administrador/outorga/gerenciar_processos.php">GERENCIAR OUTORGA</a></li>
                        <li><a href="./cadastrar.php">CADASTRAR DISPENSA</a></li>
                        <li><a href="http://localhost/sistema_de_gerenciamento/administrador/outorga/cadastrar.php">CADASTRAR OUTORGA</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>SOBRE-NÓS</h5>
                    <ul>
                        <li><a href="http://imac.ac.gov.br/quem-somos/">QUEM SOMOS</a></li>
                        <li><a href="http://imac.ac.gov.br/fale-conosco/">CONTATO</a></li>
                        <li><a href="http://imac.ac.gov.br/">SITE DO IMAC</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>SUPORTE</h5>
                    <ul>
                        <li><a href="http://imac.ac.gov.br/perguntas-frequentes/">FAQ</a></li>
                        <li><a href="http://imac.ac.gov.br/fale-conosco/">TELEFONES</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    
                    <h2 class="logo">  <img src="imagens/imac.png" class="rounded" alt="Brasao Imac" width="300" height="150"> </h2>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright - Luiz Henrique & Matheus Felix</p>
        </div>
    </footer>





	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	   	<script src="../../include/js/bootstrap.min.js"></script>

</body>