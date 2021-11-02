<?php
    header('Access-Control-Allow-Origin: *');

    $host = 'mysql-server';
    $user = 'root';
    $pass = 'root';
    $db = 'product_management';

    try{
        $conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => false, 'data' => 'Unable to connect: ' . $ex->getMessage())));
    }
?>
