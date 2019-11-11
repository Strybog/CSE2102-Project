<?php
session_start();
$connection = mysqli_connect("localhost","root","","gpms");

if (isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password == $cpassword){
        $query = "INSERT INTO users (Username,Password,email) values ('$username','$password','$email')";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            // echo "NOT SAVED";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');

        }
            else{
            $_SESSION['Status'] = "Admin Profile Not Added";
            header('Location: register.php');
            }
    }
    else
    {
        $_SESSION['Status'] = "Passwords don't match";
        header('Location: register.php');  
    }
}



?>