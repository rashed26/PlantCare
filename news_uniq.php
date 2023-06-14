<?php

include "user_detected.php";
include "function.php";

$post_unique_show_obj = new my_project();

$post_unique_comment_show = new my_project();

$sessionStatus = session_status();
if ($sessionStatus === PHP_SESSION_ACTIVE) {
    $pp = 1;
} else {
    session_start();
}
$checkedValidAdmin = 0;
if (isset($_SESSION['admin'])) {
    $checkedValidAdmin = 1;
}



if ($_GET['status'] == "unique") {

    $result = $post_unique_show_obj->post_unique_show($_GET['id']);
    $row = mysqli_fetch_assoc($result);

    $result_comment = $post_unique_show_obj->post_unique_comment_show($row['id']);
}


$comment_add_obj = new my_project();

if (isset($_POST['btn'])) {

    $nid = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $date = date("F d,Y");
    date_default_timezone_set("Asia/Dhaka");
    $time = date("h:i,A");


    $data = array(
        "nid" => $nid,
        "name" => $name,
        "email" => $email,
        "comment" => $comment,
        "date" => $date,
        "time" => $time
    );

    if ($comment != null) {
        $comment_add_obj->comment_add($data);
    } else {
        header("Location:./news_uniq.php?status=unique&&id=$nid#your_comment");
    }
}


/// for reply

if (isset($_POST['reply_btn'])) {
    // echo $_POST['comment_reply'];
    if ($_POST['comment_reply'] != "")
        $post_unique_show_obj->addReply($_POST['comment_reply'], $_POST['comment_id'], $_POST['news_id']);
    //echo $resss;
}


$post_show_obj = new my_project();

$result2 = $comment_add_obj->post_title_show();

