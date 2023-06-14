<?php
// Check if the form was submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 	// Retrieve the email from the form
// 	$email = $_POST["email"];

// 	// Check if the email is valid
// 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 		// If the email is invalid, display an error message
// 		$error = "Invalid email format";
// 	} else {
// 		// If the email is valid, generate a password reset token
// 		$token = bin2hex(random_bytes(32));

// 		// TODO: Send the password reset link to the user's email address

// 		// Display a success message
// 		$message = "Password reset link sent to $email";
// 	}
// }
include("./connection.php");
$check = "2";
$pass;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    // $query = "SELECT `email`, `password` FROM `user` WHERE `email`='$email'";
    // $result = mysqli_query($conn, $query);
    // $row_num = mysqli_num_rows($result);
    // if ($row_num == 0) {
    // 	$check = 1;
    // } else {
    // 	$check = 0;
    // 	$result = mysqli_fetch_assoc($result);
    // 	$pass = $result['password'];
    // }
}


// $sql="SELECT date, time FROM call_meeting WHERE id='$meeting_id'";
// $result = mysqli_query($db, $sql);
// $row = mysqli_fetch_assoc($result);
// $meeting_id = $row["id"];
//email starts
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);
    $pass = "121212";
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'arif.agamilabs@gmail.com';
        $mail->Password = "nlxu ycee puwr jjnn";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->setFrom($email);
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Your Shop";
        $mail->Body = '
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <title>Order Confirmation</title>
        <style>
            h4 {
                color: green;
                font-size: 22px;
            }
            h5 {
                font-size: 20px;
                color: darkred;
            }
            div {
                float: left;
                border: 1px solid #d8d1d1;
                width: 50%;
                margin-left: 20px;
                padding: 10px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div>
            <h4>Dear Customer,</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facere repellat sequi numquam, adipisci deserunt at eos ab dignissimos natus exercitationem sed molestias voluptatem labore eligendi, nemo tenetur esse quo neque, dolorum rem officiis modi est! Ullam corporis eveniet magni.</p>
            <h5>You may Received your order 2/3/2022  to  4/5/2020</h5>
        </div>
    </body>
</html>


        ';
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mail Error:{$mail->ErrorInfo}";
    }
}





//email ends


?>


<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .forgot-password-form {
            background-color: #fff;
            margin: 0 auto;
            padding: 20px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .forgot-password-form h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        .success {
            color: green;
            font-weight: bold;
        }
    </style>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="forgot-password-form">
        <h2>Forgot Password?</h2>
        <p>Enter your email below to receive a password reset link:</p>
        <form method="post" action="#">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" name="submit" value="Send Reset Link">
            <?php if (isset($error)) { ?>
                <p class="error"><?php echo $error; ?></p>
            <?php } ?>
            <?php if (isset($message)) { ?>
                <p class="success"><?php echo $message; ?></p>
            <?php } ?>
            <?php
            if ($check == 1) { ?>
                <p class="error"><?php echo "This Email Not Exists"; ?></p>
            <?php
            }
            if ($check == 0) { ?>
                <p class="success"><?php echo "We Sent a password to your email"; ?></p>
            <?php
            }

            ?>
        </form>
    </div>
</body>

</html>