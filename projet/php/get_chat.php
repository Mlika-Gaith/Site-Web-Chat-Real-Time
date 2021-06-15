<?php
    session_start();
    include("connect.php");
    $sender = $_SESSION['id'];
    $destination = $_POST['destination'];


    $output ="";
    $sql = "SELECT * FROM messages WHERE (sender_msg_id='$sender' and destination_msg_id='$destination')
    OR (sender_msg_id='$destination' and destination_msg_id='$sender')
    ORDER BY msg_id";

    $query = mysqli_query($connection,$sql);

    if (mysqli_num_rows($query) > 0){

        while ($row = mysqli_fetch_assoc($query)){
            if ($row['sender_msg_id'] == $sender){ //this means that he's a sender

                $output .=  "<div class='chat sender'>

                                    <div class='__details'>
                                        <p>".$row['message']."</p>
                                    </div>

                            </div>";

            }

            else{
                $image_id = $row['sender_msg_id'];
                $sql2= "SELECT image FROM users WHERE id='$image_id'";
                $query2 = mysqli_query($connection,$sql2);
                $row2 = mysqli_fetch_assoc($query2);
                
                $output .= "<div class='chat destination'>

                                <img src='php/images/".$row2['image']."' alt=''>

                                <div class='__details'>
                                    <p>".$row['message']."</p>
                                 </div>

                            </div>";
            }
            
        }
      
    }

    echo $output;

    


    




?>