<?php
    require_once ("connectDB.php");

    $sql = "SELECT * from product";

    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }

    $data = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    echo json_encode($data);
?>