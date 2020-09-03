<?php

include "template/dbconnection.php";

$name=$_POST['uname'];
$email=$_POST['uemail'];
$pass=$_POST['upass'];

$s=" select * from  users where name='$name' && password='$pass'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$name;
    header('location:profile.php');
}else{    
    header('location:login.php');
}

?>