$result3 = $comment_add_obj->category_show();


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title'];  ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="./CSS/news.css">
    <link rel="stylesheet" href="./Responsive_Css/news_responsive.css">
    <link rel="stylesheet" href="./CSS/news_uniq.css">
    <link rel="stylesheet" href="./Responsive_Css/news_uniq_responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link rel='stylesheet' type='text/css' href='homepage.css'> -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

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

    <style>
        .comment_show_right span {
            font-family: "Constantia", Times, serif;
            color: orange;
        }

        .like_dislike {
            position: absolute;
            right: 25px;
            bottom: 10px;
        }

        @keyframes likeeee {
            from {
                transform: rotate(30deg);
                font-size: 25px;
            }

            to {
                transform: rotate(-40deg);
                font-size: 25px;
            }
        }

        .likeAni {
            animation-name: likeeee;
            animation-duration: 1s;
        }

        @keyframes dislikeeee {
            from {
                transform: rotate(-40deg);
                font-size: 25px;

            }

            to {
                transform: rotate(30deg);
                font-size: 25px;
            }
        }

        .dislikeAni {
            animation-name: dislikeeee;
            animation-duration: 1s;
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
                        <span>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                        </span class="user-select-none">
                        <?php for ($i = 0; $i < min(strlen($row['title']), 70); $i++) echo $row['title'][$i]; ?>....
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
            <div class="row justify-content-between" style="background: none !important; align-items: normal;">
                <div class="col-xl-8 col-lg-8 Publicity_row">


                    <div class="Publicity_inner">
                        <div class="Publicity_up">
                            <div class="publicity_img">
                                <img class="img-thumbnail" src="./upload/<?php echo $row['image']; ?>" alt="">
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row['writer']; ?></span></a></li>
                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span><?php echo $row['date']; ?></span></a></li>
                                <li>
                                <li><a href="#comment"><i class="fa fa-comments" aria-hidden="true"></i><span>Comment</span></a></li>
                                </li>
                            </ul>

                        </div>
                        <div class="Publicity_down">
                            <h3>
                                <a href="#"><?php echo $row['title']; ?></a>
                            </h3>
                            <p>
                                <?php echo $row['description']; ?>
                            </p>
                        </div>
                    </div>



                </div>

                <div class="col-xl-4 col-lg-4 Publicity_row">
                    <div class="recent">
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                            <button class="" type="submit"><a href="#"><span><i class="fa fa-search" aria-hidden="true"></i></span></a></button>
                        </form> -->
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
                        <!-- <h3>META</h3> -->
                        <!-- <ul>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Log In</a></li>
                        </ul> -->
                    </div>
                </div>

                <h3 style="font-family: none;color:black;font-family: none;color: black;font-weight: 600;margin-bottom: 31px;">Customer's Review</h3>
                <div class="col-xl-8 col-lg-8 Publicity_row" id="all_comment"></div>


                <div class="col-xl-4 col-lg-4 Publicity_row">
                    <div class="recent">

                        <h3>Review</h3>
                        <div class="user_comment">

                            <h2>Write Review</h2>

                            <form method="post">
                                <div class="form-group user_comment_name" id="comment">
                                    <input type="text" name="c_name" class="form-control" id="Last_Name" placeholder="Your Name">
                                </div>

                                <div class="form-group user_comment_email">
                                    <input type="email" name="c_email" class="form-control" id="Email" placeholder="Your Email">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <select class="form-select" id="star" name="star" aria-label="Default select example">
                                            <option disabled selected>Give Star</option>

                                            <option value="1">One Star</option>


                                            <option value="2">Two Star</option>


                                            <option value="3">Three Star</option>


                                            <option value="4">Four Star</option>

                                            <option value="5">Five Star</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group user_comment_msg">
                                    <textarea name="c_review" placeholder="Write Your Review" class="form-control" id="Your_Message" rows="5"></textarea>
                                </div>

                                <input type="hidden" name="product_id" id="product_id" value="<?php echo $_GET['id']; ?>">


                                <div class="form-group user_comment_button">
                                    <button name="btn2" id="btn2"><span>Submit Comment</span></button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>















    <!--Footer Section-->







    <!-- <section style="margin-top: 581px;">
   </section>-->





    <!--Java script-->

    <!-- jquery -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- others -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    <script>
        $(document).ready(function() {


            $("#btn2").click(function(e) {
                e.preventDefault();

                console.log("Button Clicked");

                let name = $("#Last_Name").val();
                let email = $("#Email").val();
                let star = $("#star").val();
                let comment = $('#Your_Message').val();
                let product_id = $('#product_id').val();

                $("#Last_Name").val("Your Name");
                $("#Email").val("Your Email");
                $("#star").val("Give Star");
                $('#Your_Message').val("Write Review");



                mydata = {
                    name: name,
                    email: email,
                    star: star,
                    comment: comment,
                    product_id: product_id
                }; // Create object

                //console.log(mydata);


                // Ajax code //

                $.ajax({
                    url: "./comment/front_api/insert.php",
                    method: "POST",
                    data: JSON.stringify(mydata),
                    success: function(data) {
                        findAllComment();


                        //console.log("dgrrkmf nekrml,");
                        //toastr.success(data);

                    }
                });






            });

            /// finding url date
            function GetURLParameter(sParam) {
                var sPageURL = window.location.search.substring(1);
                var sURLVariables = sPageURL.split('&');
                for (var i = 0; i < sURLVariables.length; i++) {
                    var sParameterName = sURLVariables[i].split('=');
                    if (sParameterName[0] == sParam) {
                        return decodeURIComponent(sParameterName[1]);
                    }
                }
            }


            function findAllComment() {


                var product_id = GetURLParameter('id');

                mydata = {
                    product_id: product_id,

                }; // Create object
                $.ajax({
                    url: "./comment/front_api/showComment.php",
                    method: "POST",
                    dataType: "json",
                    data: JSON.stringify(mydata),
                    success: function(data) {
                        console.log(data);

                        ////////////

                        showAllComment(data);
                    },
                });

            }
            findAllComment();


            function showAllComment(data) {
                //  console.log(`Here =>`, data);


                let cnt = -1;
                $('#all_comment').empty();

                $.each(data, (index, value) => {
                    let row = "";
                    let review = "";
                    let row_review = value.star;
                    while (row_review--) review += `<a href="#"><span><i class="fa fa-star" aria-hidden="true"></i></span></a>`;



                    row = $(`

            <div class="comment_show" style="position:relative;">


              <div class="comment_show_left">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <div class="comment_show_right comment_1">
                <div class="featured_bottom featured_bottom_uniq display__">

                ${review}

                </div>
                <p class="uni_p">SAYS ${value.date}</p>
                <strong>${value.c_name}</strong>
              </div>

              <span style="font-family: 'Constanti', Times, serif; color:green;">${value.c_review}</span>

              <div class="like_dislike">

                <strong class="like" style="padding-right: 10px;color: navy; cursor: pointer;">
                  <i  class="fa fa-thumbs-up likeee" aria-hidden="true"></i>

                  <input style="border: none;width: 30px;background: white;" class="like_number" type="text" disabled value="${value.like_num}">
                </strong>

                <strong class="dislike" style="padding-right: 10px;color: brown;cursor: pointer;">
                  <i  class="fa fa-thumbs-down dislikeee" aria-hidden="true"></i>
                  <input style="border: none;width: 30px;background: white;" class="dislike_number" type="text" disabled value="${value.dislike_num}">
                </strong>


              </div>

            </div>`)
                        .appendTo(`#all_comment`);

                    (function($) {
                        $(`.likeee`, row).on(`click`, function(e) {
                            //console.log(e.target);
                            // $(e.target).closest("tr").find(".check_row").prop('checked', this.checked);

                            let vaaa = this;

                            $(this).addClass("likeAni");
                            setTimeout(function(eeee) {
                                // Remove the class after a certain time
                                $(vaaa).removeClass("likeAni");
                            }, 1000);

                            let p_like = parseInt($(this).parent().find(".like_number").val()) + 1;
                            $(this).parent().find(".like_number").val(p_like);

                            //console.log(value.id);

                            setTimeout(function() {
                                var comment_id = value.id;

                                mydata = {
                                    comment_id: comment_id,
                                    p_like: p_like

                                }; // Create object
                                $.ajax({
                                    url: "./comment/front_api/insert_like.php",
                                    method: "POST",
                                    dataType: "json",
                                    data: JSON.stringify(mydata),
                                    success: function(data) {

                                    },
                                });

                            }, 2000, );


                        });

                        $(`.dislikeee`, row).on(`click`, function(e) {
                            //console.log(e.target);
                            // $(e.target).closest("tr").find(".check_row").prop('checked', this.checked);
                            $(this).addClass("dislikeAni");
                            let p_dislike = parseInt($(this).parent().find(".dislike_number").val()) + 1;
                            $(this).parent().find(".dislike_number").val(p_dislike);

                            let vaaa = this;

                            setTimeout(function(eeee) {
                                // Remove the class after a certain time
                                $(vaaa).removeClass("dislikeAni");
                            }, 1000);

                            //console.log(value.id);

                            setTimeout(function() {
                                var comment_id = value.id;

                                mydata = {
                                    comment_id: comment_id,
                                    p_dislike: p_dislike

                                }; // Create object
                                $.ajax({
                                    url: "./comment/front_api/insert_dislike.php",
                                    method: "POST",
                                    dataType: "json",
                                    data: JSON.stringify(mydata),
                                    success: function(data) {

                                    },
                                });

                            }, 2000);
                            //$(this).removeClass("dislikeAni");
                        });
                    })(jQuery);
                });

            }



        });
    </script>


    <!--Java script-->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->




</body>

</html>