
<?php

include "template/dbconnection.php";

$task_id=$_POST['taskid'];
//echo $task_id;

$sql=" select * from  tasks where t_id='$task_id'";

$result = $con->query($sql);
$row = $result->fetch_assoc();
$s_time=$row["start_time"];

// $row = $result->fetch_assoc();
// echo '<h3>Task '.$row["t_id"].'</h3>';
//  echo '<p>'.$row["task"].'</p>';

date_default_timezone_set('Asia/Dhaka');
$date =date_default_timezone_get();

$timestamp = date('H:i:s', strtotime($date));
$datetoday = date('d-m-Y', strtotime($date));

$task_hours=strtotime($date)-strtotime($s_time);
$hours_to_string=secondsToTime($task_hours);


$reg="update tasks set end_time='$timestamp',t_hours='$task_hours',t_hours_string='$hours_to_string' where t_id='$task_id'";
mysqli_query($con, $reg);
header('location:profile.php');


function secondsToTime($seconds) {
    $dtF = new \DateTime('@0');
    $dtT = new \DateTime("@$seconds");
    return $dtF->diff($dtT)->format('%h hours, %i minutes');
  }







?>