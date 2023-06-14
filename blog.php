<?php

include "user_detected.php";


include "function.php";

$post_show_obj = new my_project();

$result1 = $post_show_obj->post_show();

$result2 = $post_show_obj->post_title_show();

$result3 = $post_show_obj->category_show();


//// pagination code

$num_per_page = 2;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $num_per_page;
$result_product = $post_show_obj->show_product_pagination($start_from, $num_per_page);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our News</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./CSS/news.css">
    <link rel="stylesheet" href="./Responsive_Css/news_responsive.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link rel='stylesheet' type='text/css' href='homepage.css'> -->

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

        .btn {
            display: inline-block;
            background: cadetblue;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            margin-top: 60px;
            border-radius: 30px;
            text-decoration: none;
            transition: font-size 0.5s;
        }

        .btn:hover {
            font-size: 18px;
            color: #e9e9e9;

        }
    </style>

</head>

<body>

    <!--Header Section-->



    <?php include_once "nav.php"; ?>




    <!--Banner Section-->



    <section>
        <div class="container-fluid banner">
            <div class="row">

                <div class="col-xl-12 col-md-12 col-sm-12  banner_left">

                    <h1 class="user-select-none">News</h1>

                    <p class="user-select-none">Home
                        <span>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                        </span class="user-select-none">
                        News
                    </p>

                </div>

            </div>
        </div>
    </section>


    <!--Back To Top Icon Section-->

    <section>
        <a class="back_to_top" href="#"><span><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></span></a>
    </section>





    <!--News Publicity-->

    <section>
        <div class="container Publicity">
            <div class="row " style="background: white;">
                <div class="col-xl-8 col-lg-8 Publicity_row">

                    <?php while ($row = mysqli_fetch_assoc($result_product)) { ?>

                        <div class="Publicity_inner">
                            <div class="Publicity_up">
                                <div class="publicity_img">
                                    <a href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>">
                                        <img class="img-thumbnail" src="./upload/<?php echo $row['image']; ?>" alt="">
                                    </a>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row['writer']; ?></span></a></li>
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span><?php echo $row['date']; ?></span></a></li>
                                    <li>
                                    <li><a href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>#comment"><i class="fa fa-comments" aria-hidden="true"></i><span>Comment</span></a></li>
                                    </li>
                                </ul>

                            </div>
                            <div class="Publicity_down">
                                <h3>
                                    <a href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>">
                                        <?php for ($i = 0; $i < min(strlen($row['title']), 120); $i++) echo $row['title'][$i]; ?>....
                                    </a>
                                </h3>
                                <p>
                                    <?php for ($i = 0; $i < min(strlen($row['description']), 300); $i++) echo $row['description'][$i]; ?>....
                                </p>
                                <a class="pub_a" href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>">Read More</a>
                            </div>
                        </div>

                    <?php } ?>

                </div>

                <div class="col-xl-4 col-lg-4 Publicity_row">
                    <div class="recent">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                            <button class="" type="hidden"><a href="#"><span><i class="fa fa-search" aria-hidden="true"></i></span></a></button>
                        </form>
                        <h3>RECENT POSTS</h3>
                        <ul>
                            <?php $j = 0;
                            while ($row = mysqli_fetch_assoc($result2)) {
                                $j++;
                                if ($j >= 7) break; ?>

                                <li>
                                    <a href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>">
                                        <?php for ($i = 0; $i < min(strlen($row['title']), 120); $i++) echo $row['title'][$i]; ?>...
                                    </a>
                                </li>

                            <?php } ?>

                        </ul>
                        <h3>CATEGORIES</h3>
                        <ul>
                            <?php $j = 0;
                            while ($row = mysqli_fetch_assoc($result3)) { ?>
                                <li>
                                    <a href="./category_news.php?status=category&&id=<?php echo $row['id']; ?>">
                                        <?php echo $row['category'];   ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <h3>Do you want write a Blog?</h3>

                        <div class="" style="margin-top: -68px;">
                            <a class="btn btn-primary" href="./add_new_post.php">Add Blog</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Pagination-->

    <?php
    $result_product = $post_show_obj->post_show();
    $total_records = mysqli_num_rows($result_product);
    $total_pages = ceil($total_records / $num_per_page);

    // echo $total_pages;
    // echo $total_records;


    ?>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-4 col-md-4 col pagi">
                    <ul class="pagination ">

                        <?php
                        if (isset($_GET['page'])) $current = $_GET['page'];
                        else $current = 1;

                        ?>

                        <?php if ($current > 1) { ?>

                            <li class="page-item ">
                                <a class="page-link" href="./blog.php?page=<?php echo $current - 1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>

                        <?php } ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>


                            <li class="page-item <?php if ($i == $current) echo 'active'; ?> "><a class="page-link" href="./blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>

                        <?php } ?>

                        <?php if ($current < $total_pages) { ?>
                            <li class="page-item">
                                <a class="page-link" href="./blog.php?page=<?php echo $current + 1; ?>" tabindex="-1" aria-disabled="true">Next</a>
                            </li>
                        <?php  } ?>


                    </ul>

                </div>
            </div>
        </div>
    </section>











    <!-- footer -->





    <!-- <section style="margin-top: 581px;">
   </section>-->




    <!--Java script-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>