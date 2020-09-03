<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
            <div class="col-md-6 user-login">
                <h2>Admin Login Here</h2>
                <form action="admin-login-validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="aname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="apass" class="form-control" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="adminregistration.php" style="background-position: -10px;">Register Here</a>
                    <hr style="border-width: 3px;">
                    <a href="../index.php">Log in as <strong>User</strong></a>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>