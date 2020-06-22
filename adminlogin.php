<?php
    session_start();
    $con = mysqli_connect('localhost', 'root');
    if($con){
        echo "connection established";
    }
    else{
        echo "no connection";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text\css" herf="style.css">
    <title>Document</title>
    <?php include 'links.php' ?>
</head>
<body>
    <header>
        <div class="container center-div shadow" >
            <div class="heading text-center text-uppercase mb-5 text-black">ADMIN LOGIN PAGE</div>
            <div class="container row">
                <div class="admin-form">
                    <form action="logincheck.php" method="POST">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" name="user" value="" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" value="" class="form-control">
                        </div>
                        <input type="Submit" class="btn btn-success" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </header>
</body>
</html>