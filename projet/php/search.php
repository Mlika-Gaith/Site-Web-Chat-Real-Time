<?php
    session_start();
    include_once("connect.php");

    $user_id = $_SESSION['id'];

    $search = $_POST['searchTerm'];
    $output = "";

    $sql = "SELECT * FROM users
            WHERE (firstName LIKE '%$search%'
            OR lastName LIKE '%$search%'
            OR email LIKE '%$search%')
            AND id<>'$user_id'";
    $query = mysqli_query($connection,$sql);


    if (mysqli_num_rows($query) > 0){

        include_once("data.php");

    }
    else{
        $output .= "<font color='#faf9f9'>No Suggestions Found.</font>";
    }
    echo $output;



?>