<?php
include "admindbconnection.php";
if(!isset($_SESSION['a_username'])){ //if session variable isn't set (or cannot go back to profile page after logging out)
  header('location:adminlogin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Tasks</title>
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
      <h1>Assign a task</h1>
      <div class="col-md-6 task-form">
                <form action="add-task-db.php" method="post">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="eid" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Task</label>
                        <input type="text" name="etask" class="form-control" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>

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
