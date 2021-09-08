<?php
    include('db.php');
    header('Content-Type:application/json');
    $random_featured_res = mysqli_query($con, "SELECT * FROM sellers where enable = 1 ORDER BY RAND() LIMIT 1");
    if (mysqli_num_rows($random_featured_res) > 0) {
        $main_arry = [];
        $featured_properties_array = [];

        while($featured_property_row = mysqli_fetch_array($random_featured_res, MYSQLI_NUM)) {
            $gallery_array = [];
            $featured_properties_array[] = $featured_property_row;
            $gallery_id = mysqli_real_escape_string($con, $featured_property_row[0]);
            $gallery_res = mysqli_query($con, "SELECT * FROM galleries where seller_id = '$gallery_id'");
            $user_id = mysqli_real_escape_string($con, $featured_property_row[17]);
            $user_res = mysqli_query($con, "SELECT * FROM users where id = '$user_id'");
            if (mysqli_num_rows($random_featured_res) > 0) {
                while ($gallery_row = mysqli_fetch_array($gallery_res, MYSQLI_NUM)) {
                    $gallery_array[] =  $gallery_row;

                }
                if (mysqli_num_rows($user_res) > 0) {
                    $user_row = mysqli_fetch_assoc($user_res);
                    $status = 'true';
                    $user = $user_row;
                    $code = 24;
                } else {
                    $status = 'true';
                    $user = 'No user found';
                    $code = '23';
                }
                $main_arry[] = ["featured" => $featured_property_row, "gallery" => $gallery_array, "user" => $user_row];
                $status = 'true';
            }
        }
    } else {
        $status = 'true';
        $data = 'No featured properties found';
        $code = '17';
    }
    echo json_encode(["status"=> $status, "data"=>$main_arry, "code"=>$code]);
?>