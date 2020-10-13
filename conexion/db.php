<?php
try {

    $dsn = "mysql:host=localhost;dbname=test";
    $sql = new PDO($dsn, 'root', '');
    echo "conectados";
} catch (PDOException $e){
    echo $e->getMessage();
}
