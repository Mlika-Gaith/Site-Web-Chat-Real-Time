<?php
    session_start();
    include_once("connect.php");
    $user_id = $_SESSION['id'];
    $sql = "UPDATE users SET status ='Offline Now' WHERE id ='$user_id'";
    mysqli_query($connection,$sql);

    session_unset();
    session_destroy();

    header("location:http://localhost/projet/index.php");

?>