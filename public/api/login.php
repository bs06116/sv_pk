<?php
    include('db.php');
    header('Content-Type:application/json');
    if (isset($_GET['email']) && isset($_GET['password'])) {
        $user_email = mysqli_real_escape_string($con, $_GET['email']);
        $user_password = mysqli_real_escape_string($con, $_GET['password']);
        $user_token = mysqli_real_escape_string($con, $_GET['token']);
        $check_credentials_res = mysqli_query($con, "select * from users where email='$user_email' and confirm_password='$user_password'");
        if (mysqli_num_rows($check_credentials_res) > 0) {
            $check_credentials_row = mysqli_fetch_assoc($check_credentials_res);
            $admin = mysqli_real_escape_string($con, "admin");
            if ($check_credentials_row['type'] != $admin) {
                if ($check_credentials_row['status'] == 1) {
                    if ($check_credentials_row['block'] == 0) {
                        if (isset($_GET['token'])) {
                            $user_id = $check_credentials_row['id'];
                            $check_token_res = mysqli_query($con, "select * from app_token where user_id='$user_id'");
                            if (mysqli_num_rows($check_token_res) > 0) {
                                $check_token_row = mysqli_fetch_assoc($check_token_res);
                                if (mysqli_query($con, "update app_token set token='$user_token' where user_id='$user_id'")) {
                                    $token_data_res = mysqli_query($con, "select * from app_token where user_id='$user_id'");
                                    $user_data_res = mysqli_query($con, "select * from users where email='$user_email' and confirm_password='$user_password'");
                                    $user_data = [];
                                    while ($user_row = mysqli_fetch_assoc($user_data_res)) {
                                        $user_data[] = $user_row;
                                    }
                                    $user_data[] = $user_token;
                                    $status = 'true';
                                    $data = $user_data;
                                    $code = '9';
                                } else {
                                    $status = 'true';
                                    $data = 'Data update error';
                                    $code = '8';
                                }
                            } else {
                                if (mysqli_query($con, "insert into app_token (user_id, token) values ('$user_id', '$user_token')")) {
                                    $token_data_res = mysqli_query($con, "select * from app_token where user_id='$user_id'");
                                    $user_data_res = mysqli_query($con, "select * from users where email='$user_email' and confirm_password='$user_password'");
                                    $user_data = [];
                                    while ($user_row = mysqli_fetch_assoc($user_data_res)) {
                                        $user_data[] = $user_row;
                                    }
                                    $user_data[] = $user_token;
                                    $status = 'true';
                                    $data = $user_data;
                                    $code = '7';
                                } else {
                                    $status = 'true';
                                    $data = 'Data insertion error';
                                    $code = '6';
                                }
                            }
                        } else {
                            $status = 'true';
                            $data = 'Please provide token';
                            $code = '5';
                        }
                    } else {
                        $status = 'true';
                        $data = 'Account is blocked';
                        $code = '4';
                    }

                } else {
                    $status = 'true';
                    $data = 'Account status is false';
                    $code = '3';
                }
            } else {
                $status = 'true';
                $data = 'Account belongs to admin';
                $code = '17';
            }
        } else {
            $status = 'true';
            $data = 'Invalid credentials';
            $code = '2';
        }
    } else {
        $status = 'true';
        $data = 'Please provide email and password';
        $code = '1';
    }
    echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>