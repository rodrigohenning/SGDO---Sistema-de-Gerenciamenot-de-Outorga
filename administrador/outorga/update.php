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
    $caixa = filter_input(INPUT_POST, 'caixa', FILTER_SANITIZE_STRING);
    $outorga = filter_input(INPUT_POST, 'outorga', FILTER_SANITIZE_STRING);
    $atividade = filter_input(INPUT_POST, 'atividade', FILTER_SANITIZE_STRING);
    $municipio = filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING);
    $coordenadas = filter_input(INPUT_POST, 'coordenadas', FILTER_SANITIZE_STRING);
    $bacia = filter_input(INPUT_POST, 'bacia', FILTER_SANITIZE_STRING);
    $rio = filter_input(INPUT_POST, 'rio', FILTER_SANITIZE_STRING);
    $captacao = filter_input(INPUT_POST, 'captacao', FILTER_SANITIZE_STRING);
    $zona = filter_input(INPUT_POST, 'zona', FILTER_SANITIZE_STRING);
    $volume_a = filter_input(INPUT_POST, 'volume_a', FILTER_SANITIZE_STRING);
    $volume_d = filter_input(INPUT_POST, 'volume_d', FILTER_SANITIZE_STRING);
    $vazao_h = filter_input(INPUT_POST, 'vazao_h', FILTER_SANITIZE_STRING);
    $hora_d = filter_input(INPUT_POST, 'hora_d', FILTER_SANITIZE_STRING);
    $dia_m = filter_input(INPUT_POST, 'dia_m', FILTER_SANITIZE_STRING);
    $meses_a = filter_input(INPUT_POST, 'meses_a', FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
    $validade = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_msg_cont = "UPDATE dados_outorga SET requerente=:requerente,cpf=:cpf, processo=:processo, situacao=:situacao, caixa=:caixa, outorga=:outorga, atividade=:atividade, municipio=:municipio, coordenadas=:coordenadas, bacia=:bacia, rio=:rio, captacao=:captacao, zona=:zona, volume_a=:volume_a, volume_d=:volume_d, vazao_h=:vazao_h, hora_d=:hora_d, dia_m=:dia_m, meses_a=:meses_a, data=:data, validade=:validade WHERE id=$id";
    
    $update_msg_cont = $conexao->prepare($result_msg_cont);
    $update_msg_cont->bindParam(':requerente', $requerente);
    $update_msg_cont->bindParam(':cpf', $cpf);
    $update_msg_cont->bindParam(':processo', $processo);
    $update_msg_cont->bindParam(':situacao', $situacao);
    $update_msg_cont->bindParam(':caixa', $caixa);
    $update_msg_cont->bindParam(':outorga', $outorga);
    $update_msg_cont->bindParam(':atividade', $atividade);
    $update_msg_cont->bindParam(':municipio', $municipio);
    $update_msg_cont->bindParam(':coordenadas', $coordenadas);
    $update_msg_cont->bindParam(':bacia', $bacia);
    $update_msg_cont->bindParam(':rio', $rio);
    $update_msg_cont->bindParam(':captacao', $captacao);
    $update_msg_cont->bindParam(':zona', $zona);
    $update_msg_cont->bindParam(':volume_a', $volume_a);
    $update_msg_cont->bindParam(':volume_d', $volume_d);
    $update_msg_cont->bindParam(':vazao_h', $vazao_h);
    $update_msg_cont->bindParam(':hora_d', $hora_d);
    $update_msg_cont->bindParam(':dia_m', $dia_m);
    $update_msg_cont->bindParam(':meses_a', $meses_a);
    $update_msg_cont->bindParam(':data', $data);
    $update_msg_cont->bindParam(':validade', $validade);


    if($update_msg_cont->execute()){
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