<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css">
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
    
                <section class="__form __signup">
    
                    <header>
                        Sign UP Now
                    </header>
    
                    <form action ="" enctype="multipart/form-data">
    
                        <div class="error__text"></div>
    
                        <div class="name__details">
                            
                            <div class="__input __field">
    
                                <label>First Name</label>
                                <input type="text" name="firstName" placeholder="First Name ..">
    
                            </div>
    
                            <div class="__input __field">
    
                                <label>Last Name</label>
                                <input type="text" name="lastName" placeholder="Last Name ..">
    
                            </div>
    
                        </div>
    
                        <div class="__field __input">
    
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email ..">
                        
                        </div>
    
                        <div class="__field __input">
    
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password ...">
                            <i class="far fa-eye"></i>

                        </div>
    
                        <div class="__field __image">
    
                            <label for="file-upload">Select Image</label>
                            <input type="file" name="image" id="file-upload" hidden>
                        
                        </div>

                        <div class="__field button">
                            <input type="submit" value="continue to chat" name="submit">
                        </div>
    
                        <div class="__link">
                            Already Have an Account ? <a href="login.php">Log In</a>
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

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>