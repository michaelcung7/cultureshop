<?php
    require 'connection.php';

    session_start();
    $user_id=$_SESSION['id'];
     $delete_query="delete from cart where userid='$user_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    session_unset();
    session_destroy();
    header('location: index.php');
?>
<!-- <!DOCTYPE html>
<html>
    <head>
        
        <title>Culture Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                //require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require 'footer.php';
           ?>
        </div>
    </body>
</html> -->
