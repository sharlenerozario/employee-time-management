<?php

include "template/dbconnection.php";

if(!isset($_SESSION['username'])){ //if session variable isn't set (or cannot go back to profile page after logging out)
    header('location:profile.php');
}
$ename=$_SESSION['username'];



$r1 = $con->query("SELECT id FROM users where name='$ename' ");
$r2 = $r1->fetch_assoc();
$r3 = $r2["id"]; //getting employee id through session

date_default_timezone_set('Asia/Dhaka');
$date =date_default_timezone_get();

$timestamp = date('H:i:s', strtotime($date));
$datetoday = date('d-m-Y', strtotime($date));
//$timestamp = date('Y-m-d H:i:s', strtotime($date));

$s="select * from  officetime where e_id='$r3' && d_date='$datetoday'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num == 1){
    header('location:profile.php');
}else{    
    $reg="insert into officetime (e_id,d_date,clock_in,clock_out) values('$r3','$datetoday','$timestamp', '0')";
    mysqli_query($con, $reg);
    header('location:profile.php');
}

?>