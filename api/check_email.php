<?php
// check_email.php

// Assuming you have a database connection already established
include "dbConnection.php";
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Perform a database query to check if the email exists
    $query = "SELECT COUNT(*) FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_array($result);
        $count = $row[0];

        if ($count > 0) {
            // Email exists
            echo 'not available';
        } else {
            // Email is available
            echo 'available';
        }
    } else {
        // Error occurred while querying the database
        echo 'error';
    }
}
