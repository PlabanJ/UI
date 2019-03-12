<?php
header("Access-Control-Allow-Origin: *");

include "connect.php";
$id = $_REQUEST[id];

$sql = "UPDATE task SET is_completed = '1' WHERE task.id = $id";
$result = mysqli_query($conn,$sql);

if($result){
    echo "done";
}
else{
    echo "err";
}
    
$conn->close();
?>