 <?php
  include_once('dispensa/verifica_login.php');
  include_once 'head.php';
 ?>
<body >
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">SGDO</a>
    </div>
    <ul class="nav navbar-nav navbar-right">   
      <li><a href="dispensa/logaut.php"><span class="glyphicon glyphicon-log-in"></span> SAIR</a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <center><h1>SISTEMA DE GERENCIAMENTO DE DISPENSA E OUTORGA</h1></center>
  <div class="row">
      <div class="col-sm-6">
        <br>
               <br>
        <center> <a href="dispensa/gerenciar_processos.php"> <img src="dispensa/imagens/gerenciar_dispensa.png" width="560" height="220" alt="Gerenciar Dispensa"  ></a></center>
      </div>
      <div class="col-sm-6">
        <br>

        <br>
        <center>  <a href="outorga/gerenciar_processos.php"><img src="outorga/imagens/gerenciar_outorga.png" width="560" height="220" alt="Gerenciar Outorga"  ></a></center>
      </div>
    </div>
</div>
<br>
<br>
<br>
  <?php include_once 'rodape.php'; ?>
  </body>
</html>
