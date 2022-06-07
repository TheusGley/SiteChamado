<?php

include_once "conexaodb.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['nome'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo nome!</div>"];
} elseif (empty($dados['nucleo'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo nucleo!</div>"];
} elseif (empty($dados['tel'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo telefone!</div>"];
} else {
    $query_usuario = "INSERT INTO chamados (nome, nucleo, setor, tel, descr, email) VALUES (:nome, :nucleo, :setor, :tel, :descr, :email)";
    $cad_usuario =$conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':nucleo', $dados['nucleo']);
    $cad_usuario->bindParam(':setor', $dados['setor']);
    $cad_usuario->bindParam(':tel', $dados['tel']);
    $cad_usuario->bindParam(':descr', $dados['descr']);
    $cad_usuario->bindParam(':email', $dados['email']);
    $cad_usuario->execute();

    if($cad_usuario->rowCount()){
        $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>"];
    }else{
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não cadastrado com sucesso!</div>"];
    }
}

echo json_encode($retorna);