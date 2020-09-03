<?php

include "admindbconnection.php";
header('location:adminlogin.php');  //redirects to login page after successful registration


$afname=$_POST['afname'];
$aname=$_POST['aname'];
$aemail=$_POST['aemail'];
$apass=$_POST['apass'];

$s=" select * from  admin where a_name='$aname'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num == 1){
    echo "username not available";
    header('location:adminregistration.php');
    $_SESSION['a_username']=$aname;
}else{    
    $reg="insert into admin (a_fname,a_name,a_email,a_password) values('$afname','$aname','$aemail','$apass')";
    mysqli_query($con, $reg);
    //echo "Registration succesful!";
    // if first time registration, redirect to firstlogin.php, change password there
    header('location:adminlogin.php');
    $_SESSION['a_username']=$aname;
}


?>