
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
            <div class="col-md-6 user-registration">
                <h2>Register Here</h2>
                <?php
                    session_start();
                    if(isset($_SESSION['a_username'])){ //if session variable is set redirect to the same page with a warning
                    
                    }
                ?>
                <form action="admin-registration-validation.php" method="post">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="afname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="aname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="email" name="aemail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="apass" class="form-control" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                <a href="adminlogin.php">Login</a>
                <hr style="border-width: 3px;">
                <a href="../index.php">Log in as <strong>User</strong></a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>