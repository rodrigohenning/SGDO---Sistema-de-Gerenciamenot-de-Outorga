<?php
session_start();
include_once '../pdo.php';

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendEditCont = filter_input(INPUT_POST, 'SendEditCont', FILTER_SANITIZE_STRING);
if($SendEditCont){
    //Receber os dados do formulário
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $requerente = filter_input(INPUT_POST, 'requerente', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $processo = filter_input(INPUT_POST, 'processo', FILTER_SANITIZE_STRING);
    $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);
    $localizacao = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_STRING);
    $dispensa = filter_input(INPUT_POST, 'dispensa', FILTER_SANITIZE_STRING);
    $atividade = filter_input(INPUT_POST, 'atividade', FILTER_SANITIZE_STRING);
    $municipio = filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING);
    $coordenadas = filter_input(INPUT_POST, 'coordenadas', FILTER_SANITIZE_STRING);
    $pa = filter_input(INPUT_POST, 'pa', FILTER_SANITIZE_STRING);
    $bacia = filter_input(INPUT_POST, 'bacia', FILTER_SANITIZE_STRING);
    $captacao = filter_input(INPUT_POST, 'captacao', FILTER_SANITIZE_STRING);
    $lamina = filter_input(INPUT_POST, 'lamina', FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
    $obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_msg_cont = "UPDATE dados_dispensa SET requerente=:requerente,cpf=:cpf, processo=:processo, situacao=:situacao, localizacao=:localizacao, dispensa=:dispensa, atividade=:atividade, municipio=:municipio, coordenadas=:coordenadas, pa=:pa, bacia=:bacia, captacao=:captacao,  lamina=:lamina, data=:data, obs=:obs WHERE id=$id";
    
    $update_itens = $conexao->prepare($result_msg_cont);
    $update_itens->bindParam(':requerente', $requerente);
    $update_itens->bindParam(':cpf', $cpf);
    $update_itens->bindParam(':processo', $processo);
    $update_itens->bindParam(':situacao', $situacao);
    $update_itens->bindParam(':localizacao', $localizacao);
    $update_itens->bindParam(':dispensa', $dispensa);
    $update_itens->bindParam(':atividade', $atividade);
    $update_itens->bindParam(':municipio', $municipio);
    $update_itens->bindParam(':coordenadas', $coordenadas);
    $update_itens->bindParam(':pa', $pa);
    $update_itens->bindParam(':bacia', $bacia);
    $update_itens->bindParam(':captacao', $captacao);
    $update_itens->bindParam(':lamina', $lamina);
    $update_itens->bindParam(':data', $data);
    $update_itens->bindParam(':obs', $obs);


    if($update_itens->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>informaçoes editadas com sucesso</p>";
        header("Location: gerenciar_processos.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>informaçoes não foram editadas com sucesso</p>";
        header("Location: editar.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>informaçoes não foram editadas com sucesso</p>";
    header("Location: editar.php");
}