<?php

include("./connection.php");
$check = 2;
$pass = '';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//// sent mail
$mail = new PHPMailer(true);

if (isset($_POST['btn'])) {
	$email = $_POST['email'];
	//echo $email;
	$query = "SELECT * FROM `user` WHERE email='$email' limit 1;";
	$result = mysqli_query($conn, $query);
	$row_num = mysqli_num_rows($result);
	if ($row_num == 0) {
		$check = 0;
		//exit();
	} else {
		$check = 1;
		$res = mysqli_fetch_assoc($result);
		$pass = $res['pass'];
		$userName = $res['user_name'];


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
			$mail->Subject = "verification";
			$mail->Body = 'Your password is ' . $pass . ' and UserName is ' . $userName . '';
			$mail->send();
			header("Location:../index.php");
		} catch (Exception $e) {
			echo "Message could not be sent. Mail Error:{$mail->ErrorInfo}";
		}
	}


	//echo $pass;
}







//email ends


?>


<!DOCTYPE html>
<html>

<head>
	<style>


	</style>
	<title>Forgot Password</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel='stylesheet' type='text/css' href='../style.css'>
</head>

<body>
	<div class="wrapper">
		<div class="form-wrapper sign-in">
			<form action="#" method="post">
				<div class="">
					<?php if ($check == 0) { ?>
						<h5 style="font-size: 15px;color: red;">Your Email not Exist in our DataBase </h5>
					<?php } ?>
				</div>
				<h2>Find Pass</h2>
				<div class="input-group">
					<input type="email" id="email" name="email" required>
					<label for="">Enter Your Email</label>
				</div>

				<button type="submit" name="btn">Log In</button>

				<h5 style="font-size: 20px;color: green;padding: 17px 10px; font-family: none;">We send a Email in your Email Address</h5>

			</form>
		</div>
	</div>
	<script>

	</script>
	<script src="script.js"></script>
</body>

</html>