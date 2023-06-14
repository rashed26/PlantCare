<?php

include "./dbConnection.php";

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);  // you given "true" then this data convert associative array, if not given then it convert php object


$product_id = $mydata['product_id'];





$query = "SELECT * FROM customer_review WHERE product_id=$product_id order by id desc ;";

$result = mysqli_query($conn, $query);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

/// Return Json Fortmatted data
echo json_encode($data);
