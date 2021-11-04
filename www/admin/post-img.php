<?php
    $filename = $_FILES["file"]["name"];
    $location = "upload/" . $filename;
    $uploadOk = 1;
    $imgFileType = pathinfo($location, PATHINFO_EXTENSION);
    $valid_extensions = array("jpg", "jpeg", "png");

    if ( !in_array(strtolower($imgFileType), $valid_extensions) ) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo 0;
    }
    else {
        if ( move_uploaded_file($_FILES["file"]["tmp_name"], $location) ) {
            echo $location;
        }
        else {
            echo 0;
        }
    }
?>