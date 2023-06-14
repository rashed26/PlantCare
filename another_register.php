<?php


include "function.php";
//include_once "admin_detected.php";

$register_add_obj = new my_project();

if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];


    /// image processing

    $img_name = $_FILES['image']['name'];
    $img_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($img_tmp, "upload/" . $img_name);


    $data = array(
        "name" => $name,
        "user_name" => $user_name,
        "email" => $email,
        "password" => $password,
        "phone" => $phone,
        "dob" => $dob,
        "image" => $img_name,
    );

    //print_r($data);

    $register_add_obj->addUser($data);
}
?>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel='stylesheet' type='text/css' href='style.css'>

</head>

<body>

    <div class="wrapper" style="height: 580px;">
        <div class="form-wrapper sign-up">
            <form action="#" method="post" enctype="multipart/form-data">
                <h2>Register</h2>
                <div class="input-group">
                    <input type="text" id="name" name="name" required>
                    <label for="">FullName</label>
                </div>
                <div class="input-group">
                    <div class="">
                        <span id="username-message" style="margin-left: 100px;font-size: 17px;color: orange;font-weight: 600;font-family: none;"></span>
                    </div>
                    <input type="text" id="user_name" name="user_name" required>
                    <label for="">Username</label>

                </div>


                <div class="input-group">
                    <div class="">
                        <span id="email-message" style="margin-left: 100px;font-size: 17px;color: orange;font-weight: 600;font-family: none;"></span>
                    </div>
                    <input type="email" id="email" name="email" required>
                    <label for="">Email</label>
                </div>

                <div class="input-group">
                    <input type="password" id="pass" name="password" required>
                    <label for="">Password</label>
                </div>

                <div class="input-group">
                    <div class="">
                        <span id="phone-message" style="margin-left: 100px;font-size: 17px;color: orange;font-weight: 600;font-family: none;"></span>
                    </div>
                    <input type="tel" id="phone" name="phone" required>
                    <label for="">Phone</label>
                </div>

                <div class="input-group">
                    <input type="date" id="date" name="dob" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required>
                    <label for="">Date of Birth</label>
                </div>

                <!-- <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div> -->

                <!-- <div class="profilePic">
                    <p><img id="output" src="images/humanIcon.jpeg" class="profileImage" /></p>
                </div>
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" class="uploadButton"> EDIT PIC</label></p> -->

                <div class="input-group"><input id="image_" type="file" name="image" style="opacity: 0;" required>
                    <label for="">Upload Your Profile Picture</label>
                </div>


                <button type="submit" name="btn">Register</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="index.html" class="signInBtn-link">Log In</a></p>

                </div>

            </form>
        </div>
    </div>

    <!-- ======================================================= -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/xzoom.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="script.js"></script>
    <script>
        $(document).ready(function() {


            $("#image_").click(function(e) {

                console.log("Button Clicked");
                $("#image_").css("opacity", "1");


            });

            /// finding url date







        });
    </script>

    <!-- Add the following code inside the <head> section of your HTML page -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#user_name').on('input', function() {
                var username = $(this).val();
                if (username === '') {
                    $('#username-message').text('');
                    return; // Exit the function
                }

                $.ajax({
                    url: './api/check_username.php',
                    type: 'POST',
                    data: {
                        username: username
                    },
                    success: function(response) {
                        if (response == 'available') {
                            // Username is available
                            $('#username-message').text('Username is available').removeClass('text-danger').addClass('text-success');
                        } else {
                            // Username is not available
                            $('#username-message').text('Username is not available').removeClass('text-success').addClass('text-danger');
                        }
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#email').on('input', function() {
                var email = $(this).val();

                // Check if the email is empty
                if (email === '') {
                    $('#email-message').text('');
                    return; // Exit the function
                }

                $.ajax({
                    url: './api/check_email.php',
                    type: 'POST',
                    data: {
                        email: email
                    },
                    success: function(response) {
                        if (response == 'available') {
                            // Email is available
                            $('#email-message').text('Email is available').removeClass('text-danger').addClass('text-success');
                        } else {
                            // Email is not available
                            $('#email-message').text('Email is not available').removeClass('text-success').addClass('text-danger');
                        }
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#phone').on('input', function() {
                var phoneNumber = $(this).val();

                // Check if the phone number is empty
                if (phoneNumber === '') {
                    $('#phone-message').text('');
                    return; // Exit the function
                }

                // Check if the phone number starts with 018, 019, 016, 013, or 015
                var validPrefixes = ['018', '019', '016', '013', '015'];
                var isValidPrefix = false;
                for (var i = 0; i < validPrefixes.length; i++) {
                    if (phoneNumber.startsWith(validPrefixes[i])) {
                        isValidPrefix = true;
                        break;
                    }
                }
                if (phoneNumber.length === 1) {
                    if (!phoneNumber.startsWith('0')) $('#phone-message').text('Phone number is not valid').removeClass('text-success').addClass('text-danger');
                    return;
                } else {
                    $('#phone-message').text('');
                }

                if (phoneNumber.length === 2) {
                    if (!phoneNumber.startsWith('01')) $('#phone-message').text('Phone number is not valid').removeClass('text-success').addClass('text-danger');
                    return;
                } else {
                    $('#phone-message').text('');
                }

                if (isValidPrefix && phoneNumber.length <= 3) {
                    // Phone number is valid
                    // $('#phone-message').text('Phone number is valid').removeClass('text-danger').addClass('text-success');
                    $('#phone-message').text('');
                } else if (phoneNumber.length > 3 && phoneNumber.length <= 11) {

                    $('#phone-message').text('');
                } else {
                    $('#phone-message').text('Phone number is not valid').removeClass('text-success').addClass('text-danger');
                }

                // Check if the phone number length is exactly 11
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#phone').on('blur', function() {
                var phoneNumber = $(this).val();

                // Check if the phone number is empty
                if (phoneNumber === '') {
                    $('#phone-message').text('');
                    return; // Exit the function
                }

                // Check if the phone number starts with 018, 019, 016, 013, or 015
                var validPrefixes = ['018', '019', '016', '013', '015'];
                var isValidPrefix = false;
                for (var i = 0; i < validPrefixes.length; i++) {
                    if (phoneNumber.startsWith(validPrefixes[i])) {
                        isValidPrefix = true;
                        break;
                    }
                }



                // Check if the phone number length is exactly 11
                var isValidLength = phoneNumber.length === 11;

                if (isValidPrefix && isValidLength) {
                    // Phone number is valid
                    $('#phone-message').text('Phone number is valid').removeClass('text-danger').addClass('text-success');
                } else {
                    // Phone number is not valid
                    $('#phone-message').text('Phone number is not valid').removeClass('text-success').addClass('text-danger');
                }
            });
        });
    </script>



</body>

</html>