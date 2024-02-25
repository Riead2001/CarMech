<?php
include '../model/db.php';
$email = $_POST['email'];
$mechanic = $_POST['mechanic'];
$sql = "UPDATE `appointment` SET `mechanic` = '$mechanic' WHERE `appointment`.`email` = '$email'";
$result = mysqli_query($conn, $sql);
if ($result){
    echo 'appointment updated!';
    header("Refresh: 3; url=../views/adminDashboard.php");
}
if (!$result){
    echo 'appointment exists with this email';
}
?>