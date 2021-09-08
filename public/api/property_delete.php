<?php
include('db.php');
header('Content-Type:application/json');
$property_id = mysqli_real_escape_string($con, $_GET['property_id']);
if (mysqli_query($con, "delete from sellers where id = '$property_id'")) {
    $status = 'true';
    $data = 'done';
    $code = '34';
} else {
    $status = 'true';
    $data = 'Property delete error';
    $code = '33';
}

echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>