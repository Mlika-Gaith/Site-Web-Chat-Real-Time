<?php
    session_start();
    if (isset($_SESSION['id'])){

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Delete Confirmation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/401.css'>
</head>
<body>

    <div class="__content">

        <h2>Confirm Process ?</h2>
        <h4>Your account will be deleted permantly.</h4>
        <div class="__underline">
            <span class="underline"></span>
        </div>
        
        <div class ="button_collections">
                <button class="button confirmation">yes</button>
                <button class="button cancel">Cancel</button>
        </div>

    </div>

    <script src="javascript/delete.js"></script>
    
</body>
</html>
<?php
    }
    else{
        echo "<script>window.location.replace('http://localhost/projet/401.php');</script>";
    }

?>