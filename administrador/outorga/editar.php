<?php
session_start();
include_once '../pdo.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>EDITAR PROCESSO DE OUTORGA</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../bootstrap.min.css" rel="stylesheet">

    <head>

<body >
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SGDO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li> 
      <li><a href="#">Cadastrar Processo</a></li>
      <li><a href="gerenciar_processos.php">Gerenciar Processos</a></li>
      <li><a href="painel_de_controle.php">PAINEL DE CONTROLE</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
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
        $result_cont = "SELECT * FROM dados_outorga WHERE id=$id";
        
        //Seleciona os registros
        $resultado_registo = $conexao->prepare($result_cont);
        $resultado_registo->execute();
        $row_registro = $resultado_registo->fetch(PDO::FETCH_ASSOC); 
        
        ?>
           
           

            <form method="post" action="update.php" class="form-group">
                
                <br>
                <input type="hidden" name="id" value="<?php if(isset($row_registro['id'])){ echo $row_registro['id']; } ?>">
                
                <h4> REQUERENTE</h4>
                <input type="text" name="requerente" class="form-control" maxlength="100" required placeholder="Inserir o nome completo" value="<?php if(isset($row_registro['requerente'])){ echo $row_registro['requerente']; } ?>">
                <h4> CPF ou CNPJ</h4>
                <input type="text" name="cpf" class="form-control" maxlength="11" required placeholder="Inserir o cpf" value="<?php if(isset($row_registro['cpf'])){ echo $row_registro['cpf']; } ?>">
                <h4>PROCESSO ADMINISTRATIVO</h4>
                <input type="text" name="processo" class="form-control" maxlength="30" required placeholder="PROCESSO ADMINISTRATIVO" value="<?php if(isset($row_registro['processo'])){ echo $row_registro['processo']; } ?>">         

                 <h4>SITUAÇÃO DO PROCESSO</h4>      
                <select type="text" name="situacao" class="form-control" maxlength="20" required placeholder="SITUAÇÃO DO PROCESSO" value="<?php if(isset($row_registro['situacao'])){ echo $row_registro['situacao']; } ?>">
                <option></option>
                <option >EM ANALISE</option>
                <option>PARA ASSINATURA</option>
                <option>ASSINADO</option>
                <option>FALTA DADOS</option>
                <option>INDEFERIDO</option>                
                <option>VENCIDA</option>
                <option>OUTROS</option>
                 </select> 

                <h4>CAIXA</h4>
                <input type="text" name="caixa" class="form-control" maxlength="30" placeholder="CAIXA DO PROCESSO" value="<?php if(isset($row_registro['caixa'])){ echo $row_registro['caixa']; } ?>">
                <h4>NUMERO DA OUTORGA</h4>
                <input type="text" name="outorga" class="form-control" maxlength="9" placeholder="NUMERO DA OUTORGA" value="<?php if(isset($row_registro['outorga'])){ echo $row_registro['outorga']; } ?>">
                <h4>ATIVIDADE</h4>
                <input type="text" name="atividade" class="form-control" maxlength="40" placeholder="ATIVIDADE" value="<?php if(isset($row_registro['atividade'])){ echo $row_registro['atividade']; } ?>">
                <h4>MUNICIPIO</h4>
                <input type="text" name="municipio" class="form-control" maxlength="20" placeholder="MUNICIPIO" value="<?php if(isset($row_registro['municipio'])){ echo $row_registro['municipio']; } ?>">
                <h4>COORDENADAS GEOGRAFICAS</h4>
                <input type="varchar" name="coordenadas" class="form-control" maxlength="50" placeholder="COORDENADAS GEOGRAFICAS" value="<?php if(isset($row_registro['coordenadas'])){ echo $row_registro['coordenadas']; } ?>">
                <h4>BACIA HIDROGRAFICA</h4>
                <input type="text" name="bacia" class="form-control" maxlength="20" placeholder="BACIA HIDROGRAFICA" value="<?php if(isset($row_registro['bacia'])){ echo $row_registro['bacia']; } ?>">
                <h4>RIO</h4>
                <input type="text" name="rio" class="form-control" maxlength="9" placeholder="NOME DO RIO" value="<?php if(isset($row_registro['rio'])){ echo $row_registro['rio']; } ?>">

                <h4>TIPO DE CAPTAÇÃO</h4>
                <input type="text" name="captacao" class="form-control" maxlength="9" placeholder="TIPO DE CAPTAÇÃO" value="<?php if(isset($row_registro['captacao'])){ echo $row_registro['captacao']; } ?>">

                <h4>ZONA</h4>
                <input type="text" name="zona" class="form-control" maxlength="9" placeholder="ZONA" value="<?php if(isset($row_registro['zona'])){ echo $row_registro['zona']; } ?>">

                <h4>VOLUME ACUMULADO M³</h4>
                <input type="text" name="volume_a" class="form-control" maxlength="9" placeholder="VOLUME ACUMULADO M³" value="<?php if(isset($row_registro['volume_a'])){ echo $row_registro['volume_a']; } ?>">

                <h4>VOLUME M³ POR DIA</h4>
                <input type="text" name="volume_d" class="form-control" maxlength="9" placeholder="VOLUME M³ POR DIA" value="<?php if(isset($row_registro['volume_d'])){ echo $row_registro['volume_d']; } ?>">

                <h4>VAZÃO M³ POR HORA</h4>
                <input type="text" name="vazao_h" class="form-control" maxlength="9" placeholder="VAZÃO M³ POR HORA" value="<?php if(isset($row_registro['vazao_h'])){ echo $row_registro['vazao_h']; } ?>">

                <h4>HORAS POR DIA</h4>
                <input type="text" name="hora_d" class="form-control" maxlength="9" placeholder="HORAS POR DIA" value="<?php if(isset($row_registro['hora_d'])){ echo $row_registro['hora_d']; } ?>">

                <h4>DIAS POR MÊS</h4>
                <input type="text" name="dia_m" class="form-control" maxlength="9" placeholder="DIAS POR MÊS" value="<?php if(isset($row_registro['dia_m'])){ echo $row_registro['dia_m']; } ?>">

                <h4>MESES POR ANO</h4>
                <input type="text" name="meses_a" class="form-control" maxlength="9" placeholder="MESES POR ANO" value="<?php if(isset($row_registro['meses_a'])){ echo $row_registro['meses_a']; } ?>">

                <h4>DATA DA EMISSÃO</h4>
                <input type="date" name="data" class="form-control" placeholder="DATA DA EMISSÃO" value="<?php if(isset($row_registro['data'])){ echo $row_registro['data']; } ?>">
                <h4>VALIDADE</h4>
                 <input type="text" name="validade" class="form-control"  maxlength="500" placeholder="VALIDADE" value="<?php if(isset($row_registro['validade'])){ echo $row_registro['validade']; } ?>">
                <br>
                <input name="SendEditCont" type="submit" value="Editar" class="btn btn-success btn-lg">
               

            </form>
      
    </body>
</html>
