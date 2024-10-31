 <?php

  include_once('../conexao.php');
  include_once('verifica_login.php');
 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>GERENCIAR DISPENSAS</title>
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
      if(isset($_POST['requerente'])){
        $pesquisar = $_POST['requerente'];
        //Selecionar  os itens da página
        $result_itens = "SELECT * FROM dados_dispensa WHERE excluido='N' and requerente LIKE '%$pesquisar%' or cpf LIKE '%$pesquisar%' ";
        $resultado_itens = mysqli_query($conexao, $result_itens);       
      }else{
        //Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
        //Selecionar todos os itens da tabela 
        $result_itens_tb = "SELECT * FROM dados_dispensa WHERE excluido='N'";
        $resultado_itens_tb = mysqli_query($conexao , $result_itens_tb);
        
        //Contar o total de itens
        $total_itens = mysqli_num_rows($resultado_itens_tb);
        
        //Seta a quantidade de itens por página
        $quantidade_pg = 15;
        
        //calcular o número de páginas 
        $num_pagina = ceil($total_itens/$quantidade_pg);
        
        //calcular o inicio da visualizao 
        $inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
        
        //Selecionar  os itens da página
        $result_itens = "SELECT * FROM dados_dispensa WHERE excluido='N' limit $inicio, $quantidade_pg";
        $resultado_itens = mysqli_query($conexao , $result_itens);
        $total_itens = mysqli_num_rows($resultado_itens);
      }
    ?>




    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>GERENCIAR DISPENSA</h1>

        <h5>Olá,  <?php echo $_SESSION['usuario']; ?></h5>
    

      </div>
      <form class="form-horizontal" method="POST" action="">
        <div class="form-group">
          <label class="col-sm-2 control-label">PESQUISAR</label>
          <div class="col-sm-8">
            <input type="text" name="requerente" class="form-control"  placeholder="PESQUISE POR NOME, CPF OU CNPJ.  OBS: SOMENTE NUMEROS" value="">
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-info">Pesquisar</button>
          </div>
        </div>
      </form> <hr>

