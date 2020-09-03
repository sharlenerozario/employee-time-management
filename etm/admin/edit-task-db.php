<?php

include 'admindbconnection.php';
header('location:alltasks.php'); 

$eid=$_POST['eid'];
$task=$_POST['etask'];
$taskid=$_POST['taskid'];

$reg="update tasks 
      set task='$task',e_id='$eid' 
      where t_id='$taskid'";
mysqli_query($con, $reg);

?>