<?php include_once 'head.php'; ?>
<body >
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">SGDO</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-lock"></span> Area do Administrador</a></li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <center><h1>SISTEMA DE GERENCIAMENTO DE DISPENSA E OUTORGA</h1></center>
    <div class="row">
      <div class="col-sm-6">
        <br>
        
        <br>
        <center> <a href="consultar_dispensa.php"> <img src="imagens/consultar_dispensa.png"  alt="consultar dispensa"  width="560" height="220"></a></center>
      </div>
      <div class="col-sm-6">
        <br>
        <BR>
        <center> <a href="consultar_outorga.php"> <img src="imagens/consultar_outorga.png"  alt="consultar outorga"  width="560" height="220"></a></center>
      </div>
    </div>
  </div><br><br><br>
  <?php include_once 'rodape.php'; ?>
</body>
</html>
