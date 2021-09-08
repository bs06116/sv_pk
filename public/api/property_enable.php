<?php
include('db.php');
header('Content-Type:application/json');
$property_id = mysqli_real_escape_string($con, $_GET['property_id']);
$enable = mysqli_real_escape_string($con, $_GET['enable']);
if (mysqli_query($con, "update sellers set enable = '$enable' where id = '$property_id'")) {
    $status = 'true';
    $data = 'done';
    $code = '32';
} else {
    $status = 'true';
    $data = 'Property enable error';
    $code = '31';
}

echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>