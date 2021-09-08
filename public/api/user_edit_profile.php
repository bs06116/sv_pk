<?php
    include('db.php');
    header('Content-Type:application/json');
    if (isset($_GET['user_id']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['number'])) {
        $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
        $search_query = "update users set ";
        $name = mysqli_real_escape_string($con, $_GET['name']);
        $email = mysqli_real_escape_string($con, $_GET['email']);
        $number= mysqli_real_escape_string($con, $_GET['number']);
        if ($name != "") {
            $search_query .= " name='$name'";
        }
        if ($email != "" && $name=="") {
            $search_query .= " email='$email'";
        } else if ($email != "" && $name!=""){
            $search_query .= ", email='$email'";
        }
        if ($number != "" && $email == "" && $name=="") {
            $search_query .= " number='$number'";
        } else if ($number != "" && ($email != "" || $name!="")) {
            $search_query .= ", number='$number'";
        }
        $search_query .= " where id = '$user_id'";
        if (mysqli_query($con, $search_query)) {
            $user_data_res = mysqli_query($con, "select * from users where id='$user_id'");
            $user_data = [];
            while ($user_row = mysqli_fetch_assoc($user_data_res)) {
                $user_data[] = $user_row;
            }
            $status = 'true';
            $data = $user_data;
            $code = '25';
        } else {
            $status = 'true';
            $data = 'Profile update error';
            $code = '24';
        }
    } else {
        $status = 'true';
        $data = 'Please provide name, email and number and user id';
        $code = '23';
    }
    echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>