<?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

  ?>
      
      <form method="POST" action="gerar_planilha_especifica.php">
        <div class="row espaco">
          <div class="pull-right">          
            
            <a href="gerar_planilha.php"><button type='button' class='btn btn-sm btn-danger'>GERAR EXCEL</button></a>
            <a href="graficos.php"><button type='button' class='btn btn-sm btn-primary'>RELATÓRIOS</button></a>
            <input type="submit" value="EXCEL ESPECIFICO" class='btn btn-sm btn-success'>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">SELECIONAR</th>                  
                  <th class="text-center">REQUERENTE</th>
                  <th class="text-center">PROCESSO</th>
                  <th class="text-center">LOCALIZAÇÃO DO PROCESSO</th>
                  <th class="text-center">SITUAÇÃO</th>
                  <th class="text-center"><H9 class="glyphicon glyphicon-eye-open"></H9></th>
                  <th class="text-center"><H9 class="glyphicon glyphicon-pencil"></H9></th>
                   <th class="text-center"><H9 class="glyphicon glyphicon-remove"></H9></th>
                </tr>
              </thead>
              <tbody>
                <?php while($row_itens = mysqli_fetch_assoc($resultado_itens)){?>
                  <tr>
                    <?php $id = $row_itens["id"];  ?>
                    <td class="text-center">
                      <?php echo "<input type='checkbox' name='msg_contato[$id]' value='1'" ?>
                    </td>
                    <td class="text-center"><?php echo $row_itens["requerente"]; ?></td>
                    <td class="text-center"><?php echo $row_itens["processo"]; ?></td>
                    <td class="text-center"><?php echo $row_itens["localizacao"]; ?></td>
                    <td class="text-center"><?php echo $row_itens["situacao"]; ?></td>
                    <td class="text-center">
                    <button type="button" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#myModal<?php echo $row_itens['id']; ?>">VISUALIZAR</button></td>

                    <td class="text-center"><?php echo "<a href='editar.php?id=".$row_itens['id']."'> <button  type='button' class='btn btn-warning btn-xs'>EDITAR</button></a>" ?></td>

                    <td class="text-center">
                    <button type="button" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#delete<?php echo $row_itens['id']; ?>">DELETAR</button></td>


                    
 



<!-- Inicio Modal -->
 <div class="modal fade" id="myModal<?php echo $row_itens['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel"><?php echo $row_itens['requerente']; ?></h4><BR>
                                               
                      </div>
                      <div class="modal-body">

                       <dt>CPF:</dt>
                        <dd><?php echo $row_itens['cpf']; ?></dd><hr>

                        <dt>PROCESSO ADMINISTRATIVO:</dt>
                        <dd><?php echo $row_itens['processo']; ?></dd><hr>

                        <dt>SITUACÃO DO PROCESSO:</dt>
                        <dd><?php echo $row_itens['situacao']; ?></dd><hr>

                        <dt>LOCALIZAÇÃO DO PROCESSO:</dt>
                        <dd><?php echo $row_itens['localizacao']; ?></dd><hr>

                        <dt>COORDENADAS:</dt>
                        <dd><?php echo $row_itens['coordenadas']; ?></dd><hr>

                        <dt>NUMERO DA DISPENSA:</dt>
                        <dd><?php echo $row_itens['dispensa']; ?></dd><hr>

                        <dt>ATIVIDADE:</dt>
                        <dd><?php echo $row_itens['atividade']; ?></dd><hr>

                        <dt>MUNICIPIO:</dt>
                        <dd><?php echo $row_itens['municipio']; ?></dd><hr>

                        <dt>PROJETO DE ASSENTAMENTO:</dt>
                        <dd><?php echo $row_itens['pa']; ?></dd><hr>

                        <dt>BACIA HIDROGRAFICA:</dt>
                        <dd><?php echo $row_itens['bacia']; ?></dd><hr>

                        <dt>TIPO DE CAPTAÇÃO:</dt>
                        <dd><?php echo $row_itens['captacao']; ?></dd><hr>

                        <dt>LAMINA LIBERADA(HA):</dt>
                        <dd><?php echo $row_itens['lamina']; ?></dd><hr>

                        <dt>DATA DA LIBERAÇÃO:</dt>
                        <dd><?php 
                           echo date('d/m/Y', strtotime($row_itens['data']));
                        ?></dd><hr>

                        <dt>OBSERVAÇÃO:</dt>
                        <dd><?php echo $row_itens['obs']; ?></dd><hr>

                                               
                      </div>
                    </div>
                  </div>
                </div>
                  
<!-- Fim Modal -->
                 

  <!-- Inicio Modal DELETE -->
 <div class="modal fade" id="delete<?php echo $row_itens['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">


  
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">VOCÊ REALMENTE DESEJA DELETAR O PROCESSO DE: <BR> <?php echo $row_itens['requerente']; ?></h4><BR>
                                               
                      </div>
                      <center><div class="modal-body">

                        <?php echo "<a href='delete.php?id=".$row_itens['id']."'> <button  type='button' class='btn btn-danger'>SIM, DELETAR</button></a>" ?>

                        <a href="gerenciar_processos.php"> <button type='button' class='btn btn-warning'>NÃO DELETAR</button></a><center>

               

            </form>

                                               
                      </div>
                    </div>
                  </div>
                </div>
                  
<!-- Fim Modal DELETE-->
 
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </form>
      <?php
      if(!isset($_POST['requerente'])){
        //Verificar pagina anterior e posterior
        $pagina_anterior = $pagina - 1;
        $pagina_posterior = $pagina + 1;
        ?>
        <nav class="text-center">
          <ul class="pagination">
            <li >
              <?php 
                echo "Página - ".$pagina_atual." de ".$num_pagina."<br>";
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
              //Apresentar a paginação $num_pagina
              if ($pagina_atual<($num_pagina-4)) {
		                  for($i = $pagina_posterior-1; $i < $pagina_atual + 6; $i++){  		
		                    ?>
		                      <li><a href="gerenciar_processos.php?pagina=$pagina_atual<?php echo $i; ?>">
		                        <?php echo $i; ?>
		                      </a></li>
		                    <?php
		                  }

              }elseif ($pagina_atual>=($num_pagina-4)) { 

                      for($i = $pagina_anterior; $i < $num_pagina+1; $i++){
                        ?>
                          <li><a href="gerenciar_processos.php?pagina=$pagina_atual<?php echo $i; ?>">
                            <?php echo $i; ?>
                          </a></li>
                        <?php
                      }     
              }  
            ?>          
            <li>
              <?php 
                if($pagina_posterior <= $num_pagina){
                  ?><a href="gerenciar_processos.php?pagina=$pagina_posterior<?php echo $pagina_posterior; ?>" aria-label="Next">
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
    <script src="../bootstrap.min.js"></script>
  </body>
</html>
