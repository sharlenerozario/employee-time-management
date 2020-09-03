<?php

include 'template/dbconnection.php';
if(!isset($_SESSION['username'])){ //if session variable isn't set (or cannot go back to profile page after logging out)
    header('location:login.php');
}
$nname=$_SESSION['username'];

$r1 = $con->query("SELECT * FROM users where name='$nname' ");
$r2 = $r1->fetch_assoc();
$r3 = $r2["id"];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Change Password</title>
</head>
<body>
    <div class="container">
     
        <div class="col-md-6 user-login">
                <h2>Username & Password Change</h2>
                <br>
                <p>Your ID is: <?php echo $r3;?></p>
                <br>
                <p>Please enter username and password of your choice. You will be redirected to this page if the username is not available, otherwise login page will appear.</p>
                <form action="newuser-validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="n_uname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="n_upass" class="form-control" required>
                    </div>    

                    
                    <?php $_SESSION['e_id']=$r3;?>  

                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
    </div>
    
</body>
</html>