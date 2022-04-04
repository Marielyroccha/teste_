<?php

$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=trovata', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query('SELECT produto FROM produto WHERE empresa = 1');

    foreach($data as $row) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>