<?php

include "template/dbconnection.php";

$nname=$_POST['n_uname'];
$npass=$_POST['n_upass'];

$n_id=$_SESSION['e_id'];

$s=" select * from  users where name='$nname'";


$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);


if($num == 1){
    echo "username not available/admin given username should be changed";
    header('location:newuser.php');
    ECHO $r3;
}else{    
    $reg="UPDATE users SET name='$nname',password='$npass' WHERE id='$n_id'";
    mysqli_query($con, $reg);
    
    // for first time registration, redirect to newuser.php, change username & password there
    header('location:login.php');
    // $_SESSION['temp']=$newname;
}

?>