<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Account has been Deleted</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/401.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>

   <?php
        session_start();
        include_once("connect.php");
        $user_id = $_SESSION['id'];
        $sql = "DELETE FROM users WHERE id ='$user_id'";
        mysqli_query($connection,$sql);
        session_unset();
        session_destroy();
   ?>

    <div class="__content">

        <h2>Goodbye</h2>
        <h4>Your account has been Deleted.</h4>
        <div class="__underline">
            <span class="underline"></span>
        </div>
        <h4>Redirecting to index page</h4>
        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript">   
        function Redirect() 
        {  
            window.location="http://localhost/projet/index.php"; 
        } 
        setTimeout('Redirect()', 5000);
    </script>
</body>
</html>