<!--Bismillahir Rahmanir Rahim-->

<?php

include "user_detected.php";
include "function.php";
//include_once "admin_detected.php";

//post show ///
$post_edit_obj = new my_project();

if ($_GET['status'] == 'edit') {
    $result_post = $post_edit_obj->post_edit($_GET['id']);
    $post_row = mysqli_fetch_assoc($result_post);
}

//// Category Show  //////
$category_obj = new my_project();
$result = $category_obj->category_show();

/// Category End /////

$post_edit_change_obj = new my_project();

if (isset($_POST['btn'])) {

    $id = $_POST['id'];
    $writer = $_POST['writer'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $cate_name = $_POST['cate_name'];


    $img_name = $_FILES['image']['name'];
    $img_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($img_tmp, "upload/" . $img_name);

    if ($img_name == null) {
        $img_name = $_POST['img_before'];
    }

    $data = array(
        "id" => $id,
        "writer" => $writer,
        "date" => $date,
        "title" => $title,
        "description" => $description,
        "cate_name" => $cate_name,
        "img" => $img_name
    );

    $post_edit_change_obj->post_edit_change($data);
}










?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./css/admin_post.css">
    <link rel="stylesheet" href="./css/admin_add_post.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .menu_bar {
            background-color: cadetblue;
            height: 80px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;

        }

        .project_name {
            color: #e9e9e9;
        }

        .menu_bar nav ul {
            list-style: none;
            display: flex;
        }

        .menu_bar nav ul li {
            padding: 10px 30px;
        }

        .menu_bar nav ul li a {
            color: #e9e9e9;
            text-decoration: none;
            font-size: 20px;
            transition: all 0.3s;
        }

        .menu_bar nav ul li a:hover {
            color: black;
        }

        .add_post_row h2 {
            font-size: 40px;
            font-weight: 700;
            font-family: initial;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 30px;
            margin-top: 5px;
        }
    </style>

</head>

<body>


    <!--Header Section-->



    <?php include_once "nav.php" ?>




    <!--Admin Post Add-->

    <section>
        <div class="container add_post">
            <div class="row justify-content-center">
                <div class="col-xl-10 add_post_row">
                    <h2>EDIT POST</h2>
                    <form action="#" method="post" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">WRITER NAME</label>
                            <div class="col-sm-10">

                                <input type="text" name="writer" class="form-control" id="colFormLabel" value="<?php echo $post_row['writer']; ?>">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">TITLE</label>
                            <div class="col-sm-10">

                                <input type="text" name="title" class="form-control" id="colFormLabel" value="<?php echo $post_row['title']; ?>">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">DESCRIPTION</label>

                            <div class="col-sm-10">

                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"><?php echo $post_row['description']; ?></textarea>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">CATEGORY</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="cate_name" aria-label="Default select example">
                                    <option selected value="<?php echo $post_row['cate_name']; ?>">
                                        <?php

                                        $post_show_category_obj = new my_project();
                                        $result2 = $post_show_category_obj->post_unique_category_show($post_row['cate_name']);
                                        $row2 = mysqli_fetch_assoc($result2);

                                        echo $row2['category'];

                                        ?>
                                    </option>

                                    <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                                    <?php } ?>


                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">POST IMAGE</label>

                            <div class="col-sm-10">

                                <input name="image" class="form-control" type="file" id="formFile">

                                <input name="img_before" class="form-control" type="hidden" id="formFile" value="<?php echo $post_row['image']; ?>">

                                <input name="date" class="form-control" type="hidden" id="formFile" value="<?php echo $post_row['date']; ?>">

                                <input name="id" class="form-control" type="hidden" id="formFile" value="<?php echo $post_row['id']; ?>">

                            </div>
                        </div>

                        <input type="submit" value="   SAVE   " class="btn btn-success" name="btn" id="" style="margin:13px 46px 9px 192px;">


                    </form>

                </div>
            </div>
        </div>
    </section>




    <!--Java script-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>