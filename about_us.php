<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./CSS/about_us.css">
    <link rel="stylesheet" href="./Responsive_Css/about_us_responsive.css">

    <link rel="stylesheet" href="./CSS/home_page.css">
    <link rel="stylesheet" href="./CSS/shop.css">
    <link rel="stylesheet" href="./Responsive_Css/shop_responsive.css">
    <link rel="stylesheet" href="./Responsive_Css/home_page_responsive.css">

    <style>
        /* blog and video */
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
            font-size: 39px;
            font-weight: 700;
            margin-top: 10px;
            color: black;
            font-family: none;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .Committee_top h2 strong {
            color: #f09a3e;
            font-size: 30px;
            font-family: none;
        }

        .President {
            margin-top: 70px;
            margin-bottom: 50px;
            text-align: center;
        }

        .President_row {}

        .President_top {
            text-align: left !important;
            margin-bottom: 50px;
        }

        .President_top iframe {
            width: 550px;
            height: 300px;
            text-align: center;
        }

        .President_top img {
            position: relative;

        }

        .President_top span {
            font-size: 35px;
            background: #fff;
            padding: 17px 25px;
            border-radius: 50%;
            position: absolute;
            left: 96px;
            top: 220px;
            transition: 0.4s;
        }

        .President_top span:hover {
            background: red;
            color: white;
        }

        .President_bottom {
            text-align: end;
        }

        .President_bottom p {
            font-size: 20px;
            font-weight: 500;
            color: red;
            font-family: none;
        }

        .President_bottom p span {
            color: #f09a3e !important;
            font-size: 22px;
            font-weight: 600;
        }

        .President_bottom strong {
            font-size: 21px;
            font-weight: 600;
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


</head>

<body>

    <!--Header Section-->



    <?php include_once "nav.php"; ?>




    <!--Banner Section-->



    <section>
        <div class="container-fluid banner">
            <div class="row">

                <div class="col-xl-12 col-md-12 col-sm-12  banner_left">

                    <h1 class="user-select-none">About Us</h1>

                    <p class="user-select-none">Home
                        <span>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                        </span class="user-select-none">
                        About Us
                    </p>

                </div>

            </div>
        </div>
    </section>


    <!--Back To Top Icon Section-->

    <!-- <section>
        <a class="back_to_top" href="#"><span><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></span></a>
    </section> -->


    <!--History Section-->




    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 Committee_top">

                    <span>#About Us
                    </span>

                    <h2>Welcome to our <strong>SHOP</strong></h2>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container President">
            <div class="row justify-content-center  mt-1 President_row">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10 President_top">
                    <iframe src="https://www.youtube.com/embed/NfIlMOukA90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-10 President_bottom">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat laboriosam neque quam quas tenetur illo adipisci perspiciatis reiciendis! Atque placeat esse non molestias. Sed aspernatur dolore aliquid obcaecati numquam ipsam reprehenderit ipsa aut mollitia fugiat magnam esse labore maiores voluptatum quas quidem eos, ut voluptates laudantium totam blanditiis odio qui!</p>
                    <p class="text-danger">Devra C. Cowen</p>
                    <strong>Founder</strong>
                </div>

            </div>
        </div>
    </section>







    <!-- Box Section-->


    <section>
        <div class="container d-none">
            <div class="row box ">
                <div class="col-xl-4 col-lg-6 col-md-6  box_section ">
                    <div class="box_section_inner inner_first">

                        <h3 class="user-select-none">What are Leo Clubs?</h3>
                        <p class="user-select-none">Leo clubs are an official activity of Lions Clubs International that encourages young men and women to serve others in their community and around the world. The Leo motto – Leadership, Experience, Opportunity – is fulfilled as members work together in response to the needs of others.</p>

                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-6   box_section">

                    <div class="box_section_inner inner_middle">

                        <h3 class="user-select-none">What’s In it for the Community?</h3>
                        <p class="user-select-none">Creates Awareness of Community Needs, Helps Improve community and youth relationships, Enhances community development, Improves quality of life for recipients and givers, Helps the quality of life of others, Opportunity for youth to volunteer service</p>

                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-6  box_section inner_last">

                    <div class="box_section_inner">

                        <h3 class="user-select-none">What’s in it for me?</h3>
                        <p class="user-select-none">Leo club activities include regular meetings, service projects, and social functions. Leo clubs are sponsored by local Lions clubs. You'll learn more about – Leadership Experience – Organization – Social Skills – Self Esteem – Decision Making Skills – Teamwork – Problem Solving Skills – Career Possibilities – Fun</p>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!--Customer Advantage Section-->



    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 Committee_top">

                    <h2 class="featured_after">Customer Advantage</h2>
                    <hr>
                    <span style="letter-spacing: 2px;">Here you can check out which kind of Opportunity we given for Customer</span>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid helping_hand_section">
            <div class="row d-flex justify-content-center">

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 helping_hand ">

                    <div class="hand_box">
                        <div class="helping_hand_circle"></div>
                        <div class="helping_hand_icon">
                            <span><i class="fas fa-sync fa-spin"></i></span>
                        </div>
                        <div class="helping_hand_letter">
                            <h3 class="user-select-none">Easy Return Policy</h3>
                            <p class="user-select-none">Innovation and creativity in service projects advancing our global causes benefits communities around the world</p>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 helping_hand">


                    <div class="hand_box">
                        <div class="helping_hand_circle"></div>
                        <div class="helping_hand_icon">
                            <span><i class="fa fa-truck" aria-hidden="true"></i></span>
                        </div>
                        <div class="helping_hand_letter">
                            <h3 class="user-select-none">On Time Delivery</h3>
                            <p class="user-select-none">We serve to sustainably protect and restore our environment to improve the well-being of all communities.</p>
                        </div>
                    </div>


                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 helping_hand">

                    <div class="hand_box">
                        <div class="helping_hand_circle"></div>
                        <div class="helping_hand_icon">
                            <span><i class="fa fa-ship" aria-hidden="true"></i></span>
                        </div>
                        <div class="helping_hand_letter">
                            <h3 class="user-select-none">Reward Point</h3>
                            <p class="user-select-none">We serve to prevent avoidable blindness and improve quality of life for people who are blind</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <!--Typical_Project_Section-->



    <section>
        <div class="container d-none">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 Typical_Project">
                    <h3>Typical Lion And Leo Projects</h3>
                    <div class="typical_project_inner">
                        <ul class="typical_project_inner_ul">

                            <li><span>– Fun</span></li>
                            <li><span>– Environment</span></li>
                            <li><span>– Drug Awareness</span></li>
                            <li><span>– Youth Welfare</span></li>
                            <li><span>– Health</span></li>
                            <li><span>– Save Sight</span></li>

                        </ul>
                        <ul class="typical_project_inner_ul_1">

                            <li><span>– Hearing</span></li>
                            <li><span>– Citizenship</span></li>
                            <li><span>– Public Service</span></li>
                            <li><span>– Youth Exchange</span></li>
                            <li><span>– School Support</span></li>
                            <li><span>-financial</span></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--Benefit_Section-->


    <section>
        <div class="container d-none">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 history_bottom">

                    <h3>Who Benefits from Leo Clubs?</h3>
                    <h5>Young People:</h5>

                    <p class="text-wrap">Participation in Leo activities and projects helps young people prepare for the future by developing leadership, organizational and social skills. Members experience increased self-esteem and personal growth as they meet challenges and accept responsibilities.
                    </p>

                    <p class="text-muted">By volunteering their time and talents for the benefit of others, Leos learn firsthand the value and rewards of service. Leo club involvement can start young men and women on a lifetime of helping others.</p>

                    <h5>The Sponsoring Lions Club:</h5>

                    <p>By sharing in service activities, a Leo club can increase a Lions club’s effectiveness in helping others. Leo projects within the community also contribute to a Lions club’s visibility and good reputation. Working with young people can help Lions club members experience renewed interest and enthusiasm for projects and activities. If Leos are sons or daughters of Lions, club involvement becomes a “family affair”.</p>

                    <h5>Who Can Be a Leo?</h5>

                    <p class="text-muted">Leo club membership is open to young men and women between the ages of 12 and 30. Membership is divided into two groups, the school-based Leos are generally between the ages of 12 and 17 whereas the community-based clubs have members ages 18-30.</p>

                    <p>Young people of high moral standards who wish to serve others are eligible to become Leos. School administrators, Lions, friends of Lions and community leaders can provide names of potential members. Candidates may also be recruited through public announcements.</p>

                    <h5>What is the Leo-Lion Relationship?</h5>

                    <p class="text-muted">The success of a Leo club depends on a close partnership with its sponsoring Lions club. The Lions’ role is to offer support, guidance and counsel while the Leos are responsible for planning and implementing their own activities, financing their projects and maintaining the smooth operation of the club. Leos have their own club officers and constitution.</p>

                    <p>The Leo club advisor (a member of the sponsoring Lions club) serves as the chief liaison between the Leo and Lions clubs. Duties of the advisor include offering constructive suggestions to the Leos, reporting on their activities to the Lions club and promoting a cooperative relationship between the two clubs.</p>

                    <h5>The Privileges of Leo Membership?</h5>

                    <p class="text-muted">As a sponsored activity of a Lions club, Leo clubs are entitled to many services and benefits offered by Lions Clubs International. Informational and club materials include new member kits, guides for service activities, leadership aids, ideas for fundraising, club supplies and international newsletters.</p>

                    <p>Leos can participate in the annual Lions Clubs International Convention, attending their own functions. Leos are also entitled to receive official awards and recognition for their achievements.</p>

                    <p class="text-muted">Because of the international scope of Leo clubs, members enjoy the global identity of a worldwide organization. International programmes such as club twinning, youth exchange and youth camps enable Leos to connect with and learn from other young people around the world.</p>

                    <h5>What About School-Based Clubs?</h5>

                    <p>Leo clubs can be formed in state or private schools. The supervision by the sponsoring Lions club is exercised in full cooperation with the school authorities. The Leo club is subject to the regulations and policies established for all student organizations and activities. A faculty advisor, usually a member of the school’s staff or administration, serves as a liaison between the school and Leo club. The faculty advisor also works closely with the Leo club advisor.</p>

                    <h5>How Do We Begin?</h5>

                    <p class="text-muted">If Lions club members are interested in sponsoring a Leo club, complete the coupon to obtain an organization kit. The kit includes: <br>

                        Suggestions for organizing a Leo club;</p>

                    <p>1. Information brochures for prospective Leos; <br>

                        2. Leo club constitution; <br>

                        3. Handbook for Leo club advisors; <br>

                        4. Application for Certificate of Organization; <br>

                        5. Membership application blanks</p>

                    <h5>Leo Membership</h5>

                    <p>When you join LEO’s you become a member of a worldwide organisation with more than 7000 LEO Clubs and a membership in excess of 175,000 people operating under the sponsorship of Lions Clubs in 145 nations.</p>

                    <p>In Australia and Papua New Guinea there are currently over 1400 Leos who are members of 68 Leo clubs. These Leo Clubs have proud records of Achievement in all areas of service to their local communities. All of our clubs provide ample opportunity for their members to learn and to be involved.</p>

                    <h5>How Much Time will it take?</h5>

                    <p>Your involvement in Leos depends on the amount of spare time you can afford.</p>

                    <p>The most important thing to remember about Leos is that:</p>

                    <p> <span>-</span> Leos help people in need.</p>
                    <p> <span>-</span> Leos help their club grow.</p>
                    <p> <span>-</span> Leos help their fellow Leos.</p>
                    <p> <span>-</span> Leos have lots of fun.</p>

                </div>
            </div>
        </div>
    </section>



    <!--Google Location_Section-->



    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 history_top helping_border ">
                    <span>#ABOUT US</span>

                    <h2 style="font-family: none;">Our Shop Location</h2>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid helping_hand_section">
            <div class="row justify-content-center">

                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 helping_hand ">



                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7724.351090036976!2d91.82498760777528!3d22.358379691233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89cee83b037%3A0x65fbfda0a5081ea6!2sChittagong%20War%20Cemetery!5e0!3m2!1sen!2sbd!4v1686209566851!5m2!1sen!2sbd" width="100%" height="600p" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>



            </div>
        </div>
    </section>



    <!--About_Video_Section-->



    <section>
        <div class="container-fluid Video_Section ">
            <div class="row">
                <div class="col-xl-8 col-lg-8  Video_left">
                    <h3>"We take action to make a difference, in our backyards and around the world, bringing kindness and hope where it’s needed most"</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12  Video_right">
                    <div class="Video_right_inner">
                        <a href="#"><span><i class="fas fa-play-circle"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--Donation_Section-->

    <section>
        <div class="container-fluid donation d-none">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 donation_left">
                    <div class="donation_left_inner">
                        <img src="./image/Leo-Logo.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 donation_right">
                    <div class="donation_right_inner">
                        <span class="donation_right_inner_span">#CONTRIBUTE</span>
                        <h2>We will together make the world better</h2>
                        <p>Every journey begins with a single step. One act of service, one encouraging word, one gift of generosity is often all it takes to bring hope where it’s needed most. Over the last 100 years, the kindness of Lions and Leos has multiplied across borders, oceans, and continents. With over 1.4 million members, we now have an opportunity to truly change our world. That’s why we’re uniting our global service around five areas of need. These Global Causes present significant challenges to humanity, and we believe it’s our turn to meet them.</p>
                        <a href="./blood_donation_form.php"><span><i class="fa fa-heart" aria-hidden="true"></i>Donate Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>













    <!--Footer Section-->

    <?php include_once "footer.php"; ?>




    <!-- <section style="margin-top: 581px;">
   </section>-->





    <!--Java script-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>