<?php
include "admindbconnection.php";
if(!isset($_SESSION['a_username'])){ //if session variable isn't set (or cannot go back to profile page after logging out)
  header('location:adminlogin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admincss.css"></link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
  </style>
</head>
<body>

<!-- ............................navbar............................ -->
<?php include 'navbar.php'; ?>

<!-- ......................middle content................................. -->
  
<div class="container-fluid text-center">    
  <div class="row content">
  <?php include 'sidenav.php'; ?>
    
    <div class="col-sm-8 text-left"> 
      <h1>Employee List</h1>
      <?php

        $sql = "SELECT id, name FROM users";
        $result = $con->query($sql);

        if ($result->num_rows > 0){
          echo '<table class="table table-striped">';
          echo '<thead>';
          echo '<tr>';
          echo '<th scope="col">Employee ID</th>';
          echo '<th scope="col">Employee Name</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          // output data of each row
          while($row = $result->fetch_assoc()) {
           
            echo '<tr>';
            echo '<th scope="row">'.$row["id"].'</th>';
            echo '<td>'.$row["name"].'</td>';
            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
        } else {
          echo "0 employees";
        }  
        ?>
      <table class="table table-striped">
    </table>
    </div>





    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
