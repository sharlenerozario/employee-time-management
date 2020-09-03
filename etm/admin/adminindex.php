<?php
include "admindbconnection.php";
if(!isset($_SESSION['a_username'])){ //if session variable isn't set (or cannot go back to profile page after logging out)
  header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
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
      <h1>Welcome to The Admin Panel</h1>
      <h3>
        The functions that an admin can perform:<br><hr></h3>
          <P><strong>Add Task:</strong> Assign tasks to employees using employee id.<P><hr>
          <P><strong>Asigned Tasks:</strong> Shows all the currently assigned tasks in a table which contains IDs, details, employee IDs assigned to the tasks along with start and finish time of those tasks. Admin can update/edit and delete the tasks <P><hr>
          <P><strong>Emplopyee List:</strong> Shows list of all the employees currently in the company.<P><hr>
          <P><strong>Employee Timesheet:</strong> Visual representation of employees' clocked in and out time datewise.<P><hr>
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
