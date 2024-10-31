<?php

include_once '../pdo.php';
include_once 'verifica_login.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>EDITAR DADOS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../bootstrap.min.css" rel="stylesheet">

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
      
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> SAIR</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="background-color: #fff;"> 


  
        <h1>Editar informaçoes do processo</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        //SQL para selecionar o registro
        $result_itens = "SELECT * FROM dados_dispensa WHERE id=$id";
        
        //Seleciona os registros
        $resultado_itens = $conexao->prepare($result_itens);
        $resultado_itens->execute();
        $row_itens = $resultado_itens->fetch(PDO::FETCH_ASSOC); 
        
        ?>
           
           

            <form method="post" action="update.php" class="form-group">
                
                <br>
                <input type="hidden" name="id" value="<?php if(isset($row_itens['id'])){ echo $row_itens['id']; } ?>">
                
                <h4> REQUERENTE</h4>
                <input type="text" name="requerente" class="form-control" maxlength="150" required placeholder="Inserir o nome completo" value="<?php if(isset($row_itens['requerente'])){ echo $row_itens['requerente']; } ?>">
                <h4> CPF OU CNPJ</h4>
                <input type="text" name="cpf" class="form-control" maxlength="18" required placeholder="Inserir CPF ou CNPJ (Somente numeros)" value="<?php if(isset($row_itens['cpf'])){ echo $row_itens['cpf']; } ?>">
                <h4>PROCESSO ADMINISTRATIVO</h4>
                <input type="text" name="processo" class="form-control" maxlength="25" required placeholder="PROCESSO ADMINISTRATIVO" value="<?php if(isset($row_itens['processo'])){ echo $row_itens['processo']; } ?>">         

                 <h4>SITUAÇÃO DO PROCESSO</h4>      
                <select type="text" name="situacao" class="form-control" maxlength="20" required placeholder="SITUAÇÃO DO PROCESSO">
                <option > <?php if(isset($row_itens['situacao'])){ echo $row_itens['situacao']; } ?> </option>
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
                <input type="text" name="localizacao" class="form-control" maxlength="30" placeholder="LOCALIZAÇÃO DO PROCESSO" value="<?php if(isset($row_itens['localizacao'])){ echo $row_itens['localizacao']; } ?>">

                <h4>COORDENADAS GEOGRAFICAS</h4>
                <input type="text" name="coordenadas" class="form-control" maxlength="100" placeholder="COORDENADAS GEOGRAFICAS" value="<?php if(isset($row_itens['coordenadas'])){ echo $row_itens['coordenadas']; } ?>">
                
                <h4>NUMERO DA DISPENSA</h4>
                <input type="text" name="dispensa" class="form-control" maxlength="9" placeholder="NUMERO DA DISPENSA" value="<?php if(isset($row_itens['dispensa'])){ echo $row_itens['dispensa']; } ?>">
         
                <h4>ATIVIDADE</h4>       
                <select type="text" type="text" name="atividade" class="form-control" maxlength="40">
                <option><?php if(isset($row_itens['atividade'])){ echo $row_itens['atividade']; } ?></option>
                <option >DESSEDENTACAO ANIMAL</option>
                <option>PISCICULTURA</option>
                <option>CONSUMO HUMANO</option>
                <option>USO NA INDUSTRIA</option>
                <option>IRRIGACAO</option>
                <option>OUTRAS</option>
                </select>


                <h4>MUNICIPIO</h4>
                <select type="text" name="municipio" class="form-control" maxlength="30">
                <option><?php if(isset($row_itens['municipio'])){ echo $row_itens['municipio']; } ?></option>
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
                <input type="text" name="pa" class="form-control" maxlength="20" placeholder="PROJETO DE ASSENTAMENTO" value="<?php if(isset($row_itens['pa'])){ echo $row_itens['pa']; } ?>">
                <h4>BACIA HIDROGRAFICA</h4>
                <input type="text" name="bacia" class="form-control" maxlength="20" placeholder="BACIA HIDROGRAFICA" value="<?php if(isset($row_itens['bacia'])){ echo $row_itens['bacia']; } ?>">
                
                <h4>TIPO DE CAPTAÇÃO</h4>       
                <select type="text" name="captacao" class="form-control" maxlength="25">
                <option><?php if(isset($row_itens['captacao'])){ echo $row_itens['captacao']; } ?></option>
                <option >SUPERFICIAL</option>
                <option>SUBTERRANEO</option>
                </select>

                <h4>ÀREA ALAGADA (ha)</h4>
                <input type="text" name="lamina" class="form-control" maxlength="9" placeholder="LAMINA LIBERADA" value="<?php if(isset($row_itens['lamina'])){ echo $row_itens['lamina']; } ?>">
                <h4>DATA DA LIBERAÇÃO</h4>
                <input type="date" name="data" class="form-control" placeholder="DATA DA LIBERAÇÃO" value="<?php if(isset($row_itens['data'])){ echo $row_itens['data']; } ?>">
                <h4>OBSERVAÇÃO</h4>
                 <input type="text" name="obs" class="form-control"  maxlength="500" placeholder="OBSERVAÇÃO" value="<?php if(isset($row_itens['obs'])){ echo $row_itens['obs']; } ?>">
                <br>
                <input name="SendEditCont" type="submit" value="SALVAR" class="btn btn-success btn-lg">
               

            </form>
      
    </body>
</html>
