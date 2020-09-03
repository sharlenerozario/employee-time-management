
<?php

include "template/dbconnection.php";

$task_id=$_POST['taskid'];
//echo $task_id;

$sql=" select * from  tasks where t_id='$task_id'";

$result = $con->query($sql);
$num=mysqli_num_rows($result);

// $row = $result->fetch_assoc();
// echo '<h3>Task '.$row["t_id"].'</h3>';
//  echo '<p>'.$row["task"].'</p>';

date_default_timezone_set('Asia/Dhaka');
$date =date_default_timezone_get();

$timestamp = date('H:i:s', strtotime($date));
$datetoday = date('d-m-Y', strtotime($date));

// if($num == 1){
    $reg="update tasks set start_time='$timestamp' where t_id='$task_id'"; //setting start time of task
    mysqli_query($con, $reg);
    header('location:profile.php');
   // header('location:profile.php'); // task already started, so redirecting to profile page
// }else{    
//     $reg="update tasks set start_time='$timestamp' where t_id='$task_id'"; //setting start time of task
//     mysqli_query($con, $reg);
//     header('location:profile.php');
// }

?>