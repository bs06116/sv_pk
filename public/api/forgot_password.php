<?php
include('db.php');
header('Content-Type:application/json');
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $random_featured_res = mysqli_query($con, "SELECT * FROM users where email = '$email'");
    if (mysqli_num_rows($random_featured_res) > 0) {
        $check_credentials_row = mysqli_fetch_assoc($random_featured_res);
        $status = 'true';
        $data = $check_credentials_row;
        $code = 24;
    } else {
        $status = 'true';
        $data = 'No user found';
        $code = '23';
    }

echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>