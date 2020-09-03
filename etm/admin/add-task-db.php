<?php

session_start();
header("location:alltasks.php");  

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'etm');

$eid=$_POST['eid'];
$task=$_POST['etask'];

$reg="insert into tasks (task,e_id) values('$task','$eid')";
mysqli_query($con, $reg);

?>