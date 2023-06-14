<?php

include "./dbConnection.php";



$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);  // you given "true" then this data convert associative array, if not given then it convert php object



$product_id = $mydata['product_id'];

date_default_timezone_set("Asia/Dubai");
$date = date("F d,Y");
$star = $mydata['star'];
$c_name = $mydata['name'];
$c_review = $mydata['comment'];
$c_email = $mydata['email'];

if (!empty($c_name) && !empty($c_review) && !empty($star)) {

    // $query = "SELECT * FROM `add_product` WHERE id=$product_id;";
    // $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);
    // $sale_count = $row['sale_count'];
    // $sale_count++;
    // $query = "UPDATE `add_product` SET `sale_count`=$sale_count WHERE id=$product_id;";
    // mysqli_query($conn, $query);

    $query = "INSERT INTO `customer_review`(`product_id`, `date`, `star`, `c_name`, `c_review`, `c_email`) VALUES ($product_id,'$date',$star,'$c_name','$c_review','$c_email');";

    if (mysqli_query($conn, $query)) {
        echo "Comment added Successfully";
    } else echo "Please add all required Fields";
} else echo "Please add all required Fields";
