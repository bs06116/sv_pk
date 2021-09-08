<?php
include('db.php');
header('Content-Type:application/json');
if (isset($_GET['city']) && isset($_GET['type']) && isset($_GET['purpose']) && isset($_GET['min_price']) && isset($_GET['max_price']) && isset($_GET['bedroom']) && isset($_GET['Bath'])) {
    $search_query = "SELECT * FROM sellers WHERE enable = 1";
    $city = mysqli_real_escape_string($con, $_GET['city']);
    $type = mysqli_real_escape_string($con, $_GET['type']);
    $purpose = mysqli_real_escape_string($con, $_GET['purpose']);
    $min_price= mysqli_real_escape_string($con, $_GET['min_price']);
    $max_price = mysqli_real_escape_string($con, $_GET['max_price']);
    $bedroom = mysqli_real_escape_string($con, $_GET['bedroom']);
    $Bath = mysqli_real_escape_string($con, $_GET['Bath']);
    if ($city != "") {
        $search_query .= " AND city like '%$city%'";
    }
    if ($type != "") {
        $search_query .= " AND type='$type'";
    }
    if ($purpose != "") {
        if ($_GET['purpose'] == "Land" ||$_GET['purpose'] == "Lands") {
            $search_query .= " AND (purpose='Commercial Plots' OR purpose='Residential Plots')";
        } else {
            $search_query .= " AND purpose='$purpose'";
        }
    }
    if ($min_price != "") {
        $search_query .= " AND price>='$min_price'";
    }
    if ($max_price != "") {
        $search_query .= " AND price<='$max_price'";
    }
        if ($bedroom != "") {
            if ($_GET['Bath'] == "5_") {
                $search_query .= " AND bedroom >= '5'";
            } else {
                $search_query .= " AND bedroom='$bedroom'";
            }
        }
        if ($Bath != "") {
            if ( $_GET['Bath'] == "5_") {
                $search_query .= " AND Bath>='5'";
            } else {
                $search_query .= " AND Bath='$Bath'";
            }
        }
//        $search_query = mysqli_real_escape_string($con, $search_query);
    $random_featured_res = mysqli_query($con, $search_query);
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
        $data = 'No properties found';
        $code = '19';
    }
} else {
    $status = 'true';
    $data = 'Provide complete filters';
    $code = '18';
}
echo json_encode(["status"=> $status, "data"=>$main_arry, "code"=>$code]);
?>