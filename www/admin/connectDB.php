<?php
    $host = 'mysql-server';
    $user = 'root';
    $pass = 'root';
    $db = 'product_management';

    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die('khong the ket noi database: ' . $conn->connect_error);
    }
?>
