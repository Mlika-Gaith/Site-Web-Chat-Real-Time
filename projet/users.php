<?php
    session_start();
    if (isset($_SESSION['id'])){

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/users.css'>
    <script src="https://kit.fontawesome.com/ea66952949.js" crossorigin="anonymous"></script>
</head>
<body>
    
        <?php
        
        $user_id = $_SESSION['id'];
        include_once("php/connect.php");
        $sql = "SELECT * FROM users WHERE id='$user_id'";
        $query = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($query);
        
        $sql = "SELECT * FROM users WHERE id<>'$user_id'";
        $query = mysqli_query($connection,$sql);
        
        
        ?>

    <!--Nav Bar Logo-->

    <nav class="__navbar">

        <div class="navbar__container">
            <a href="index.php" id="navbar__logo"><img src="ressources/logo.png" alt="Logo"></a>
            
        </div>

        

    </nav>



    <!--Nav Bar Logo-->

    <!--users-->

    <div class="main">

        <div class="__wrapper">


            <div class="__users">

                <header>
    
                    <div class="__content">
    
                        <img src="php/images/<?php echo($row['image'])?>" alt="">
    
                        <div class="__details">
    
                            <span><?php echo $row['firstName']." ".$row['lastName'];?></span>
                            <p><?php echo $row['status']?></p>
    
                        </div>

                        <div class="__settings">
                            <a href="edit_account.php" class="settings__btn"><i class="fas fa-cog"></i></a>
                        </div>
    
                    </div>
    
                    <a href="php/logout.php"><button class="__logout">log out</button></a>
    
                </header>
    
    
                <div class="__search">
                    <span class="text">Select a User to chat with</span>

                    <div class="search__items">

                        <input type="text" placeholder="Type to Search .." name="search">
                        <button><i class="fas fa-search"></i></button>

                    </div>
                    
                </div>
    
    
                <div class="users__list">

                <?php

                    if (mysqli_num_rows($query)){
                        while($row2 = mysqli_fetch_assoc($query)){
                            
                            $dest =$row2['id'];
                            
                            $sql = "SELECT * FROM messages WHERE
                            (sender_msg_id = '$user_id' OR destination_msg_id='$user_id') AND
                            (sender_msg_id = '$dest' OR destination_msg_id ='$dest') 
                            ORDER BY msg_id desc LIMIT 1";

                            $query2 = mysqli_query($connection,$sql);
                            $row3 =mysqli_fetch_assoc($query2);

                            $msg = "No messages sent yet";
                            if (!empty($row3['message'])){
                                $msg = $row3['message'];

                                if (strlen($msg) > 15){
                                    $msg = substr($msg,0,15);
                                    $msg = $msg." ...";
                                }

                                if ($row3['sender_msg_id'] == $user_id){
                                    $msg = "You : ".$msg;
                                }

                            }
                            
                
                ?>
    
                    <a href='chat.php?id=<?php echo $row2['id']?>'>
                        <div class="__content">
    
                            <img src="php/images/<?php echo($row2['image'])?>" alt="">
                            <div class="__details">
    
                                <span><?php echo $row2['firstName']." ".$row2['lastName'] ?></span>
                                <p><?php echo $msg?></p>
    
                            </div>

                            <?php
                                    if ($row2['status'] == 'Active Now'){
                                ?>
                            <div class="status__dot">
                                
                                <i class="fas fa-circle"></i>
                               
                            </div>

                            <?php
                                    }
                                    else {

                                    
                            ?>

                            <div class="status__dot__inactive">
                                
                                <i class="fas fa-circle"></i>
                               
                            </div>

                            <?php
                                    }
                            ?>
    
                        </div>
    
                    </a>

                <?php
                
                        }
                    }
                ?>

                    
                </div>
    
    
            </div>
    
        </div>

    </div>

       

    <!--Users-->

    <!--Footer-->

    <footer>
        <div class="footer__bottom">
            <p>copyright &copy;2021 Sonic Chat Designed By <span>Mlika Gaith</span></p>
        </div>
    </footer>

    <!--Footer-->

    <script src="javascript/search.js"></script>
    
</body>
</html>
<?php
    }
    else{
        echo "<script>window.location.replace('http://localhost/projet/401.php');</script>";
    }

?>
