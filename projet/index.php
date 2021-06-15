 <!DOCTYPE html>
 <html>
 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Welcome</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <script src="https://kit.fontawesome.com/ea66952949.js" crossorigin="anonymous"></script>
     <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
     
 </head>
 <body>

    <?php
        session_start();
        
        $link ="";

        if (isset($_SESSION['id'])){
            $link ="users.php";
        }
        else{
            $link ="login.php";
        }
    ?>

    <!--NAV BAR-->

    <nav class="__navbar">


            <div class="navbar__container">


                <a href="#home" id="navbar__logo"><img src="ressources/logo.png" alt="LOGO"></a>

                <div class="navbar__toggle" id ="mobile-menu">

                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>

                </div>

                <ul class="navbar__menu">

                    <li class="navbar__item"><a href="#home" class="navbar__links" id="home_page">Home</a></li>
                    <li class="navbar__item"><a href="#about" class="navbar__links" id="about_page">About</a></li>
                    <li class="navbar__item"><a href="#services" class="navbar__links" id="services_page">Services</a></li>
                    <li class="navbar__btn"><a href="login.php" class="button" id="sign_up">Log in</a></li>


                </ul>

            </div>
            

    </nav>
     
    <!--NAV BAR-->


    <!--Hero Section-->

    <section class="main" id="home">

            <div class="main__container">

                <div class="main__content">

                    <h1>Sonic Chat</h1>
                    <h2>Free online chat</h2>
                    <p>Meet new People fast and chat instantly</p>
                    <button class="main__btn"><a href="signup.php">Sign up</a></button>


                </div>

                <div class="img__container">

                    <img src="ressources/main_img.svg" alt="pic" id="main__img">

                </div>

            </div>

    </section>

    <!--Hero Section-->

    <!--About Section-->

    <section class="about" id="about">

            <div class="about__container">

                <div class="about__img__container">

                    <div class="about__img__card">

                        <i class="fas fa-user"></i>

                    </div>

                </div>

                <div class="about__content">

                    <h1>About this Project</h1>
                    <h2>This is a school project</h2>
                    <p>This is a project within the framework of the web programming subject carried out by mlika gaith student in 3rd year computer science at the polytechnique school in sousse.</p>

                </div>

            </div>

    </section>


    <!--About Section-->

    <!--Services Section-->

    <section class="services" id="services">

            <div class="services__container">

                <h1>Our Services</h1>


                <div class="card__container">

                    <div class="card">

                        <div class="img__box">
                            <i class="fas fa-search"></i>
                        </div>
    
                        <div class="card__content">
                            
                            <h3>Search</h3>
                            <p>The website uses a live search which is an enhanced search form that uses AJAX technology to deliver results or suggestions within the same view.
                            look up whoever registered on the website, no friend requests are required and start chatting for free.</p>
                            <a href=<?php echo $link ?> ><span>Start Now</span></a>
    
                        </div>
    
                    </div>

                    <div class="card">

                        <div class="img__box">
                            <i class="far fa-comments"></i>
                        </div>
    
                        <div class="card__content">
                            
                            <h3>Chat</h3>
                            <p>The purpose of the chat application is to allow users to be able to chat with each other. 
                            The users will be able to chat with each other, only from user to user. The functionality of the chat application is to give the ability to chat with whoever is
                            online on the application.</p>
                            <a href=<?php echo $link ?>><span>Start Now</span></a>
    
                        </div>
    
                    </div>

                    <div class="card">

                        <div class="img__box">
                            <i class="fab fa-rocketchat"></i>
                        </div>
    
                        <div class="card__content">
                            
                            <h3>Live Chat</h3>
                            <p>the messaging exchange will be instant and also uses AJAX to deliver messages real time within  the same view (the chatbox) wich improves the user friendliness of the website.
                            search a user click on the user and start exchanging messages. This website only supports users to user chat .</p>
                            <a href=<?php echo $link ?>><span>Start Now</span></a>
    
                        </div>
    
                    </div>

                
                </div>
                
            </div>


    </section>

    <!--Services Section-->

    <!--Footer-->

    <footer>

        <div class="footer__content">
            <h3>Sonic Chat</h3>
            <p>This is a project within the framework of the web programming subject carried out by mlika gaith student in 3rd year computer science at the polytechnique school in sousse.</p>
            <ul class="socials">
                <li><a><i class="fab fa-facebook"></i></a></li>
                <li><a><i class="fab fa-instagram"></i></a></li>
                <li><a><i class="fab fa-youtube"></i></i></a></li>
                <li><a><i class="fas fa-envelope"></i></a></li>
            </ul>
        </div>

        <div class="footer__bottom">
            <p>copyright &copy;2021 Sonic Chat Designed By <span>Mlika Gaith</span></p>
        </div>
    </footer>

    <!--Footer-->

   
    <script src='javascript/app.js'></script>
 </body>
 </html>