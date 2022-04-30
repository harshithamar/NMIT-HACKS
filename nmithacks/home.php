<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="homep.css">
    </head>

    <body>
        <section class="homepage">
            <nav>
                <img src="images\logo.png" alt="logo">
                <div class="nav-bar">
                    <ul>
                        <li><a href="#" class="about-us">About Us</a></li>
                        <li><a href="register.php"><button class="register">Register</button></a></li>
                        <li><a href="login.php"><button class="login">Login</button></a></li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="slide-container">
                <div class = "carousel-img">
                    <div class="slides fade">
                        <div class="slide-content">
                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>Just because no one else can 
                                heal or your inner work for you  doesn't mean you can, should, or need to do it alone.
                                <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="slides fade">
                        <div class="slide-content">
                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>Embrace the lows like it's a natural cycle.
                                Life isn't liner, but more of a cycle. There's a season and time for everything.
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                    <div class="slides fade">
                        <div class="slide-content">
                            <p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                You dont have to Struggle in silence - You can be un-silent. You can live well with a mental
                                health condition, as long as you open up to somebody about it.
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                    <div class="slides fade">
                        <div class="slide-content">
                            <p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                Its OK, NOT to be OK
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
            
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div class="slide-dot">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
        </section>
    </body>
    <script src="script.js" defer></script>

</html>