<?php

    session_start();
    include_once("connect.php");

    /* variables*/

    $user_id = $_SESSION['id'];
    $image = $_SESSION['image'];
    
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    
    /*variables */

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){

        //checking if email is a valid one

        if (filter_var($email,FILTER_VALIDATE_EMAIL)){

            //checknig if email already exits 

            $sql ="SELECT * from users WHERE email ='$email' and id<>'$user_id'";
            $query = mysqli_query($connection,$sql);
            if (mysqli_num_rows($query) > 0){
                echo $email." already Exists";
            }
            else{
                if (file_exists($_FILES['image']['tmp_name'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $ext = explode(".",$img_name);
                    $extension = end($ext);
                    $extensions = ['png','jpeg','jpg'];

                    if (in_array($extension,$extensions)){
                        move_uploaded_file($tmp_name,"images/".$img_name);

                        $sql ="UPDATE users 
                                SET firstName='$fname',
                                lastName='$lname',
                                email='$email',
                                password='$password',
                                image='$img_name'
                                WHERE id ='$user_id'";
                        mysqli_query($connection,$sql);
                        echo "success";
                    }
                    else{
                        echo "image Extension not Supported";
                    }
                }
                else{
                    $sql ="UPDATE users 
                                SET firstName='$fname',
                                lastName='$lname',
                                email='$email',
                                password='$password'
                                WHERE id ='$user_id'";
                    mysqli_query($connection,$sql);
                    echo "success";
                }

             }
        }
        else{
            echo $email."not a Valid email";
        }

    }

    else{
        echo "All input fields Are Required";
    }


?>