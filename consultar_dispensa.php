 <?php

  include_once('administrador/conexao.php');
 
 ?>

 <?php include_once 'head.php'; ?>


<body >


	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SGDO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">INICIO</a></li> 
   

    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>




<?php
      if(isset($_POST['requerente'])){
        $pesquisar = $_POST['requerente'];
        //Selecionar  os itens da página
        $select_itens = "SELECT * FROM dados_dispensa WHERE excluido='N' and requerente LIKE '%$pesquisar%' or cpf LIKE '%$pesquisar%' ";
        $resultado_itens = mysqli_query($conexao, $select_itens);       
      }else{
        //Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
        //Selecionar todos os itens da tabela 
        $resultado_itens_tb = "SELECT * FROM dados_dispensa WHERE excluido='N'";
        $result_itens = mysqli_query($conexao , $resultado_itens_tb);
        
        //Contar o total de itens
        $total_itens = mysqli_num_rows($result_itens);
        
        //Seta a quantidade de itens por página
        $quantidade_pg = 5;
        
        //calcular o número de páginas 
        $num_pagina = ceil($total_itens/$quantidade_pg);
        
        //calcular o inicio da visualizao 
        $inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
        
        //Selecionar  os itens da página
        $select_itens = "SELECT * FROM dados_dispensa WHERE excluido='N' limit $inicio, $quantidade_pg";
        $resultado_itens = mysqli_query($conexao , $select_itens);
        $total_itens = mysqli_num_rows($resultado_itens);
      }
    ?>




    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Consultar Dispensa</h1>

    

      </div>
      <form class="form-horizontal" method="POST" action="">
        <div class="form-group">
          <label class="col-sm-2 control-label">CONSULTAR</label>
          <div class="col-sm-8">
            <input type="text" name="requerente" class="form-control"  placeholder="PESQUISE POR NOME, CPF E CNPJ" value="">
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
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                                    
                  <th class="text-center">REQUERENTE</th>
                  <th class="text-center">PROCESSO ADMINISTRATIVO</th>
                  <th class="text-center">LOCALIZAÇÃO DO PROCESSO</th>
                  <th class="text-center">SITUAÇÃO</th>
                  <th class="text-center">AÇÃO</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php while($row_itens = mysqli_fetch_assoc($resultado_itens)){?>
                  <tr>
                    <?php $id = $row_itens["id"];  ?>
                    
                    <td class="text-center"><?php echo $row_itens["requerente"]; ?></td>
                    <td class="text-center"><?php echo $row_itens["processo"]; ?></td>
                    <td class="text-center"><?php echo $row_itens["localizacao"]; ?></td>
                    <td class="text-center"><?php echo $row_itens["situacao"]; ?></td>
                    <td class="text-center">
                    <button type="button" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#myModal<?php echo $row_itens['id']; ?>">Mais Informações</button></td>
                   
 



<!-- Inicio Modal -->
 <div class="modal fade" id="myModal<?php echo $row_itens['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel"><?php echo $row_itens['requerente']; ?></h4><BR>
                                               
                      </div>
                      <div class="modal-body">

                                              

                        <dt>NUMERO DA DISPENSA:</dt>
                        <dd><?php echo $row_itens['dispensa']; ?></dd><hr>

                        <dt>ATIVIDADE:</dt>
                        <dd><?php echo $row_itens['atividade']; ?></dd><hr>

                        <dt>MUNICIPIO:</dt>
                        <dd><?php echo $row_itens['municipio']; ?></dd><hr>                

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
                  ?><a href="consultar_dispensa.php?pagina=$pagina_anterior<?php echo $pagina_anterior; ?>" aria-label="Previous">
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
		                      <li><a href="consultar_dispensa.php?pagina=$pagina_atual<?php echo $i; ?>">
		                        <?php echo $i; ?>
		                      </a></li>
		                    <?php
		                  }

              }elseif ($pagina_atual>=($num_pagina-4)) { 

                      for($i = $pagina_anterior; $i < $num_pagina+1; $i++){
                        ?>
                          <li><a href="consultar_dispensa.php?pagina=$pagina_atual<?php echo $i; ?>">
                            <?php echo $i; ?>
                          </a></li>
                        <?php
                      }     
              } 
            ?>          
            <li>
              <?php 
                if($pagina_posterior <= $num_pagina){
                  ?><a href="consultar_dispensa.php?pagina=$pagina_posterior<?php echo $pagina_posterior; ?>" aria-label="Next">
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








<?php include_once 'rodape.php'; ?>
  </body>
</html>
