<?php
    include('db.php');
    header('Content-Type:application/json');
    if (isset($_GET['user_id']) && isset($_GET['password'])) {
        $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
        $confirm_password = mysqli_real_escape_string($con, $_GET['password']);
        $password = password_hash($_GET['password'], PASSWORD_DEFAULT);
        $user_password = mysqli_real_escape_string($con, $password);
        $search_query = "update users set password = '$password', confirm_password = '$confirm_password' where id = '$user_id'";
        if (mysqli_query($con, $search_query)) {
            $user_data_res = mysqli_query($con, "select * from users where id='$user_id'");
            $user_data = [];
            while ($user_row = mysqli_fetch_assoc($user_data_res)) {
                $user_data[] = $user_row;
            }
            $status = 'true';
            $data = $user_data;
            $code = '28';
        } else {
            $status = 'true';
            $data = 'Password update error';
            $code = '27';
        }
    } else {
        $status = 'true';
        $data = 'Please provide password and user id';
        $code = '26';
    }
    echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>
