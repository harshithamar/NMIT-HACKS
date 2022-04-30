<!-- <?php 
        session_start();
        if(isset($_SESSION['username'])){
            $_SESSION['msg'] = "You must log in first to view this page";
            header("location: login.php");
        }

        if(isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header("location: login.php");
        }
    ?> -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <title>Dashbaord</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" text="text/css" href="dashboard.css">

        <!-- funtion for wokring of dropdown menu -->
        <script>
            function menuToggle() {
                const toggleMenu = document.querySelector('.menu')
                toggleMenu.classList.toggle('active')
            }
        </script>
    </head>

    <body>
        <!-- <?php 
        if(isset($_SESSION['success'])) : ?>
        <input type="checkbox" id="sidebar-toggle">
            <h3>
                <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
         <?php endif ?>    -->
        <!-- Side Bar -->
        <div class="navigation">
            <ul>
                <li>
                    <div class="logo">
                        <span><img src="images\logo.png" alt="Logo" width="180px"></span>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-th-large" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="title">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="title">Payments</span>
                    </a>
                </li>
                <li>
                    <a href="bot.php">
                        <span class="icon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="form1.html">
                        <span class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                        <span class="title">Account</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <section>
                <div class="header">
                    <div class="topbar">
                        
                        <div class="search-box">
                            <input class="search-txt" type="text" placeholder="Search">
                            <a class="search-btn" href="#">
                                <i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <div class="quiz-btn">
                            <a href="quiz.php"><button>MH Quiz</button></a>
                        </div>
                        <div class="user" onclick="menuToggle();">
                            <img src="images\profile-icon.png" id="photo">
                        </div>

                        <!-- dropdown menu displayed when clicked on profileicon -->
                        <div class="menu">
                            <p>Signed in as<br>
                                <a href="#">
                                    <span>patient-id</span>
                                </a>
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="li-icon"><i class="fa fa-user-circle-o"
                                                aria-hidden="true"></i></span>
                                        <span class="li-title">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="li-icon"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></span>
                                        <span class="li-title">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="li-icon"><i class="fa fa-plus-square"
                                                aria-hidden="true"></i></span>
                                        <span class="li-text">New Appointment</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="li-icon"><i class="fa fa-question-circle-o"
                                                aria-hidden="true"></i></span>
                                        <span class="li-title">Help</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="li-icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                        <span class="li-title">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            
        </div>
    </body>

</html>
