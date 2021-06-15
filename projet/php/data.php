<?php

    include_once("connect.php");

    while($row=mysqli_fetch_assoc($query)){

        $dest =$row['id'];

        $sql2 = "SELECT * FROM messages WHERE
        (sender_msg_id = '$user_id' OR destination_msg_id='$user_id') AND
        (sender_msg_id = '$dest' OR destination_msg_id ='$dest') 
        ORDER BY msg_id desc LIMIT 1";

        $query2 = mysqli_query($connection,$sql2);
        $row2 =mysqli_fetch_assoc($query2);

        $msg = "No messages sent yet";
        if (!empty($row2['message'])){
            $msg = $row2['message'];

            if (strlen($msg) > 15){
                $msg = substr($msg,0,15);
                $msg = $msg." ...";
                }

                if ($row2['sender_msg_id'] == $user_id){
                    $msg = "You : ".$msg;
                    }

        }

        $status = "";
        if ($row['status'] == 'Active Now'){
            $status .= '<div class="status__dot">
                            <i class="fas fa-circle"></i>
                        </div>';
            
        }

        else{
            $status .='<div class="status__dot__inactive">     
                            <i class="fas fa-circle"></i>
                        </div>';
        }

        $output .= '<a href="chat.php?id='.$row['id'].'">
                        <div class="__content">

                            <img src="php/images/'. $row['image'] .'" alt="">
                            <div class="__details">

                                    <span>'.$row['firstName']." ".$row['lastName'].'</span>
                                    <p>'.$msg.'</p>

                            </div>'.$status.'

                        </div>

                    </a>';
    }



?>