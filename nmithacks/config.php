<?php

session_start();

$username = "";
$email = "";
$password = "";
$confirmpass = "";
$results = "";

$errors = array();


$db = mysqli_connect('localhost','root','','unspoken_health') or die("could not connect to database");

if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmpass = mysqli_real_escape_string($db, $_POST['confirmpassword']);
}
if(empty($username)) {
    array_push($errors, "Username is required");
}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if($password != $confirmpass){array_push($errors, "Passwords do not match");}

$user_check_query = "Select * from user where username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user['username'] == $username){array_push($errors, "Username already exits");}
    if($user['email'] == $email){array_push($errors, "This email id already has a registered username");}
}

if(count($errors) == 0){
    $query = "Insert into user(username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username'] = '$username';
    $_SESSION['success'] = 'You are now logged in';

    header('location: dashboard.php');
}

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($username)){
        array_push($errors, 'username is required');
    }
    if(empty($email)){
        array_push($errors, 'email is required');
    }
    if(empty($password)){
        array_push($errors, 'password is required');
    }

    if(count($errors) == 0){
        // $password = md5($password)

        $query = "Select * from user Where username='$username' And password = '$password'";

        $results = mysqli_query($db, $query);

        if($results)
    {
        header("Location: dashboard.php");
    }
    else
    {
        array_push($errors, "Wrong username/password combination. Please try again.");
        header("Location: login.php");
    }
        // if(mysqli_num_results($results)) {
        //     $_SESSION['username'] = $username;
        //     $_SESSION['success'] = "Logged in successfully";
        //     header('Location: dashboard.php');
        // }else{
        //     array_push($errors, "Wrong username/password combination. Please try again.");
        // }
    }
}