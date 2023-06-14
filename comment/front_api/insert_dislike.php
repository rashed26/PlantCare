<?php

include "./dbConnection.php";



$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);  // you given "true" then this data convert associative array, if not given then it convert php object



$comment_id = $mydata['comment_id'];
$p_dislike = $mydata['p_dislike'];


$query = "UPDATE `customer_review` SET dislike_num=$p_dislike WHERE id=$comment_id;";
mysqli_query($conn, $query);
echo "";
