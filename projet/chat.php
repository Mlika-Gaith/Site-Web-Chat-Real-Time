<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/chat.css'>
    <script src="https://kit.fontawesome.com/ea66952949.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <?php
    
        session_start();
        include_once("php/connect.php");
        $dest_id = $_GET['id'];
        $user_id = $_SESSION['id'];


        $sql = "SELECT * FROM users WHERE id ='$user_id'";
        $query = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($query);

        $sql = "SELECT * FROM users WHERE id ='$dest_id'";
        $query = mysqli_query($connection,$sql);
        $row2 = mysqli_fetch_assoc($query);
    
    
    ?>


    <!--Nav Bar Logo-->

    <nav class="__navbar">

        <div class="navbar__container">
            <a href="index.php" id="navbar__logo"><img src="ressources/logo.png" alt="Logo"></a>
        </div>

    </nav>  

    <!--Nav Bar Logo-->

    <div class="main">

        <div class="__wrapper">

            <section class="chat__area">

                <header>

                    <a href="users.php"><i class="fas fa-arrow-left"></i></a>

                    <img src="php/images/<?php echo $row['image']?>" alt="Avatar">

                    <div class="__details">
                        <span><?php echo $row['firstName']." ".$row['lastName']?></span>
                        <p><?php echo $row['status']?></p>
                    </div>

                </header>


                <div class="chat__box">

                    

                </div>

                <form action="" class="typing__area">


                    <input type="text" name="sender" value="<?php echo $user_id?>" hidden>
                    <input type="text" name="destination" value="<?php echo $dest_id?>" hidden class="destination">
                    <input type="text" placeholder="type to Send .." name="message" class="input__field">
                    <button><i class="far fa-paper-plane"></i></button>

                </form>




            </section>

        </div>

    </div>

    <!--Footer-->

    <footer>
        <div class="footer__bottom">
            <p>copyright &copy;2021 Sonic Chat Designed By <span>Mlika Gaith</span></p>
        </div>
    </footer>

    <!--Footer-->

    <script src="javascript/chat.js"></script>

</body>
</html>