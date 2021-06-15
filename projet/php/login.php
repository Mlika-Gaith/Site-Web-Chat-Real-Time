<?php

    session_start();
    include_once("connect.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)){

        //checking if email is valid

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){

            $sql = "SELECT id,email,password FROM users WHERE email='$email'";
            $query = mysqli_query($connection,$sql);

            if(mysqli_num_rows($query) > 0){

                $row = mysqli_fetch_assoc($query);

                if($password == $row['password']){
                    $_SESSION['id'] = $row['id'];
                    $sql = "UPDATE users SET status ='Active Now' WHERE email='$email'";
                    mysqli_query($connection,$sql);
                    echo "success";
                }

                else{

                    echo "Wrong password\n";

                }
            }

            else{

                echo $email." Does not Exist\n";
            }


        }

        else{

            echo $email." Not a valid email\n";
        }

    }

    else{

        echo "Input email and password Please\n";
    }



?>