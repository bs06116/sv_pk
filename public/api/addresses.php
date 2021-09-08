<?php
    include('db.php');
    header('Content-Type:application/json');
    $city_res = mysqli_query($con, "SELECT DISTINCT(country) FROM `country_state_city`");
    $main_array = [];
    $city_arry = [];
    if (mysqli_num_rows($city_res) > 0) {
        while($city_row = mysqli_fetch_array($city_res, MYSQLI_NUM)) {
            array_push($city_arry, $city_row[0]);
            $address_array = [];
            $address_res = mysqli_query($con, "SELECT address FROM `country_state_city` where country = '$city_row[0]'");
            while($address_row = mysqli_fetch_array($address_res, MYSQLI_NUM)) {
                array_push($address_array, $address_row[0]);
            }
            $main_array[] = ["city" => $city_row[0], "address" => $address_array];
        }
        $status = 'true';
        $code = '36';
    } else {
        $status = 'true';
        $data = 'Addresses not found';
        $code = '35';
    }
    echo json_encode(["status"=> $status, "data"=>$main_array, "code"=>$code]);
?>