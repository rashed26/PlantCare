<?php
$sessionStatus = session_status();
if ($sessionStatus === PHP_SESSION_ACTIVE) {
} else {
    session_start();
}

if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
    header("Location:./home.php");
}

?>


<?php

include "function.php";
//include_once "admin_detected.php";

$login_add_obj = new my_project();
$checkUser = -1;

if (isset($_POST['btn'])) {


    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];



    $data = array(

        "user_name" => $user_name,
        "pass" => $pass,

    );

    //print_r($data);

    $res = $login_add_obj->checkUser($data);
    $checkUser = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    if (isset($row['id'])) {
        $id = $row['id'];
    }

    if ($checkUser == 1) {
        session_start();
        $_SESSION['user_name'] = $user_name;
        $_SESSION['pass'] = $pass;
        $_SESSION['id'] = $id;
        header("Location:./home.php");
    }
}
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="index.php" method="post">
                <div class="">
                    <?php if ($checkUser == 0) { ?>
                        <h5 style="font-size: 20px;color: red;">Wrong user or password</h5>
                    <?php } ?>
                </div>
                <h2>Log In</h2>
                <div class="input-group">
                    <input type="text" id="userName" name="user_name" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="pass" required>
                    <label for="">Password</label>
                </div>
                <!-- <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                </div> -->

                <button type="submit" name="btn">Log In</button>
                <div class="signUp-link">
                    <p>Don't have an account? <a style="color: blue;" href="register.php" class="signUpBtn-link">Register</a></p>
                </div>
                <div class="signUp-link">
                    <p style="color: blue;">Forgot Your Password? <a style="color: green;text-decoration: underline;" href="./email/forgot_password.php">TurnIn</a></p>
                </div>
                <div class="social-platform">
                    <p>Or sign in with</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>

    </script>
    <script src="script.js"></script>
</body>

</html>