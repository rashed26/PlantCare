<?php
include "user_detected.php";
include "function.php";
//include_once "admin_detected.php";
$post_del = new my_project();

if ($_GET['status'] == 'delete') {


    //echo $_GET['id'];

    $post_del->post_delete($_GET['id']);
}
