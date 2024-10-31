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
		<link href="../bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../Footer-with-button-logo.css">
    


	<head>

<body >
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">SGDO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">INICIO</a></li> 
      <li><a href="cadastrar.php">CADASTRAR PROCESSO</a></li>
      <li><a href="gerenciar_processos.php">GERENCIAR PROCESSO</a></li>
      <li><a href="painel_de_controle.php">PAINEL DE CONTROLE</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logaut.php"><span class="glyphicon glyphicon-log-in"></span> SAIR</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="background-color: #fff;">			

	<h1>GRAFICOS</h1>
    <HR>


    
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Municipio", "Quantidade", { role: "style" } ],
        ["Rio Branco", 0, "#b87333"],
        ["Xapuri", 0, "silver"],
        ["Senador Guiomard", 1, "gold"],
        ["Porto Acre", 0, "color: blue"],
        ["Sena Madureira", 0, "color: orange"],
        ["Porto Walter", 0, "color: green"],
        ["Acrelândia", 0, "color: purple"],
        ["Cruzeiro do Sul", 0, "color: pink"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "OUTORGA POR MUNICIPIO",
        width: 1200,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 700px; height: 600px;"></div>










<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["ATIVIDADE", "Quantidade", { role: "style" } ],
        ["Dessedentação", 0, "#b87333"],
        ["Consumo Humano", 0, "silver"],
        ["Psicultura", 0, "gold"],
        ["Irrigação", 1, "color: blue"],
        ["Uso na Industria", 0, "color: orange"],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "OUTORGA POR ATIVIDADE",
        width: 1200,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("dispensa_atividade"));
      chart.draw(view, options);
  }
  </script>
<div id="dispensa_atividade" style="width: 700px; height: 600px;"></div>
    


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
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="http://localhost/sistema_de_gerenciamento/administrador/dispensa/gerenciar_processos.php">GERENCIAR DISPENSA</a></li>
                        <li><a href="gerenciar_processos.php">GERENCIAR OUTORGA</a></li>
                        <li><a href="http://localhost/sistema_de_gerenciamento/administrador/dispensa/cadastrar.php">CADASTRAR DISPENSA</a></li>
                        <li><a href="cadastrar.php">CADASTRAR OUTORGA</a></li>
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
            <p>© 2019 Copyright - Luiz Henrique & Matheus Felix/p>
        </div>
    </footer>





	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	   	<script src="js/bootstrap.min.js"></script>

</body>