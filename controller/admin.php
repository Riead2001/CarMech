<?php
require '../model/db.php';

$email      = $_POST['email'];
$password   = $_POST['password'];

//echo $email, $password;

$sql = "Select * from admin where email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['usertype'] = 'admin';
    echo 'success';

} 
else{
    $showError = "Invalid Credentials";
    echo 'No user!';
}



// table query for admin
/*
CREATE TABLE `apache`.`admin` 
( 
    `name` VARCHAR(35) NULL , 
    `email` VARCHAR(35) NOT NULL , 
    `password` VARCHAR(65) NOT NULL , 
    `modifiedAt` VARCHAR(15) NULL , 
    
    PRIMARY KEY (`email`)
) 
ENGINE = InnoDB; 
*/

?>