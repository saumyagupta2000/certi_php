<?php
    session_start();
    $con = mysqli_connect('localhost', 'root');
    if($con){
        echo "connection established";
    }
    else{
        echo "no connection";
    }

    $db = mysqli_select_db($con, 'admindatabase');

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
        $sql = "select * from admintable where user = '$username' and
                                               pass = '$password' ";
        $query = mysqli_query($con, $sql);

        $row = mysqli_num_rows($query);
            if($row == 1){
                echo "Login Sucessful";
                $_SESSION['user'] = $username;
                header('location:test.php');
            }
            else{
                echo "login failed";
                header('location:adminlogin.php');
            }
        
    }
?>