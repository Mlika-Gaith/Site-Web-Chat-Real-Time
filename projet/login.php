<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/signup.css'>
    <script src="https://kit.fontawesome.com/ea66952949.js" crossorigin="anonymous"></script>

</head>
<body>

    <!--Nav Bar Logo-->

    <nav class="__navbar">

        <div class="navbar__container">
            <a href="index.php" id="navbar__logo"><img src="ressources/logo.png" alt="Logo"></a>
        </div>

    </nav>

    <!--Nav Bar Logo-->

     <!--Form-->

    <div class="main">

        <div class="form__container">

            <div class="__wrapper">
    
                <section class="__form __login">
    
                    <header>
                        Sign IN
                    </header>
    
                    <form action ="" enctype="multipart/form-data">
    
                        <div class="error__text"></div>
    

                        <div class="__field __input">
    
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email ..">
                        
                        </div>
    
                        <div class="__field __input">
    
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password ...">
                            <i class="far fa-eye"></i>

                        </div>
    
                        <div class="__field button">
                            <input type="submit" value="continue to chat" name="submit">
                        </div>
    
                        <div class="__link">
                            Don't Have an Account ? <a href="signup.php"> Sign Up Now</a>
                        </div>
    
    
                    </form>
    
    
                </section>
    
            </div>
    
        </div>

    </div>

    <!--Form-->

    <!--Footer-->


    <footer>
        <div class="footer__bottom">
            <p>copyright &copy;2021 Sonic Chat Designed By <span>Mlika Gaith</span></p>
        </div>
    </footer>

    <!--Footer-->

    <script src="javascript/login.js"></script>
    <script src="javascript/pass-show-hide.js"></script>
    
</body>
</html>