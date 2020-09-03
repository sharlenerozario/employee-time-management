<?php
include "admindbconnection.php";

$aname=$_POST['aname'];
$apass=$_POST['apass'];

$s=" select * from  admin where a_name='$aname' && a_password='$apass'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num == 1){
    $_SESSION['a_username']=$aname;
    header('location:adminindex.php');
}else{    
    header('location:adminlogin.php');
}

?>