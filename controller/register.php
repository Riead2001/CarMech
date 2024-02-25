<?php

require '../model/db.php';

$firstName      = $_POST['firstName'];
$lastName       = $_POST['lastName'];
$email          = $_POST['email'];
$phoneNumber    = $_POST['phoneNumber'];
$password       = $_POST['password'];
$cpassword      = $_POST['cpassword'];
//echo $firstName, $lastName, $email, $password, $phoneNumber;


    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `firstName`, `lastName`, `email`, `phoneNumber`, `password`) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo 'account created!';
        }
        if (!$result){
            echo 'account exists with this email';
        }
    }
    else{
        $showError = "Passwords do not match";
        echo 'Passwords do not match!';
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