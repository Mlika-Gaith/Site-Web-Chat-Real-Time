<?php
    session_start();
    include_once("connect.php");
    $sender = $_SESSION['id'];
    $destination = $_POST['destination'];
    $message = $_POST['message'];


    if (!empty($message)){
        $sql = "INSERT INTO messages(sender_msg_id,destination_msg_id,message) VALUES ('$sender','$destination','$message')";
        $query = mysqli_query($connection,$sql) or die();
    }

?>