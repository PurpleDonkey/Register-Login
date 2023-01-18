<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
  <div class="lBox">
        <img src="Images/logo.png" class="Pfp">
  <div id="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
    <h1>Login</h1>
        <form method="post">
            <div class="txt">
                <input type="email" required>
                <span></span>
                <label for="email">Email ID</label>
            </div>
            <div class="txt">
                <input type="text" required>
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="txt">
                <input type="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Login">
            <div class="links">
                <a href="#">Forgot Password?</a>
                <a href="Register.php">Create an account.</a>
            </div>
        </form>
    </div>
</body>
</html>