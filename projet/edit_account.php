<?php
    session_start();

    if (isset($_SESSION['id'])){
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Your Account</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css">
    <script src="https://kit.fontawesome.com/ea66952949.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php
        
        $user_id = $_SESSION['id'];
        include_once("php/connect.php");

        $sql = "SELECT * FROM users WHERE id='$user_id'";
        $query = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($query);

        $_SESSION['image'] = $row['image'];


    
    ?>

    <!--Nav Bar Logo-->

    <nav class="__navbar">

        <div class="navbar__container">
            <a href="index.php" id="navbar__logo"><img src="ressources/logo.png" alt="Logo"></a>

            <ul class="navbar__menu">

            <li class="navbar__btn"><a href="delete.php" class="navbar__button" id="sign_up">Delete Account</a></li>

            </ul>
        
        </div>

    </nav>

    <!--Nav Bar Logo-->


    <!--Form-->

    <div class="main">

        <div class="form__container">

            <div class="__wrapper">
    
                <section class="__form __editaccount">
    
                    <header>
                        Edit Profile
                    </header>
    
                    <form action ="" enctype="multipart/form-data">
    
                        <div class="error__text"></div>
    
                        <div class="name__details">
                            
                            <div class="__input __field">
    
                                <label>First Name</label>
                                <input type="text" name="firstName" placeholder="First Name .." value="<?php echo $row['firstName']?>">
    
                            </div>
    
                            <div class="__input __field">
    
                                <label>Last Name</label>
                                <input type="text" name="lastName" placeholder="Last Name .." value ="<?php echo $row['lastName']?>">
    
                            </div>
    
                        </div>
    
                        <div class="__field __input">
    
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email .." value="<?php echo $row['email']?>">
                        
                        </div>
    
                        <div class="__field __input">
    
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password ..." value="<?php echo $row['password']?>">
                            <i class="far fa-eye"></i>

                        </div>
    
                        <div class="__field __image">
    
                            <label for="file-upload">Select Image</label>
                            <input type="file" name="image" id="file-upload" hidden>
                        
                        </div>

                        <div class="__field button">
                            <input type="submit" value="save changes" name="submit">
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
    <script src="javascript/edit-account.js"></script>

    
</body>
</html>
<?php
    }
    else{
        echo "<script>window.location.replace('http://localhost/projet/401.php');</script>";
    }

?>