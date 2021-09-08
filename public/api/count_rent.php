<?php
    include('db.php');
    header('Content-Type:application/json');
        $table_res = mysqli_query($con, "select count(*) from sellers where type = 'rent'");
        if (mysqli_num_rows($table_res) > 0) {
            $table_row = mysqli_fetch_assoc($table_res);
            $count = $table_row['count(*)'];
            $status = 'true';
            $data = $count;
            $code = '22';
        } else {
            $status = 'true';
            $data = 'No record in the table';
            $code = '21';
        }
    echo json_encode(["status"=> $status, "data"=>$data, "code"=>$code]);
?>
