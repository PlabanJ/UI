<?php
    header("Access-Control-Allow-Origin: *");
    
    include "connect.php";
    $caption = $_POST[taskItem];

    $sql = "INSERT INTO task (caption, is_completed) VALUES ('$_POST[taskItem]', '0')";
    $result = mysqli_query($conn,$sql,true);

    $row = [];
    
    
    if($result){
        $id = mysqli_insert_id($conn);
        echo json_encode(array("id" => $id, "caption" => $caption, "is_completed" => '0'));
    }
    else{
        echo "Insertion failed!";
    }

    $conn->close();
    
?>