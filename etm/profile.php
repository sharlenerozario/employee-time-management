
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
  <title>User Profile</title>
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
      <h3><a href="profile.php">Welcome <strong><?php echo $_SESSION['username'];?></strong>  </a></h3>
      
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


    <!-- tasks -->
    <div class="col-sm-7">
        <?php

            $sql = "SELECT t_id,task, start_time, end_time FROM tasks where e_id='$r3' ";

            $result = $con->query($sql);
           
            
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                  // $_SESSION['taskid'] = $row["t_id"];
                  // echo $row["t_id"];
                    echo '<div class="row">';
                    echo '<div class="col-sm-3">';
                    echo '<div class="well">';
                    echo '<h3>Task '.$row["t_id"].'</h3>';
                    echo '</div>';
                    echo '</div>';
                    echo '';
                    echo '<div class="col-sm-9">';
                    echo '<div class="well">';
                    echo '<h3>'.$row["task"].'</h3>';
                    echo '<hr>';
                    echo '<form action="starttask.php" method="post">';
                    echo '<input type="hidden" name="taskid" value='.$row["t_id"].'>';
                    echo '<button class="btn btn-primary" type="submit">Start</button>';
                    echo '</form>';
                    echo '<hr>';
                    echo '<form action="endtask.php" method="post">';
                    echo '<input type="hidden" name="taskid" value='.$row["t_id"].'>';
                    echo '<button class="btn btn-primary" type="submit">End</button>';
                    echo '</form>';

                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }else {
                echo "0 tasks";
            }
        ?>
    </div>




<!-- right side bar -->
    <?php include 'template/right-sidebar.php';?>
    
  </div>

</div>



</body>

</html>