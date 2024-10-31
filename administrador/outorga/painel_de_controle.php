 <?php

  include_once('../conexao.php');
  include_once('verifica_login.php');
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>PAINEL DE CONTROLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../include/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../include/css/Footer-with-button-logo.css">

  <head>

<body >


  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SGDO</a>
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




<?php
      if(isset($_POST['processo'])){
        $pesquisar = $_POST['processo'];
        //Selecionar  os itens da página
        $result_msg_contatos = "SELECT * FROM dados_outorga WHERE excluido='S' and processo LIKE '%$pesquisar%' ";
        $resultado_msg_contatos = mysqli_query($conexao, $result_msg_contatos);       
      }else{
        //Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
        //Selecionar todos os itens da tabela 
        $result_msg_contato = "SELECT * FROM dados_outorga WHERE excluido='S'";
        $resultado_msg_contato = mysqli_query($conexao , $result_msg_contato);
        
        //Contar o total de itens
        $total_msg_contatos = mysqli_num_rows($resultado_msg_contato);
        
        //Seta a quantidade de itens por página
        $quantidade_pg = 5;
        
        //calcular o número de páginas 
        $num_pagina = ceil($total_msg_contatos/$quantidade_pg);
        
        //calcular o inicio da visualizao 
        $inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
        
        //Selecionar  os itens da página
        $result_msg_contatos = "SELECT * FROM dados_outorga WHERE excluido='S' limit $inicio, $quantidade_pg";
        $resultado_msg_contatos = mysqli_query($conexao , $result_msg_contatos);
        $total_msg_contatos = mysqli_num_rows($resultado_msg_contatos);
      }
    ?>



    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>PAINEL DE CONTROLE</h1>

        <h5>olá,  <?php echo $_SESSION['usuario']; ?></h5>
    

      </div>

      <CENTER><h2>PROCESSOS EXCLUIDOS</h2></CENTER><br>
       

<?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

  ?>
      
      <form>
        <div class="row espaco">
          <div class="pull-right">          
            <a href="cadastrar_usuario.php"><button type='button' class='btn btn-sm btn-success'>CADASTRAR USUARIO</button></a>
            <a href="graficos.php"><button type='button' class='btn btn-primary'>RELATÓRIOS</button></a>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>                                 
                  <th class="text-center">REQUERENTE</th>
                  <th class="text-center">PROCESSO ADMINISTRATIVO</th>
                  <th class="text-center">NUMERO DA OUTORGA</th>
                  <th class="text-center">SITUAÇÃO</th>
                  <th class="text-center">RESTAURAR PROCESSO</th>
                  <th class="text-center">EXCLUIR</th>
                
                </tr>
              </thead>
              <tbody>
                <?php while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){?>
                  <tr>
                    <?php $id = $row_msg_contatos["id"];  ?>
                   
                    <td class="text-center"><?php echo $row_msg_contatos["requerente"]; ?></td>
                    <td class="text-center"><?php echo $row_msg_contatos["processo"]; ?></td>
                    <td class="text-center"><?php echo $row_msg_contatos["outorga"]; ?></td>
                    <td class="text-center"><?php echo $row_msg_contatos["situacao"]; ?></td>
                    
                    <td class="text-center"><?php echo "<a href='restaurar.php?id=".$row_msg_contatos['id']."'> <button  type='button' class='btn btn-primary btn-xs'>RESTAURAR</button></a>" ?></td>
                    
                    
                    <td class="text-center"><?php echo "<a href='excluir.php?id=".$row_msg_contatos['id']."'> <button  type='button' class='btn btn-danger btn-xs'>EXCLUIR</button></a>" ?></td>
 




                 



                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </form>
      <?php
      if(!isset($_POST['processo'])){
        //Verificar pagina anterior e posterior
        $pagina_anterior = $pagina - 1;
        $pagina_posterior = $pagina + 1;
        ?>
        <nav class="text-center">
          <ul class="pagination">
            <li >
              <?php 
                if($pagina_anterior != 0){
                  ?><a href="gerenciar_processos.php?pagina=$pagina_anterior<?php echo $pagina_anterior; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a><?php
                }else{
                  ?><span aria-hidden="true">&laquo;</span><?php
                }
              ?>
            </li>
            <?php
              //Apresentar a paginação
              for($i = 1; $i < $num_pagina + 1; $i++){
                ?>
                  <li><a href="painel_de_controle.php?pagina=$pagina_atual<?php echo $i; ?>">
                    <?php echo $i; ?>
                  </a></li>
                <?php
              }
            ?>          
            <li>
              <?php 
                if($pagina_posterior <= $num_pagina){
                  ?><a href="painel_de_controle.php?pagina=$pagina_posterior<?php echo $pagina_posterior; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a><?php
                }else{
                  ?><span aria-hidden="true">&raquo;</span><?php
                } 
              ?>
            </li>
          </ul>
        </nav>
      <?php } ?>
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
</html>
