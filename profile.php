<?php

include "user_detected.php";
include "function.php";
//include_once "admin_detected.php";

$user_show_obj = new my_project();
$sessionStatus = session_status();
if ($sessionStatus === PHP_SESSION_ACTIVE) {
    $pp = 1;
} else {
    session_start();
}

$user_name = $_SESSION['user_name'];
$pass = $_SESSION['pass'];
$id = $_SESSION['id'];
//echo $id;

$result = $user_show_obj->showUser($id);

$row = mysqli_fetch_assoc($result);

$result_post = $user_show_obj->post_show_user($id);

if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $prev_img = $_POST['prev_img'];
    $id = $_POST['id'];


    /// image processing

    $img_name = $_FILES['image']['name'];

    if ($img_name != '') {
        $img_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($img_tmp, "upload/" . $img_name);
    } else $img_name = $prev_img;



    $data = array(
        "name" => $name,
        "user_name" => $user_name,
        "email" => $email,
        "pass" => $pass,
        "phone" => $phone,
        "dob" => $dob,
        "image" => $img_name,
        "id" => $id
    );

    //print_r($data);

    $user_show_obj->editUser($data);
}






?>







<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel='stylesheet' type='text/css' href='profilepage.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./css/admin_post.css">
</head>

<body>
    <div class="menu_bar">
        <?php include_once "nav.php";  ?>


    </div>
    <div style="display: flex; flex-wrap: wrap; margin-left:100px; margin-right: 100px; margin-top: 70px; margin-bottom: 30px;">

        <div class="wrapper" style="width: 300px; height:auto; background-color: white; width: 50%; margin: 0 auto;">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="profilePic">
                    <p><img id="output" src="upload/<?php if (isset($row['image'])) echo $row['image']; ?>" class="profileImage" /></p>
                </div>
                <input type="hidden" name="prev_img" value="<?php if (isset($row['image'])) echo $row['image']; ?>">

                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" class="uploadButton"> EDIT PIC</label></p>

                <div class="input-group"><input type="Text" name="name" value="<?php if (isset($row['name'])) echo $row['name']; ?>" required>
                    <label for="">Full Name</label>
                </div>
                <div class="input-group"><input type="Text" name="user_name" value="<?php if (isset($row['user_name'])) echo $row['user_name']; ?>" required>
                    <label for="">User Name</label>
                </div>
                <div class="input-group"><input type="email" name="email" value="<?php if (isset($row['email'])) echo $row['email']; ?>" required>
                    <label for="">Email</label>
                </div>

                <div class="input-group"><input type="password" name="pass" value="<?php if (isset($row['pass'])) echo $row['pass']; ?>" required>
                    <label for=""> Password</label>
                </div>
                <div class="input-group"><input type="tel" name="phone" value="<?php if (isset($row['phone'])) echo $row['phone']; ?>" required>
                    <label for="">Phone Number</label>
                </div>
                <div class="input-group">

                    <input type="text" id="date" name="dob" value="<?php if (isset($row['dob'])) echo $row['dob']; ?>" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" value="" required>
                    <label for="">Date-of-birth </label>

                </div>

                <input type="hidden" name="id" value="<?php if (isset($row['id'])) echo $row['id']; ?>">



                <!-- <div class="input-group"><input type="file" name="image" required>
                <label for="">Upload Your Profile Picture</label>
            </div> -->

                <button class="okBtn" name="btn">Edit Profile</button>
                <!-- <button class="okBtn" style="margin-left: -50px;">CANCEL</button> -->
            </form>
        </div>



    </div>



    <section>
        <div class="container-fluid admin_post">
            <div class="row justify-content-center">
                <div class="col-xl-6 admin_post_up">
                    <h2 style="font-family: none;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 22px;
    font-weight: 600;
    font-size: 36px;">your post Information</h2>
                </div>
                <div class="col-xl-6 admin_post_up">
                    <a style="margin-top: 23px;" class="btn btn-outline-success" href="./add_new_post.php"><span>ADD POST</span></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 admin_post_down">
                    <table class="table table-hover table-striped table-responsive-sm">

                        <thead>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>CATEGORY</th>

                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>

                            <?php while ($row = mysqli_fetch_assoc($result_post)) {  ?>
                                <tr>
                                    <td><?php echo $row['id'];   ?></td>
                                    <td><?php echo $row['title'];   ?></td>
                                    <td><?php echo $row['description'];  ?></td>
                                    <td><?php

                                        $post_show_category_obj = new my_project();
                                        $result2 = $post_show_category_obj->post_unique_category_show($row['cate_name']);
                                        $row2 = mysqli_fetch_assoc($result2);

                                        echo $row2['category'];
                                        ?></td>

                                    <td>
                                        <a class="btn btn-success" href="./user_edit_post.php?status=edit&&id=<?php echo $row['id'];  ?>" role="button">EDIT</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="./post_delete.php?status=delete&&id=<?php echo $row['id'];  ?>" role="button">DELETE</a>
                                    </td>
                                </tr>

                            <?php  } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script> -->
</body>

</html>