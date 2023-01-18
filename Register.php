<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log-in Page</title>
    <link rel="stylesheet" type="text/css" href="Register.css">
<body>
    
    <div class="lBox">
        <img src="Images/logo.png" class="Pfp">
    <div id="container">
        <?php
        print_r($_POST)
        ?>
        <h1>Sign up</h1>
        <form action="Register.php" method="post">
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
            <div class="txt">
                <input type="password" required>
                <span></span>
                <label for="password">Confirm Password</label>
            </div>
            <input class="button" type="submit" value="Register">
            <a href="Login.php">Already have an account?.</a>
        </form>
    </div>
</body>
</head>
</html>