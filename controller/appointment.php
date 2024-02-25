<?php

require '../model/db.php';

$firstName      = $_POST['firstName'];
$lastName       = $_POST['lastName'];
$email          = $_POST['email'];
$phoneNumber    = $_POST['phoneNumber'];
$vehicleType    = $_POST['vehicleType'];
$vehicleModel   = $_POST['vehicleModel'];
$vehicleYear    = $_POST['vehicleYear'];
$appointmentDate= $_POST['appointmentDate'];
$mechanic       = $_POST['mechanic'];
//echo $firstname, $lastname, $phonenumber, $vehicletype, $vehiclemodel, $vehicleyear, $appointmentdate, $mechanic;

$sql = "INSERT INTO `appointment` ( `firstName`, `lastName`, `email`, `phoneNumber`, `vehicleType`, `vehicleModel`, `vehicleYear`, `appointmentDate`, `mechanic`) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$vehicleType', '$vehicleModel', '$vehicleYear', '$appointmentDate', '$mechanic')";
$result = mysqli_query($conn, $sql);
if ($result){
    echo 'appointment created!';
}
if (!$result){
    echo 'appointment exists with this email';
}



/*
→ table generation sql
CREATE TABLE `apache`.`appointment` ( 
    `firstName` VARCHAR(15) NOT NULL , 
    `lastName` VARCHAR(15) NOT NULL , 
    `email` VARCHAR(35) NOT NULL , 
    `phoneNumber` VARCHAR(12) NOT NULL , 
    `vehicleType` VARCHAR(12) NOT NULL , 
    `vehicleNumber` VARCHAR(18) NOT NULL , 
    `vehicleModel` VARCHAR(24) NOT NULL , 
    `vehicleYear` VARCHAR(4) NOT NULL , 
    `appointmentDate` VARCHAR(12) NOT NULL , 
    `mechanic` VARCHAR(35) NOT NULL 
    ) 
ENGINE = InnoDB; 
*/
?>