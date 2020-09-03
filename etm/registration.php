
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
            <div class="col-md-6 user-registration">
                <h2>Register Here</h2>
                <form action="registration-validation.php" method="post">
                    <h6>Enter the username and password provided by admin</h6>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="email" name="uemail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="upass" class="form-control" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                <a href="login.php">Login</a>
                <hr style="border-width: 3px;">
                <a href="admin/adminindex.php">Log in as <strong>Admin</strong></a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>