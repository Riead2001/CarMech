<?php
require '../model/db.php';

$email      = $_POST['email'];
$password   = $_POST['password'];

echo $email, $password;
$sql = "Select * from users where email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['usertype'] = 'customer';
    $_SESSION['email'] = $email;
    echo 'success';
    header("Refresh: 3; url=../views/appointment.php");

} 
else{
    $showError = "Invalid Credentials";
    echo 'No user!';
    header("Refresh: 3; url=../views/login.php");
}

// user table
/*
CREATE TABLE `apache`.`users` 
(   
    `firstName` VARCHAR(35) NOT NULL , 
    `lastName` VARCHAR(35) NOT NULL , 
    `email` VARCHAR(35) NOT NULL , 
    `phoneNumber` VARCHAR(11) NOT NULL , 
    `password` VARCHAR(65) NOT NULL 
) 
ENGINE = InnoDB; 
*/

?>