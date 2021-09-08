<?php
include('db.php');
header('Content-Type:application/json');
    if (isset($_GET['email']) && isset($_GET['password']) && isset($_GET['token']) && isset($_GET['name'])) {
        $user_name = mysqli_real_escape_string($con, $_GET['name']);
        $user_email = mysqli_real_escape_string($con, $_GET['email']);
        $user_password = mysqli_real_escape_string($con, $_GET['password']);
        $user_token = mysqli_real_escape_string($con, $_GET['token']);
        $check_existing_email_res = mysqli_query($con, "select * from users where email='$user_email'");
        if (mysqli_num_rows($check_existing_email_res) == 0) {
            $type = mysqli_real_escape_string($con, 'seller');
            $block = mysqli_real_escape_string($con, 0);
            $status = mysqli_real_escape_string($con, 1);
            $package = mysqli_real_escape_string($con, 1);
            $confirm_password = mysqli_real_escape_string($con, $user_password);
            $password = password_hash($_GET['password'], PASSWORD_DEFAULT);
            $user_password = mysqli_real_escape_string($con, $password);
            if (mysqli_query($con, "insert into users (name, email, type, block, password, confirm_password, pakage, created_at, updated_at, status) values ('$user_name', '$user_email', '$type', '$block', '$user_password', '$confirm_password', '$package', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP(), '$status')")) {
                $check_newly_user_res = mysqli_query($con, "select * from users where email='$user_email'");
                if (mysqli_num_rows($check_newly_user_res) > 0) {
                    $check_newly_user_row = mysqli_fetch_assoc($check_newly_user_res);
                    $user_id = $check_newly_user_row['id'];
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
                            $code = '16';
                        } else {
                            $status = 'true';
                            $data = 'Sign up auth token update error';
                            $code = '15';
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
                            $code = '14';
                        } else {
                            $status = 'true';
                            $data = 'Sign up auth token insertion error';
                            $code = '13';
                        }
                    }
                }
            } else {
                $status = 'true';
                $data = 'Account creation error';
                $code = '12';
            }
        } else {
            $status = 'true';
            $data = 'Email already exists';
            $code = '11';
        }
    } else {
        $status = 'true';
        $data = 'Please provide name, email, password and token';
        $code = '10';
    }
    echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>