<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
            <div class="col-md-6 user-login">
                <h2>Login Here</h2>
                <form action="login-validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="upass" class="form-control" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <a href="registration.php">Register</a>
                <hr style="border-width: 3px;">
                <a href="admin/adminindex.php">Log in as <strong>Admin</strong></a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>