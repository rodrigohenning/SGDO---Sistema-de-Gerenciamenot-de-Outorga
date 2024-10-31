<?php

include_once('verifica_login.php');
include_once("../conexao.php");


$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);


$sql = "insert into usuario (usuario, senha) values ('$usuario', '$senha')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CADASTRAR PROCESSO</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Footer-with-button-logo.css">
    


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

<?php

            if ($linhas == 1) {
                print "<h3 style='color: green;'>Usuário cadastrado com sucesso!</h3>";
            }else{
                print "<h3 style='color: green;'>Cadastro não efetuado <br> Usuário já existente!</h3>";            }

            ?>         

    <h1>CADASTRAR Usuario</h1>
    <h5>olá,  <?php echo $_SESSION['usuario']; ?></h5>
            <hr>

            <form method="post" action="create_usuario.php" class="form-group">
                
                <br>
                
                <h4>Usuário</h4>
                <input type="text" name="usuario" class="form-control" required>
                <h4>Senha</h4>
                <input type="text" name="senha" class="form-control"  required>     
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
            <p>© 2019 Copyright - Luiz Henrique & Felix</p>
        </div>
    </footer>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

</body>