 <?php
include_once('../conexao.php');
  include_once('verifica_login.php');
 ?>



<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Graficos de Dados</title>
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

  <?php  
$sql = "select * from dados_dispensa WHERE `municipio` LIKE 'RIO BRANCO' and excluido='N'";

$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);
 
?>

<?php  
$sql2 = "select * from dados_dispensa WHERE `municipio` LIKE 'PORTO ACRE' and excluido='N'";

$consulta2 = mysqli_query($conexao,$sql2);
$registros2 = mysqli_num_rows($consulta2);
 
?>

<?php  
$sql3 = "select * from dados_dispensa WHERE `municipio` LIKE 'XAPURI' and excluido='N'";
$consulta3 = mysqli_query($conexao,$sql3);
$registros3 = mysqli_num_rows($consulta3); 
?>

<?php  
$sql4 = "select * from dados_dispensa WHERE `municipio` LIKE 'BUJARI' and excluido='N'";
$consulta4 = mysqli_query($conexao,$sql4);
$registros4 = mysqli_num_rows($consulta4); 
?>

<?php  
$sql5 = "select * from dados_dispensa WHERE `municipio` LIKE 'SENA MADUREIRA' and excluido='N'";
$consulta5 = mysqli_query($conexao,$sql5);
$registros5 = mysqli_num_rows($consulta5); 
?>

<?php  
$sql6 = "select * from dados_dispensa WHERE `municipio` LIKE 'ACRELANDIA' and excluido='N'";
$consulta6 = mysqli_query($conexao,$sql6);
$registros6 = mysqli_num_rows($consulta6); 
?>

<?php  
$sql7 = "select * from dados_dispensa WHERE `municipio` LIKE 'ASSIS BRASIL' and excluido='N'";
$consulta7 = mysqli_query($conexao,$sql7);
$registros7 = mysqli_num_rows($consulta7); 
?>

<?php  
$sql8 = "select * from dados_dispensa WHERE `municipio` LIKE 'BRASILEIA' and excluido='N'";
$consulta8 = mysqli_query($conexao,$sql8);
$registros8 = mysqli_num_rows($consulta8); 
?>

<?php  
$sql9 = "select * from dados_dispensa WHERE `municipio` LIKE 'BUJARI' and excluido='N'";
$consulta9 = mysqli_query($conexao,$sql9);
$registros9 = mysqli_num_rows($consulta9); 
?>

<?php  
$sql10 = "select * from dados_dispensa WHERE `municipio` LIKE 'CAPIXABA' and excluido='N'";
$consulta10 = mysqli_query($conexao,$sql10);
$registros10 = mysqli_num_rows($consulta10); 
?>

<?php  
$sql11 = "select * from dados_dispensa WHERE `municipio` LIKE 'CRUZEIRO DO SUL' and excluido='N'";
$consulta11 = mysqli_query($conexao,$sql11);
$registros11 = mysqli_num_rows($consulta11); 
?>

<?php  
$sql12 = "select * from dados_dispensa WHERE `municipio` LIKE 'EPITACIOLANDIA' and excluido='N'";
$consulta12 = mysqli_query($conexao,$sql12);
$registros12 = mysqli_num_rows($consulta12); 
?>

<?php  
$sql13 = "select * from dados_dispensa WHERE `municipio` LIKE 'FEIJO' and excluido='N'";
$consulta13 = mysqli_query($conexao,$sql13);
$registros13 = mysqli_num_rows($consulta13); 
?>

<?php  
$sql14 = "select * from dados_dispensa WHERE `municipio` LIKE 'JORDAO' and excluido='N'";
$consulta14 = mysqli_query($conexao,$sql14);
$registros14 = mysqli_num_rows($consulta14); 
?>

<?php  
$sql15 = "select * from dados_dispensa WHERE `municipio` LIKE 'MANOEL URBANO' and excluido='N'";
$consulta15 = mysqli_query($conexao,$sql15);
$registros15 = mysqli_num_rows($consulta15); 
?>

<?php  
$sql16 = "select * from dados_dispensa WHERE `municipio` LIKE 'MARECHAL THAUMATURGO' and excluido='N'";
$consulta16 = mysqli_query($conexao,$sql16);
$registros16 = mysqli_num_rows($consulta16); 
?>

<?php  
$sql17 = "select * from dados_dispensa WHERE `municipio` LIKE 'MANCIO LIMA' and excluido='N'";
$consulta17 = mysqli_query($conexao,$sql17);
$registros17 = mysqli_num_rows($consulta17); 
?>

<?php  
$sql18 = "select * from dados_dispensa WHERE `municipio` LIKE 'PLACIDO DE CASTRO' and excluido='N'";
$consulta18 = mysqli_query($conexao,$sql18);
$registros18 = mysqli_num_rows($consulta18); 
?>

