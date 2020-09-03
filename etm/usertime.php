<?php

include "template/dbconnection.php";

if(!isset($_SESSION['username'])){ //if session variable isn't set (or cannot go back to profile page after logging out)
    header('location:login.php');
}
$ename=$_SESSION['username'];
//print_r($ename);


$r1 = $con->query("SELECT id FROM users where name='$ename' ");
$r2 = $r1->fetch_assoc();
$r3=$r2["id"];

//print_r($rs);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Entry & Exit Timesheet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'template/header.php'?>
  
<div class="container text-center">    
  <div class="row">

  <!-- left side bar -->
    <div class="col-sm-3 well">
      <div class="well">
      <h3><a href="profile.php">Welcome <?php echo $_SESSION['username'];?> </a></h3>
      </div>
      <div class="well">
        <p><a href="#">Position</a></p>
        <p>
          <span class="label label-default">IT</span>
          <span class="label label-primary">Management</span>
          <span class="label label-success">HR</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Links</strong></p>
      </div>
      <p><a href="usertime.php">Entry and Exit Time</a></p>
      <p><a href="tasktime.php">Task Time</a></p>
    </div>


    <!-- ...........................office entry & exit............................. -->
    <div class="col-sm-7">
    <h2 style="color:#fff">Your Entry & Exit Timesheet</h2>
      
        <?php
          $sql = "SELECT * FROM officetime where e_id='$r3'";
          $result = $con->query($sql);

          if ($result->num_rows > 0){
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Date</th>';
            echo '<th>Entry</th>';
            echo '<th>Exit</th>';
            echo '<th>Hours</th>';
            echo '</thead>';
            echo '<tbody>';
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>'.$row["d_date"].'</td>';
              echo '<td>'.$row["clock_in"].'</td>';
              echo '<td>'.$row["clock_out"].'</td>';
              echo '<td>'.$row["o_hours_string"].'</td>';
              echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
          } else {
            echo "No entries found";
          }
        ?>
    </div>
      
    <!-- ...................................................................................... -->




<!--...................................... right side bar........................... -->
<?php include 'template/right-sidebar.php';?>

  </div>
</div>



</body>
</html>