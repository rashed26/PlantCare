<?php
include "function.php";

$post_show_obj = new my_project();

$result1 = $post_show_obj->post_show();





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link rel='stylesheet' type='text/css' href='homepage.css'> -->

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">



    <style>
        .Committee_top {
            text-align: center;
            margin-top: 70px;
        }

        .Committee_top span {
            color: red;
            font-weight: 700;
            letter-spacing: 5px;
            text-transform: uppercase;
        }

        .Committee_top h2 {

            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 40px;
            font-weight: 600;
            font-family: initial;
            letter-spacing: 4px;
        }

        .Committee_top p {
            color: red;
            font-size: 17px;
        }

        .committee {
            margin-top: 45px;
            border-top: 1px solid #f1eded;
            padding-top: 61px;
            background-color: white !important;
        }

        .committee_upper {
            padding: 18px;
            margin-bottom: 50px;
        }

        .news {
            margin-top: 40px;
            margin-bottom: 70px;
        }

        .news_col {
            padding: 0px 10px;
        }

        .news_col_inner {
            padding: 25px 20px;
            box-shadow: 0px 0px 60px 0px #e9e9e9;
        }

        .row {}

        .news_inner {
            position: relative;
        }

        .news_inner a {}

        .news_inner::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: blue;
            opacity: 0;
            transition: 0.4s;
        }

        .news_inner:hover:before {
            opacity: 0.08;
        }

        .news_inner a img {
            width: 100%;
        }

        .news_bottom {
            visibility: visible;
            height: auto;
            text-align: center;
            transition: 0.4s linear;
        }

        .news_inner:hover .news_bottom {
            height: 0;
            transform: translateY(-230px);
            visibility: visible;
        }

        .news_bottom p {
            font-size: 17px;
            margin-top: 10px;
            font-family: "NSimSun", Times, serif;
            font-weight: 600;
        }

        .news_bottom h4 {
            font-size: 17px;
            margin-bottom: 12px;
            text-align: center;
        }

        .news_bottom h4 a {
            text-decoration: none;
            color: darkolivegreen;
            letter-spacing: 1px;
            font-size: 20px;
            font-family: "Constantia", Times, serif;
        }

        .news_bottom h4 a:hover {
            color: red;
        }

        .news_bottom_a:hover {
            color: red;
        }

        .news_bottom_a {
            font-family: "Constantia", Times, serif;
            color: black;
            font-weight: 600;
            letter-spacing: 2px;
            text-decoration: none;
        }
    </style>

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

        .row_ {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding-left: 50px;
            justify-content: space-around;
            background: radial-gradient(#4f994f, rgb(122, 109, 121));
            height: 450px;
        }

        .col-2 {
            flex-basis: 50%;
            min-width: 300px;
            padding-left: 50px;
            margin-top: -90px;
        }

        .col-3 img {
            width: 400px;
            padding: 50px 0;
            margin-left: 100px;
            transition: ease all 1s;
            height: 400px;
            /* border-top-left-radius: 50%; */
        }

        .col-3 img:hover {
            transform: scale(1.1);
        }

        .col-2 h1 {
            margin-top: 100px;
            font-weight: bold;
        }

        .col-2 p {
            margin-top: 20px;
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

        .All-catagories {
            margin-top: 50px;
            text-align: center;
            margin-bottom: 50px;
            font-weight: bold;
            font-size: 30px;
            text-decoration-line: underline;
        }

        .wrapper {
            position: relative;
            width: 200px;
            height: 500px;
            background: rgba(255, 255, 255, 2);
            border-radius: 20px;
            box-shadow: 0 0 100px rgba(0, 0, 0, .1);
            padding: 30px;
        }

        .card-image {
            display: block;
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: ease all .5s;
        }

        .card-image:hover {
            transform: scale(1.15);
        }

        .card-btn {
            display: block;
            margin-top: 20px;
            width: 50%;
            padding: 10px;
            font-weight: bold;
            font-size: 12px;
            text-align: center;
            background: cadetblue;
            border-radius: 30px;
            text-decoration: none;
            transition: font-size .5s;
        }

        .card-btn:hover {
            font-size: 13px;
            color: #e9e9e9;
        }

        .wrapper-last {

            width: 200px;
            height: 500px;
            background: rgba(255, 255, 255, 2);
            border-radius: 20px;
            box-shadow: 0 0 100px rgba(0, 0, 0, .1);
            padding: 30px;
        }

        .footer-social {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;

        }

        .footer-social li {
            margin: 0 10px;
        }

        .footer-social a {
            text-decoration: none;
            color: #fff;

        }

        .footer-social a i {
            font-size: 1.1rem;
            transition: color .4s ease;
        }

        .footer-social a i:hover {
            color: aqua;
        }
    </style>

    <style>
        /* -------banner section-----*/


        .banner {
            /* background: url(./banner/back-55.avif) no-repeat center center; */
            position: relative;
            height: 719px;
            width: 100%;
            left: 0;
            bottom: 0;
            background-size: cover;
            background-attachment: scroll;
            transform: translate3d(0px, 0px, 0px);
            transition: all 0ms ease 0s;
            margin-bottom: 160px;
            background: radial-gradient(#4f994f, rgb(122, 109, 121));
        }

        .banner::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: white;
            opacity: 0.05678;
        }

        .banner_left {
            z-index: 99;
        }

        .banner_left ul {
            list-style: none;
            margin-top: 286px;
        }

        .banner_left ul li {
            padding-bottom: 40px;
        }

        .banner_left ul li span {}

        .banner_left ul li span a {
            color: black;
            font-size: 20px;
            background: white;
            padding: 7px;
            border: 1px solid black;
            border-radius: 30%;
            transition: 0.4s;
        }

        .banner_left ul li span a:hover {
            background: red;
            color: white;
        }

        .banner_right {
            position: absolute;
            left: 121px;
            top: 100px;
            z-index: 99;
        }

        .banner_right_top {
            margin-bottom: 20px;
            width: 100%;
        }

        .banner_right_top h2 {
            font-size: 75px;
            color: white;
            font-weight: 700;
            font-family: 'Jost', sans-serif;
        }

        .banner_right_top h2 span {
            color: coral;
        }

        .banner_right_bottom {}

        .banner_right_bottom p {
            color: white;
            font-size: 18px;
            font-family: 'Jost', sans-serif;
            font-weight: 700;
        }

        /*----------- Button-------------*/

        .button {
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-left: -22px;
        }

        .button a {
            position: relative;
            width: 198px;
            height: 60px;
            font-size: 13px;
            font-weight: 700;
            display: inline-block;
            background: #fff;
            margin: 20px;
            font-size: 13px;
            font-weight: 700;
            display: inline-block;
            background: #fff;
            margin: 20px;
        }

        .button ::before,
        .button ::after {
            content: "";
            position: absolute;
            inset: 0;
            font-size: 15px;
            background: #f00;
            transition: 0.4s;
            visibility: hidden;
        }

        .button a:nth-child(1)::before,
        .button a:nth-child(1)::after {
            background: linear-gradient(45deg, #00ccff, #0e1538, #d400d4);
        }

        .button a:nth-child(2)::before,
        .button a:nth-child(2)::after {
            background: linear-gradient(45deg, #00ccff, #0e1538, #d400d4);
        }

        .button a:hover::before {
            inset: -3px;
            visibility: visible;
        }

        .button a:hover::after {
            inset: -3px;
            filter: blur(10px);
            visibility: visible;
        }

        .button a span {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 20px;
            width: 100%;
            display: inline-block;
            background: #0e1538;
            z-index: 10;
            display: flex;

            justify-content: center;
            font-size: 1.2em;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            border: 1px solid #040a29;
            overflow: hidden;
            background: linear-gradient(27deg, #8e0505, transparent);
        }

        .button a span {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 18px 10px;
            width: 100%;
            display: inline-block;
            background: #0e1538;
            z-index: 10;
            display: flex;
            justify-content: center;
            font-size: 1.2em;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            border: 1px solid #040a29;
            overflow: hidden;
            background: linear-gradient(27deg, #8e0505, transparent);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .button a {
            position: relative;
            width: 198px;
            height: 60px;
            font-size: 13px;
            font-weight: 700;
            display: inline-block;
            background: #fff;
            margin: 20px;
        }

        .button a span::before {
            content: "";
            position: absolute;
            left: -50%;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.075);
            transform: skew(25deg);
        }
    </style>

</head>

<body>


    <!-- <div class="row_">
        <div class="col-2">
            <h1>Give your hardwork<br> Your newstyle!</h1>
            <p>Success isn't always about greatness. It's about consistency. Consistent<br> hard work. Greateness will come. </p>
            <a href="Test.php" class="btn">Explore Now<span>&rarr;</span></a>
        </div>
        <div class="col-3">
            <img src="img/early-blight-potatoes.webp">
        </div>

    </div> -->

    <?php include_once "nav.php";  ?>
    <div class="container-fluid">
    </div>



    <section>
        <div class="container-fluid banner">
            <div class="row">
                <div class="col-xl-4  banner_left">
                    <ul>
                        <li><span><a href="#"><i class="fab fa-facebook"></i></a></span></li>
                        <li><span><a href="#"><i class="fab fa-instagram"></i></a></span></li>
                        <li><span><a href="#"><i class="fab fa-twitter"></i></a></span></li>
                        <li><span><a href="#"><i class="fab fa-linkedin"></i></a></span></li>
                    </ul>
                </div>
                <div class="col-xl-6 banner_right">

                    <div class="banner_right_bottom">
                        <p>NEW ARRAIVALS</p>
                    </div>

                    <div class="banner_right_top">
                        <h2>
                            <span>Best Price</span>
                            This Year
                        </h2>
                    </div>
                    <div class="banner_right_bottom">
                        <p>Bringing you the world famous curtains at affordable prices.</p>
                    </div>
                    <div class="button banner_right_bottom">
                        <a href="Test.php">
                            <span>Explore Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 Committee_top">

                    <span>#BLOG
                    </span>

                    <h2>Popular News</h2>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container news d-flex">
            <div class="row justify-content-center">

                <?php $j = 0;
                while ($row = mysqli_fetch_assoc($result1)) {
                    $j++;
                    if ($j >= 4) break; ?>

                    <div class="col-xl-4 col-lg-4 col-md-6 news_col">

                        <div class="news_col_inner">
                            <div class="news_inner">
                                <a href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>"><img src="upload/<?php echo $row['image']; ?>" alt=""></a>
                            </div>
                            <div class="news_bottom">
                                <p><?php echo $row['date']; ?></p>
                                <h4>
                                    <a href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>">
                                        <?php for ($i = 0; $i < min(strlen($row['title']), 80); $i++) echo $row['title'][$i]; ?>
                                    </a>
                                </h4>
                                <a class="news_bottom_a" href="./news_uniq.php?status=unique&&id=<?php echo $row['id'];   ?>">Read More</a>
                            </div>
                        </div>

                    </div>

                <?php } ?>


            </div>
        </div>
    </section>


    <?php include "footer.php";  ?>
</body>

</html>