<?php  
$sql19 = "select * from dados_dispensa WHERE `municipio` LIKE 'PORTO WALTER' and excluido='N'";
$consulta19 = mysqli_query($conexao,$sql19);
$registros19 = mysqli_num_rows($consulta19); 
?>

<?php  
$sql20 = "select * from dados_dispensa WHERE `municipio` LIKE 'RODRIGUES ALVES' and excluido='N'";
$consulta20 = mysqli_query($conexao,$sql20);
$registros20 = mysqli_num_rows($consulta20); 
?>

<?php  
$sql21 = "select * from dados_dispensa WHERE `municipio` LIKE 'SANTA ROSA DO PURUS' and excluido='N'";
$consulta21 = mysqli_query($conexao,$sql21);
$registros21 = mysqli_num_rows($consulta21); 
?>

<?php  
$sql22 = "select * from dados_dispensa WHERE `municipio` LIKE 'SENADOR GUIOMARD' and excluido='N'";
$consulta22 = mysqli_query($conexao,$sql22);
$registros22 = mysqli_num_rows($consulta22); 
?>

<?php  
$sql23 = "select * from dados_dispensa WHERE `municipio` LIKE 'TARAUACA'  and excluido='N'";
$consulta23 = mysqli_query($conexao,$sql23);
$registros23 = mysqli_num_rows($consulta23); 
?>

<?php  
$sql24 = "select * from dados_dispensa WHERE `municipio` LIKE 'XAPURI' and excluido='N'";
$consulta24 = mysqli_query($conexao,$sql24);
$registros24 = mysqli_num_rows($consulta24); 
?>
    <HR>


    
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Municipio", "Quantidade", { role: "style" } ],
        ["Acrelândia", <?php print "$registros6" ?>, "color: purple"],
        ["Assis Brasil", <?php print "$registros7" ?>, "color: #87CEFA"],
        ["Brasileia",  <?php print "$registros8" ?>, "#00FFFF"],
        ["Bujari", <?php print "$registros9" ?>, "gold"],
        ["Capixaba", <?php print "$registros10" ?>, "#66CDAA"],
        ["Cruzeiro do Sul", <?php print "$registros11" ?> , "color: pink"],
        ["Epitaciolandia",  <?php print "$registros12" ?>, "#00FA9A"],
        ["Feijó",  <?php print "$registros13" ?>, "#3CB371"],
        ["Jordão",  <?php print "$registros14" ?>, "#808000"],
        ["Manoel Urbano",  <?php print "$registros15" ?>, "#DAA520"],
        ["Marechal Thaumaturgo",  <?php print "$registros16" ?>, "#7B68EE"],
        ["Mâncio Lima",  <?php print "$registros17" ?>, "#DC143C"],
        ["Plácido de Castro", <?php print "$registros18" ?>, "color: #FA8072"],
        ["Porto Acre", <?php print "$registros2" ?>, "color: blue"],
        ["Porto Walter", <?php print "$registros19" ?>, "color: green"],
        ["Rio Branco",  <?php print "$registros" ?>, "#b87333"],
        ["Rodrigues Alves", <?php print "$registros20" ?>, "color: #F0E68C"],
        ["Santa Rosa do Purus", <?php print "$registros21" ?>, "color: #F5F5F5"],
        ["Sena Madureira", <?php print "$registros5" ?>, "color: orange"],
        ["Senador Guiomard", <?php print "$registros22" ?>, "color: #B0E0E6"],
        ["Tarauacá", <?php print "$registros23" ?>, "color: blue"],  
        ["Xapuri", <?php print "$registros24" ?>, "silver"],
        
        
        
        
        
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "DISPENSAS POR MUNICIPIO",
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




<?php  
$ativi = "select * from dados_dispensa WHERE `atividade` LIKE 'DESSEDENTACAO ANIMAL' and excluido='N'";
$cons_ativi01 = mysqli_query($conexao,$ativi);
$cons_ativi01 = mysqli_num_rows($cons_ativi01); 
?>

<?php  
$ativi01 = "select * from dados_dispensa WHERE `atividade` LIKE 'PISCICULTURA' and excluido='N'";
$cons_ativi02 = mysqli_query($conexao,$ativi01);
$cons_ativi02 = mysqli_num_rows($cons_ativi02); 
?>

<?php  
$ativi02 = "select * from dados_dispensa WHERE `atividade` LIKE 'CONSUMO HUMANO' and excluido='N'";
$cons_ativi03 = mysqli_query($conexao,$ativi02);
$cons_ativi03 = mysqli_num_rows($cons_ativi03); 
?>

<?php  
$ativi03 = "select * from dados_dispensa WHERE `atividade` LIKE 'USO NA INDUSTRIA' and excluido='N'";
$cons_ativi04 = mysqli_query($conexao,$ativi03);
$cons_ativi04 = mysqli_num_rows($cons_ativi04); 
?>

