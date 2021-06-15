<?php

    session_start();
    include_once("connect.php");


    /**Variables */

    $fname= $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $password= $_POST['password'];



    /**Variables */

    if(!empty($fname) && !empty($lname) && !empty($email) 
        && !empty($password)){

            // checking if user email is valid

            if (filter_var($email,FILTER_VALIDATE_EMAIL)){

                //checking if email already exists

                $sql = "SELECT * FROM users WHERE email ='$email'";
                $query = mysqli_query($connection,$sql);
                if(mysqli_num_rows($query) > 0){
                    echo $email." already exists.\n";
                } 

                else{
                    if(isset($_FILES['image']) && !empty($_FILES['image'])){ //$_FILES returns an array with file_name file_type error file size an tmp_name
                        $img_name = $_FILES['image']['name'];
                        $img_type = $_FILES['image']['type'];
                        $tmp_name = $_FILES['image']['tmp_name']; //this tmp name will be used to move file to our folder

                        $ext = explode(".",$img_name);
                        $extension = end($ext);
                        $extensions = ['png','jpeg','jpg'];

                        if (in_array($extension,$extensions)){
                            move_uploaded_file($tmp_name,"images/".$img_name); //uploading image to folder
                            
                            /**Inserting data into our database */

                            $sql="INSERT INTO users(firstName,lastName,email,password,image,status) VALUES
                            ('$fname','$lname','$email','$password','$img_name','Active Now')";

                            if(mysqli_query($connection,$sql)){
                                echo "success";
                                $sql = "SELECT * FROM users WHERE email='$email'";
                                $query = mysqli_query($connection,$sql);
                                $row = mysqli_fetch_assoc($query);
                                $_SESSION['id'] = $row['id'];
                            }
                        }
                        else{
                            echo "Image extension not supported.\n";
                        }
                    }
                    else{

                        echo "Please select an image.\n";

                    }
                }

            }
            else{
                echo $email ." Not a valid email.\n";
            }

        }
    else{
        echo("All input Fields are Required.");
    }

?>