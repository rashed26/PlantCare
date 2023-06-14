<?php
$sessionStatus = session_status();
if ($sessionStatus === PHP_SESSION_ACTIVE) {
    $pp = 1;
} else {
    session_start();
}

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
