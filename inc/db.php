<?php

try {
    $dsn = 'mysql:host=localhost;dbname=registration';
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo 'error: ' . $e->getMessage();
    die();
}




?>