<?php  
$ativi04 = "select * from dados_dispensa WHERE `atividade` LIKE 'IRRIGACAO' and excluido='N'";
$cons_ativi05 = mysqli_query($conexao,$ativi04);
$cons_ativi05 = mysqli_num_rows($cons_ativi05); 
?>

<?php  
$ativi05 = "select * from dados_dispensa WHERE `atividade` LIKE 'OUTRAS' and excluido='N'";
$cons_ativi06 = mysqli_query($conexao,$ativi05);
$cons_ativi06 = mysqli_num_rows($cons_ativi06); 
?>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["ATIVIDADE", "Quantidade", { role: "style" } ],
        ["DESSEDENTAÇÃO ANIMAL", <?php print "$cons_ativi01" ?>, "#b87333"],
        ["PISCICULTURA", <?php print "$cons_ativi02" ?>, "silver"],
        ["CONSUMO HUMANO", <?php print "$cons_ativi03" ?>, "gold"],
        ["USO NA INDUSTRIA", <?php print "$cons_ativi04" ?>, "color: blue"],
        ["IRRIGACAO", <?php print "$cons_ativi05" ?>, "color: orange"],
        ["OUTRAS", <?php print "$cons_ativi06" ?>, "color: pink"],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "DISPENSAS POR ATIVIDADE",
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
    









    <?php  
$situ = "select * from dados_dispensa WHERE `situacao` LIKE 'ASSINADO' and excluido='N'";
$cons_situ = mysqli_query($conexao,$situ);
$cons_situ = mysqli_num_rows($cons_situ); 
?>

<?php  
$situ1 = "select * from dados_dispensa WHERE `situacao` LIKE 'EM ANALISE' and excluido='N'";
$cons_situ1 = mysqli_query($conexao,$situ1);
$cons_situ1 = mysqli_num_rows($cons_situ1); 
?>

<?php  
$situ2 = "select * from dados_dispensa WHERE `situacao` LIKE 'FALTA DADOS' and excluido='N'";
$cons_situ2 = mysqli_query($conexao,$situ2);
$cons_situ2 = mysqli_num_rows($cons_situ2); 
?>

<?php  
$situ3 = "select * from dados_dispensa WHERE `situacao` LIKE 'INDEFERIDO' and excluido='N'";
$cons_situ3 = mysqli_query($conexao,$situ3);
$cons_situ3 = mysqli_num_rows($cons_situ3); 
?>

<?php  
$situ4 = "select * from dados_dispensa WHERE `situacao` LIKE 'PARA ASSINATURA' and excluido='N'";
$cons_situ4 = mysqli_query($conexao,$situ4);
$cons_situ4 = mysqli_num_rows($cons_situ4); 
?>

<?php  
$situ5 = "select * from dados_dispensa WHERE `situacao` LIKE 'CANCELADO' and excluido='N'";
$cons_situ5 = mysqli_query($conexao,$situ5);
$cons_situ5 = mysqli_num_rows($cons_situ5); 
?>

<?php  
$situ6 = "select * from dados_dispensa WHERE `situacao` LIKE 'JUDICIALIZADO' and excluido='N'";
$cons_situ6 = mysqli_query($conexao,$situ6);
$cons_situ6 = mysqli_num_rows($cons_situ6); 
?>

<?php  
$situ7 = "select * from dados_dispensa WHERE `situacao` LIKE 'OUTROS' and excluido='N'";
$cons_situ7 = mysqli_query($conexao,$situ7);
$cons_situ7 = mysqli_num_rows($cons_situ7); 
?>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["SITUAÇÃO", "Quantidade", { role: "style" } ],
        ["ASSINADO", <?php print "$cons_situ" ?>, "green"],
        ["EM ANALISE", <?php print "$cons_situ1" ?>, "blue"],
        ["FALTA DADOS", <?php print "$cons_situ2" ?>, "gold"],
        ["INDEFERIDO", <?php print "$cons_situ3" ?>, "color: red"],
        ["PARA ASSINATURA", <?php print "$cons_situ4" ?>, "color: orange"],
        ["CANCELADO", <?php print "$cons_situ5" ?>, "color: silver"],
        ["JUDICIALIZADO", <?php print "$cons_situ6" ?>, "color: #b87333"],
        ["OUTRAS", <?php print "$cons_situ7" ?>, "color: pink"],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "DISPENSA POR SITUAÇÃO",
        width: 1200,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("dispensa_situacao"));
      chart.draw(view, options);
  }
  </script>
<div id="dispensa_situacao" style="width: 700px; height: 600px;"></div>
    


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
	   	<script src="js/bootstrap.min.js"></script>

</body>