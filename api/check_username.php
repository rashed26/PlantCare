<?php
// check_username.php

// Assuming you have a database connection already established
include "dbConnection.php";
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Perform a database query to check if the username exists
    $query = "SELECT COUNT(*) FROM user WHERE user_name = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_array($result);
        $count = $row[0];

        if ($count > 0) {
            // Username exists
            echo 'not available';
        } else {
            // Username is available
            echo 'available';
        }
    } else {
        // Error occurred while querying the database
        echo 'error';
    }
}
