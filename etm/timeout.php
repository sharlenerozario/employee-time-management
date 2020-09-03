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

$row = $result->fetch_assoc();
$clock_in_time=$row["clock_in"];//fetching clock in time

$office_hours=strtotime($date)-strtotime($clock_in_time);
$hours_to_string=secondsToTime($office_hours);

if($num == 1){
    $reg="update officetime set clock_out='$timestamp',o_hours='$office_hours',o_hours_string='$hours_to_string' where e_id='$r3' && d_date='$datetoday'";
    mysqli_query($con, $reg);
    header('location:profile.php');

}else{    
    echo "You hadn't clocked in";

}



function secondsToTime($seconds) {
    $dtF = new \DateTime('@0');
    $dtT = new \DateTime("@$seconds");
    return $dtF->diff($dtT)->format('%h hours, %i minutes');
  }

?>