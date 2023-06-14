<?php

require_once "_dbconnect.php";

$data="SELECT userName FROM `user`";
$res=mysqli_query($conn,$data);







$q=$_REQUEST['q'];

$suggestion="";

if($q!=""){

  //$q=strtolower($q);
  $len=strlen($q);

  
  while ($row_users = mysqli_fetch_array($res)) {
  
    $pe=$row_users['userName'];
    
    if(stristr($q,substr($pe,0,$len))){
        if($suggestion===""){
            $suggestion=$pe;
        }
        else{
            $suggestion .=", $pe";
        }
    }

  }



}


echo  $suggestion===""?"This user name is available":$suggestion." "."This user is already registered!";












