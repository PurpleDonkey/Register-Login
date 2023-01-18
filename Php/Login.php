<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="../Css/Login.css">
</head>
<body>
  <div class="lBox">
        <img src="../Images/logo.png" class="Pfp">
  <div id="container">

        <form id="login-form" method="post">
            <div class="txt">
                <input type="text" required>
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
            <input id="login-button" type="submit" value="Login">
            <div class="links">
                <a href="#">Forgot Password?</a>
                <a href="Register.php">Create an account.</a>
            </div>
        </form>
    </div>
</body>
</html>