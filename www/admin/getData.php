<?php
    require("connectDB.php");

    $sql = "SELECT * from product";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
            echo json_encode($row);
            echo "<br>";
        }
    }
    else {
        echo "Bảng chưa có dữ liệu";
    }

    $data = array("first" => "1", "second" => "2");
?>