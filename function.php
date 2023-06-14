<?php

class my_project
{

    public $conn;

    public function __construct()
    {


        // host   user  pass dbName

        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "my_project";
        $this->conn = mysqli_connect($host, $user, $pass, $dbName) or die("Connection Fail");
    }

    ///////// ADD User ///////

    public function addUser($data)
    {

        $name = $data['name'];
        $user_name = $data['user_name'];
        $email = $data['email'];
        $password = $data['password'];
        $phone = $data['phone'];
        $dob = $data['dob'];
        $image = $data['image'];



        $query = "INSERT INTO `user`( `name`, `user_name`, `email`, `pass`, `phone`, `dob`, `image`) VALUES ('$name','$user_name','$email','$password','$phone','$dob','$image');";
        mysqli_query($this->conn, $query);
        header("Location:./index.php");
    }

    //////////// Show User /////////

    public function showUser($id)
    {
        $query = "SELECT * FROM `user` WHERE id = $id ;";
        return mysqli_query($this->conn, $query);
    }

    //////Edit User ///////////


    public function editUser($data)
    {

        $name = $data['name'];
        $user_name = $data['user_name'];
        $email = $data['email'];
        $password = $data['pass'];
        $phone = $data['phone'];
        $dob = $data['dob'];
        $image = $data['image'];
        $id = $data['id'];



        $query = "UPDATE `user` SET `name`='$name',`user_name`='$user_name',`email`='$email',`pass`='$password',`phone`='$phone',`dob`=' $dob',`image`='$image' WHERE id=$id;";

        mysqli_query($this->conn, $query);
        header("Location:./profile.php");
    }




    //////////// Checked Valid User /////////

    public function checkUser($data)
    {
        $user_name = $data['user_name'];
        $pass = $data['pass'];
        $query = "SELECT * FROM `user` WHERE user_name='$user_name' and pass='$pass';";
        return mysqli_query($this->conn, $query);
    }

    ///////// NEWS SHOW ///////////

    public function post_show()
    {
        $query = "SELECT * FROM `post` WHERE 1 ORDER BY id DESC;";
        return mysqli_query($this->conn, $query);
    }

    public function show_product_pagination($start_from, $num_per_page)
    {
        $query = "SELECT * FROM `post` WHERE 1 ORDER BY id DESC LIMIT $start_from, $num_per_page;";
        return mysqli_query($this->conn, $query);
    }

    public function post_title_show()
    {
        $query = "SELECT * FROM `post` WHERE 1 ORDER BY id ASC;";
        return mysqli_query($this->conn, $query);
    }

    ///////// CATEGORY SHOW ///////////

    public function category_show()
    {
        $query = "SELECT * FROM `category` WHERE 1 ;";
        return mysqli_query($this->conn, $query);
    }


    ///////// POST UNIQUE SHOW ///////////

    public function post_unique_show($id)
    {
        $query = "SELECT * FROM `post` WHERE id=$id;";
        return mysqli_query($this->conn, $query);
    }

    public function post_unique_comment_show($id)
    {
        $query = "SELECT * FROM `news_comment` WHERE nid=$id ORDER BY id DESC;";
        return mysqli_query($this->conn, $query);
    }


    public function comment_add($data)
    {
        $nid = $data['nid'];
        $name = $data['name'];
        $email = $data['email'];
        $comment = $data['comment'];
        $date = $data['date'];
        $time = $data['time'];
        $query = "INSERT INTO news_comment(`nid`, `name`, `email`, `comment`, `date`, `time`) VALUES($nid,'$name','$email','$comment','$date','$time');";
        mysqli_query($this->conn, $query);
        header("Location:./news_uniq.php?status=unique&&id=$nid#your_comment");
    }


    ///////// NEWS SHOW FOR UNIQUE CATEGORY ///////////

    public function post_news_for_unique_category_show($id)
    {
        $query = "SELECT * FROM `post` WHERE cate_name=$id ORDER BY id DESC;";
        return mysqli_query($this->conn, $query);
    }

    public function post_news_for_unique_category($id)
    {
        $query = "SELECT * FROM `category` WHERE id=$id ;";
        return mysqli_query($this->conn, $query);
    }

    /////////// Show Reply ///////////////
    public function showReply($id)
    {
        $query = "SELECT * FROM `reply` WHERE comment_id=$id;";
        return mysqli_query($this->conn, $query);
    }
    public function addReply($reply, $comment_id, $id)
    {
        $query = "INSERT INTO `reply`(`comment_id`, `reply`) VALUES ('$comment_id','$reply');";
        mysqli_query($this->conn, $query);
        header("Location:./news_uniq.php?status=unique&&id=$id");
    }

    //// user add post

    ///////////////NEWS POST/////////////////



    public function post_show_user($user_post)
    {
        $query = "SELECT * FROM `post` WHERE user_post = '$user_post' ORDER BY id DESC;";
        return mysqli_query($this->conn, $query);
    }

    public function post_unique_category_show($data)
    {
        $query = "SELECT * FROM `category` WHERE id=$data;";
        return mysqli_query($this->conn, $query);
    }

    public function post_add($data)
    {


        $writer = $data['writer'];
        $date = $data['date'];
        $title = $data['title'];
        $descriptione = $data['description'];
        $cate_name = $data['cate_name'];
        $img_name = $data['img'];
        $user_post = $data['user_post'];
        $query = "INSERT INTO post(`writer`, `date`, `title`, `description`, `cate_name`,`image`,`user_post`) VALUES('$writer','$date','$title','$descriptione',$cate_name,'$img_name','$user_post');";
        mysqli_query($this->conn, $query);
        header("Location:./home.php");
    }


    public function post_delete($data)
    {
        $query = "SELECT * FROM `post` WHERE id=$data;";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);
        unlink("./upload/" . $row['image']);

        $query = "DELETE FROM post WHERE id=$data;" . "DELETE FROM news_comment WHERE nid=$data;";
        mysqli_multi_query($this->conn, $query);
        header("Location:./profile.php");
    }

    public function post_edit($data)
    {
        $query = "SELECT * FROM `post` WHERE id=$data;";
        return mysqli_query($this->conn, $query);
    }

    public function post_edit_change($data)
    {
        $id = $data['id'];
        $writer = $data['writer'];
        $date = $data['date'];
        $title = $data['title'];
        $description = $data['description'];
        $cate_name = $data['cate_name'];
        $img_name = $data['img'];

        $query = "UPDATE post SET writer='$writer',date='$date',title='$title',description='$description',cate_name='$cate_name',image='$img_name' WHERE id=$id;";
        mysqli_query($this->conn, $query);
        header("Location:./profile.php");
    }
}
