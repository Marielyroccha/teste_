<?php 
require 'config.php';

$produto = filter_input(INPUT_POST, 'PRODUTO');
$descricao = filter_input(INPUT_POST, 'DESCRICAO_PRODUTO');
$apelido = filter_input(INPUT_POST, 'APELIDO_PRODUTO');
$grupo = filter_input(INPUT_POST, 'GRUPO_PRODUTO');
$subgrupo = filter_input(INPUT_POST, 'SUBGRUPO_PRODUTO');
$situacao = filter_input(INPUT_POST, 'SITUACAO');
$pesoliquido = filter_input(INPUT_POST, 'PESO_LIQUIDO');
$classificacaofiscal = filter_input(INPUT_POST, 'CLASSIFICACAO_FISCAL');
$codigodebarras = filter_input(INPUT_POST, 'CODIGO_BARRAS');
$colecao = filter_input(INPUT_POST, 'COLECAO');

if( $produto && $descricao){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, DESCRICAO_PRODUTO = :DESCRICAO_PRODUTO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':DESCRICAO_PRODUTO', $descricao);
    $sql-> execute();
}

if($produto && $apelido){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, APELIDO_PRODUTO = :APELIDO_PRODUTO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':APELIDO_PRODUTO', $apelido);
    $sql-> execute();
}

if($produto && $grupo){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, GRUPO_PRODUTO = :GRUPO_PRODUTO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':GRUPO_PRODUTO', $grupo);
    $sql-> execute();
}

if($produto && $subgrupo){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, SUBGRUPO_PRODUTO = :SUBGRUPO_PRODUTO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':SUBGRUPO_PRODUTO', $subgrupo);
    $sql-> execute();
}

if($produto && $situacao){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, SITUACAO = :SITUACAO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':SITUACAO', $situacao);
    $sql-> execute();
}

if($produto && $pesoliquido){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, PESO_LIQUIDO = :PESO_LIQUIDO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':PESO_LIQUIDO', $pesoliquido);
    $sql-> execute();
}

if($produto && $classificacaofiscal){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, CLASSIFICACAO_FISCAL = :CLASSIFICACAO_FISCAL WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':CLASSIFICACAO_FISCAL', $classificacaofiscal);
    $sql-> execute();
}

if($produto && $codigodebarras){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, CODIGO_BARRAS = :CODIGO_BARRAS WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':CODIGO_BARRAS', $codigodebarras);
    $sql-> execute();
}

if($produto && $colecao){
    $sql = $pdo->prepare("UPDATE PRODUTO SET PRODUTO = :PRODUTO, COLECAO = :COLECAO WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':COLECAO', $colecao);
    $sql-> execute();
    header("Location: index.php"); 
        exit;
}else {
header("Location: index.php");
}