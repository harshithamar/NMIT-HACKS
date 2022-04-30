<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="container">

        <h1>Login</h1>
        <center><small>See your growth and get consulting support</small></center>
        <form action="validation.php" id="login" class="login" method="post">

            <div class="input">
                <label for="username">Username <span class="star">*</span></label>
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required/>
                <small>Error</small>
            </div>

            <div class="input">
                <label for="email">Email <span class="star">*</span></label>
                <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" required/>
                <small>Error</small>
            </div>

            <div class="input">
                <label for="password">Password <span class="star">*</span></label>
                <input type="password" name="password" id="password" placeholder="Password" required/>
                <small>Error</small>
            </div>
            <a href="dashboard.php"><button type="submit" name="login_user" class="login-btn">Login</button></a>
            <p class="create-account">Not registered yet? &nbsp;<a href="register.php">Create an Account</a></p>
        </form>
    </div>
    <script src="login.js"></script>

</body>

</html>