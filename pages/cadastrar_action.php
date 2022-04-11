<?php
require 'config.php';

$empresa = filter_input(INPUT_POST, 'EMPRESA');
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


    $sql = $pdo->prepare("SELECT * FROM PRODUTO WHERE EMPRESA = :EMPRESA");
    $sql-> bindValue(':EMPRESA', $empresa);
    $sql->bindValue(':PRODUTO', $produto);
    $sql-> bindValue(':DESCRICAO_PRODUTO', $descricao);
    $sql-> bindValue(':APELIDO_PRODUTO', $apelido);
    $sql-> bindValue(':GRUPO_PRODUTO', $grupo);
    $sql-> bindValue(':SUBGRUPO_PRODUTO', $subgrupo);
    $sql-> bindValue(':SITUACAO', $situacao);
    $sql-> bindValue(':PESO_LIQUIDO', $pesoliquido);
    $sql-> bindValue(':CLASSIFICACAO_FISCAL', $classificacaofiscal);
    $sql-> bindValue(':CODIGO_BARRAS', $codigodebarras);
    $sql-> bindValue(':COLECAO', $colecao);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO PRODUTO (EMPRESA, PRODUTO, DESCRICAO_PRODUTO, APELIDO_PRODUTO, GRUPO_PRODUTO, SUBGRUPO_PRODUTO, SITUACAO, PESO_LIQUIDO, CLASSIFICACAO_FISCAL, CODIGO_BARRAS, COLECAO) VALUES (:EMPRESA, :PRODUTO, :DESCRICAO_PRODUTO, :APELIDO_PRODUTO, :GRUPO_PRODUTO, :SUBGRUPO_PRODUTO, :SITUACAO, :PESO_LIQUIDO, :CLASSIFICACAO_FISCAL, :CODIGO_BARRAS, :COLECAO)");
        $sql-> bindValue(':EMPRESA', $empresa);
        $sql-> bindValue(':PRODUTO', $produto);
        $sql-> bindValue(':DESCRICAO_PRODUTO', $descricao);
        $sql-> bindValue(':APELIDO_PRODUTO', $apelido);
        $sql-> bindValue(':GRUPO_PRODUTO', $grupo);
        $sql-> bindValue(':SUBGRUPO_PRODUTO', $subgrupo);
        $sql-> bindValue(':SITUACAO', $situacao);
        $sql-> bindValue(':PESO_LIQUIDO', $pesoliquido);
        $sql-> bindValue(':CLASSIFICACAO_FISCAL', $classificacaofiscal);
        $sql-> bindValue(':CODIGO_BARRAS', $codigodebarras);
        $sql-> bindValue(':COLECAO', $colecao);
        $sql->execute();
        
        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastrar.php");
    }

