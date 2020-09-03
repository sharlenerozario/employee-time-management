<?php

include 'admindbconnection.php';
header('location:alltasks.php'); 

$taskid=$_POST['taskid'];

$reg="DELETE FROM tasks
      WHERE t_id = '$taskid'";
mysqli_query($con, $reg);

?>