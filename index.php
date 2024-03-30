<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form method="POST">
            <div class="error"> <?php echo $error2 ?> </div>

<!-- To check the user loged In status -->
<p>
  <?php
     if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
      echo "<p>Please first log in to proceed.</p>";
     }
  ?>
</p>
                <h1>Login</h1>
                <hr>
                <p>Give blood, save the World!</p>
                <label>Email</label>
                <input type="text" placeholder="abc@exampl.com" name="email">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password">
                <input type="submit" name="logIn" value="Log In">
                <p>
                    <a href="#">Forgot Password?</a>
                    <p>Don't have an account?<a href="SignUp.php">Sign Up</a></p>
                    
                </p>
            </form>
        </div>
    </div>

</body>
</html>
