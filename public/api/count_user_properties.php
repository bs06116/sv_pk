<?php
include('db.php');
header('Content-Type:application/json');
$user_id = mysqli_real_escape_string($con, $_GET['user_id']);
$total_res = mysqli_query($con, "select count(*) from sellers where user_id = '$user_id'");
$sale_res = mysqli_query($con, "select count(*) from sellers where type = 'sale' and user_id = '$user_id'");
$rent_res = mysqli_query($con, "select count(*) from sellers where type = 'rent' and user_id = '$user_id'");
$lease_res = mysqli_query($con, "select count(*) from sellers where type = 'lease' and user_id = '$user_id'");
if (mysqli_num_rows($total_res) > 0) {
    $total_row = mysqli_fetch_assoc($total_res);
    $sale_count = 0;
    $rent_count = 0;
    $lease_count = 0;
    $total_count = $total_row['count(*)'];
    if (mysqli_num_rows($sale_res) > 0) {
        $sale_row = mysqli_fetch_assoc($sale_res);
        $sale_count = $sale_row['count(*)'];
    }
    if (mysqli_num_rows($rent_res) > 0) {
        $rent_row = mysqli_fetch_assoc($rent_res);
        $rent_count = $rent_row['count(*)'];
    }
    if (mysqli_num_rows($lease_res) > 0) {
        $lease_row = mysqli_fetch_assoc($lease_res);
        $lease_count = $lease_row['count(*)'];
    }
    $status = 'true';
    $data = ["total" => $total_count, "sale" => $sale_count, "rent" => $rent_count, "lease" => $lease_count];
    $code = '22';
} else {
    $status = 'true';
    $data = 'No record in the table';
    $code = '21';
}
echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>
