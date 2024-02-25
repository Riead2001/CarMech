<?php
include '../model/db.php';
$email = $_POST['email'];

$sql = "UPDATE `appointment` SET `date` = '$appointmentdate' WHERE `appointment`.`email` = '$email'";
$result = mysqli_query($conn, $sql);
if ($result){
    echo 'appointment updated!';
    header("Refresh: 3; url=../views/adminDashboard.php");
}
if (!$result){
    echo 'appointment exists with this email';
}
?>