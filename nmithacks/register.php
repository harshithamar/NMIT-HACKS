<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">

</head>

<body>
    <div>
    </div>
    <section class="register-page">
        <div class="register-img">
            <img src="images\registerimage.png" alt="image">
        </div>
        <div class="container">
            <h1>Create Account</h1>
            <form action="register.php" method="post" id="register" class="register">
    
                <div class="input">
                    <label for="username">Username <span class="star">*</span></label>
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required/>
                    <small>Error</small>
                </div>
    
                <div class="input">
                    <label for="email">Email <span class="star">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required/>
                    <small>Error</small>
                </div>
    
                <div class="input">
                    <label for="password">Password <span class="star">*</span></label>
                    <input type="password" name="password" id="password" placeholder="Password" required/>
                    <small>Error</small>
                </div>
    
                <div class="input">
                    <label for="confirm_password">Confirm your Password <span class="star">*</span></label>
                    <input type="password" name="confirmpassword" id="confirm_password"
                        placeholder="Confirm your Password" required/>
                    <small>Error</small>
                </div>
                <button type="submit" name="register_user" class="register-btn">Register</button>
                <p class="p-login">Already a user?<a href="login.php"><b>login</b></a></p>
            </form>
        </div>
    </section>
    <!-- <script src="register.js"></script> -->

</body>

</html>