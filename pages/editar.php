<?php 
require 'config.php';

$produto = [];
$id = filter_input(INPUT_GET, 'PRODUTO');

if($id){
    $sql = $pdo-> prepare ("SELECT * FROM produto WHERE PRODUTO = :PRODUTO");
    $sql-> bindValue(':PRODUTO', $id);
    $sql-> execute();

    if($sql->rowCount() > 0){
        $produto = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
}

?>
<html>
    <head>
        <link href="css/geral.css" rel="stylesheet" />
    </head>
    <body style="background-color: #FC775A; justify-content: ce">
        <div style="display: flex; justify-content: center; color: #EBFEF5;">
            <h1>Editar Produto</h1>
        </div>
        <div style="display: flex; justify-content: center;">
        <div style="display: flex; justify-content: left; border: 2px solid black; border-radius: 8px; width: 27%; background-color: #FA8C62; padding-left: 100px;">

    <form method="POST" action="editar_action.php">
    <br>
    <input type="hidden" name="PRODUTO" value="<?=$produto['PRODUTO'];?>"/>
    <label>
    DESCRIÇÃO: <input type="text" name="DESCRICAO_PRODUTO" value="<?=$produto['DESCRICAO_PRODUTO'];?>"/>
    </label>
    <br><br>
    <label>
    APELIDO: <input type="text" name="APELIDO_PRODUTO" value="<?=$produto['APELIDO_PRODUTO'];?>"/>
    </label>
    <br><br>
    <label>
    GRUPO: <input type="text" name="GRUPO_PRODUTO" value="<?=$produto['GRUPO_PRODUTO'];?>"/>
    </label>
    <br><br>
    <label>
    SUBGRUPO: <input type="text" name="SUBGRUPO_PRODUTO" value="<?=$produto['SUBGRUPO_PRODUTO'];?>"/>
    </label>
    <br><br>
    <label>
    SITUAÇÃO: <input type="text" name="SITUACAO" value="<?=$produto['SITUACAO'];?>"/>
    </label>
    <br><br>
    <label>
    PESO LÍQUIDO: <input type="text" name="PESO_LIQUIDO" value="<?=$produto['PESO_LIQUIDO'];?>"/>
    </label>
    <br><br>
    <label>
    CLASSIFICAÇÃO FISCAL: <input type="text" name="CLASSIFICACAO_FISCAL" value="<?=$produto['CLASSIFICACAO_FISCAL'];?>"/>
    </label>
    <br><br>
    <label>
    CÓDIGO DE BARRAS: <input type="text" name="CODIGO_BARRAS" value="<?=$produto['CODIGO_BARRAS'];?>"/>
    </label>
    <br><br>
    <label>
    COLEÇÃO: <input type="text" name="COLECAO" value="<?=$produto['COLECAO'];?>"/>
    </label>
    <br><br>
    

    <div style="display:flex; justify-content: center;">
       <input class="btn" type="submit" onclick="funcao1()" value="Atualizar" style="cursor: pointer;"/>
    </div>
</form>

    <script>
      function funcao1()
      {
      alert("Produto editado com sucesso!");
      }
    </script>