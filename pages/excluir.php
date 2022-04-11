<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'PRODUTO');

if($id){
    $sql = $pdo->prepare("DELETE FROM PRODUTO WHERE PRODUTO = :PRODUTO");
    $sql->bindValue(':PRODUTO', $id);
    $sql->execute();
}

header("Location: index.php");

?>


