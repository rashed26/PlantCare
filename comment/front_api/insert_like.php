<?php

include "./dbConnection.php";



$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);  // you given "true" then this data convert associative array, if not given then it convert php object



$comment_id = $mydata['comment_id'];
$p_like = $mydata['p_like'];


$query = "UPDATE `customer_review` SET like_num=$p_like WHERE id=$comment_id;";
mysqli_query($conn, $query);
echo "";
