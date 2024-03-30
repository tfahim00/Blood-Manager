<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login">            <div class="error"> <?php echo $error ?> </div>
            <form method="post">
                <h1>SignUp</h1>
                <hr>
                <p>Give blood, save the World!</p>
                <label>Email</label>
                <input type="text" placeholder="abc@exampl.com" name="email">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password">
                <label>Password</label>
                <input type="password" placeholder="Re-enter Password">
                <input type="Submit" name="signUp" value="sign up">
            </form>
        </div>
    </div>

</body>
</html>
