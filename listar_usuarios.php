<?php

// Incluir a conexao com o banco de dados
include_once "conexaodb.php";

$query_usuarios = "SELECT id_chamado, nome,email, nucleo, setor, tel, descr FROM chamado";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

$dados = "";
while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    extract($row_usuario);
    $dados .= "<tr>
                    <td>$id_chamado</td>
                    <td>$nome</td>
                    <td>$email</td>
                    <td>$nucleo</td>
                    <td>$setor</td>
                    <td>$tel</td>
                    <td>$descr</td>
                    
                </tr>";
}

echo $dados;




/*
//Receber os dados da requisão
$dados_requisicao = $_REQUEST;

// Lista de colunas da tabela
$colunas = [
    0 => 'id_chamado',
    1 => 'nome',
    2 => 'nucleo',
    3 => 'setor',
    4 => 'tel',
    5 => 'descr',
    6 => 'email'
];
//"SELECT COUNT(id_chamado) AS qnt_usuarios FROM chamado"
// Obter a quantidade de registros no banco de dados
$query_qnt_usuarios = "SELECT COUNT(id_chamado) AS qnt_usuarios FROM chamado";

// Acessa o IF quando ha paramentros de pesquisa   
if(!empty($dados_requisicao['search']['value'])) {
    $query_qnt_usuarios .= " WHERE id_chamado LIKE :id_chamado ";
    $query_qnt_usuarios .= " OR nome LIKE :nome ";
    $query_qnt_usuarios .= " OR nucleo LIKE :nucleo ";
    $query_qnt_usuarios .= " OR setor LIKE :setor ";
    $query_qnt_usuarios .= " OR tel LIKE :tel ";
    $query_qnt_usuarios .= " OR descr LIKE :descr ";
    $query_qnt_usuarios .= " OR email LIKE :email ";
}
// Preparar a QUERY
$result_qnt_usuarios = $conn->prepare($query_qnt_usuarios);
// Acessa o IF quando ha paramentros de pesquisa   
if(!empty($dados_requisicao['search']['value'])) {
    $valor_pesq = "%" . $dados_requisicao['search']['value'] . "%";
    $result_qnt_usuarios->bindParam(':id_chamado', $valor_pesq, PDO::PARAM_STR);
    $result_qnt_usuarios->bindParam(':nome', $valor_pesq, PDO::PARAM_STR);
    $result_qnt_usuarios->bindParam(':nucleo', $valor_pesq, PDO::PARAM_STR);
    $result_qnt_usuarios->bindParam(':setor', $valor_pesq, PDO::PARAM_STR);
    $result_qnt_usuarios->bindParam(':tel', $valor_pesq, PDO::PARAM_STR);
    $result_qnt_usuarios->bindParam(':descr', $valor_pesq, PDO::PARAM_STR);
    $result_qnt_usuarios->bindParam(':email', $valor_pesq, PDO::PARAM_STR);
}
// Executar a QUERY responsável em retornar a quantidade de registros no banco de dados
$result_qnt_usuarios->execute();
$row_qnt_usuarios = $result_qnt_usuarios->fetch(PDO::FETCH_ASSOC);
//var_dump($row_qnt_usuarios);

// Recuperar os registros do banco de dados
$query_usuarios = "SELECT * FROM chamado ";

// Acessa o IF quando ha paramentros de pesquisa   
if(!empty($dados_requisicao['search']['value'])) {
    $query_usuarios .= " WHERE id_chamado LIKE :id_chamado ";
    $query_usuarios .= " OR nome LIKE :nome ";
    $query_usuarios .= " OR nucleo LIKE :nucleo ";
    $query_usuarios .= " OR setor LIKE :setor ";
    $query_usuarios .= " OR tel LIKE :tel ";
    $query_usuarios .= " OR descr LIKE :descr ";
    $query_usuarios .= " OR email LIKE :email ";
}

// Ordenar os registros
$query_usuarios .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . $dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";

// Preparar a QUERY
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_usuarios->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

// Acessa o IF quando ha paramentros de pesquisa   
if(!empty($dados_requisicao['search']['value'])) {
    $valor_pesq = "%" . $dados_requisicao['search']['value'] . "%";
    $result_usuarios->bindParam(':id_chamado', $valor_pesq, PDO::PARAM_STR);
    $result_usuarios->bindParam(':nome', $valor_pesq, PDO::PARAM_STR);
    $result_usuarios->bindParam(':nucleo', $valor_pesq, PDO::PARAM_STR);
    $result_usuarios->bindParam(':setor', $valor_pesq, PDO::PARAM_STR);
    $result_usuarios->bindParam(':tel', $valor_pesq, PDO::PARAM_STR);
    $result_usuarios->bindParam(':descr', $valor_pesq, PDO::PARAM_STR);
    $result_usuarios->bindParam(':email', $valor_pesq, PDO::PARAM_STR);
}
// Executar a QUERY
$result_usuarios->execute();

// Ler os registros retornado do banco de dados e atribuir no array 
while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    extract($row_usuario);
    $registro = [];
    $registro[] = $id;
    $registro[] = $nome;
    $registro[] = $nucleo;
    $registro[] = $setor;
    $registro[] = $tel;
    $registro[] = $descr;
    $registro[] = $email;
    $dados[] = $registro;
}

//Cria o array de informações a serem retornadas para o Javascript
$resultado = [
    "draw" => intval($dados_requisicao['draw']), // Para cada requisição é enviado um número como parâmetro
    "recordsTotal" => intval($row_qnt_usuarios['qnt_usuarios']), // Quantidade de registros que há no banco de dados
    "recordsFiltered" => intval($row_qnt_usuarios['qnt_usuarios']), // Total de registros quando houver pesquisa
    "data" => $dados // Array de dados com os registros retornados da tabela usuarios
];

// Retornar os dados em formato de objeto para o JavaScript
echo json_encode($resultado);*/