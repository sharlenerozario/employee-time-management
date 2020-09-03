<?php

include "template/dbconnection.php";


$name=$_POST['uname'];
$email=$_POST['uemail'];
$pass=$_POST['upass'];

$s=" select * from  users where name='$name'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num == 1){
    echo "username not available";
    header('location:registration.php');
    $_SESSION['username']=$name;
}else{    
    $reg="insert into users (name,email,password) values('$name','$email','$pass')";
    mysqli_query($con, $reg);

    header('location:newuser.php');
    $_SESSION['username']=$name;
}

?>