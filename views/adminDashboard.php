<?php
include 'components/head.php';
?>
<body class="body">
<?php 
        session_start();
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin'){
            require 'components/adminnav.php';
        }
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'customer'){
            require 'components/usernav.php';
            header ("Location: ../views/appointment.php");
        }
?>


<?php
include '../model/db.php';
$sql = "SELECT * FROM appointment";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
?>

<table class="table">
    <tr class='tr'>
        <th class="th">First Name</th>
        <th class="th">Last Name</th>
        <th class="th">Email</th>
        <th class="th">Phone Number</th>
        <th class="th">Vehicle Type</th>
        <th class="th">Vehicle Year</th>
        <th class="th">Vehicle Model</th>
        <th class="th">Appointment Date</th>
        <th class="th">Mechanic</th>
        <th class="th">Select Mechanic</th>
    </tr>
    <?php
if ($num > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr class='tr'>
            <td class='td'> ".$row['firstName']."</td>
            <td class='td'> ".$row['lastName']."</td>
            <td class='td'> ".$row['email']."</td>
            <td class='td'> ".$row['phoneNumber']."</td>
            <td class='td'> ".$row['vehicleType']."</td>
            <td class='td'> ".$row['vehicleYear']."</td>
            <td class='td'> ".$row['vehicleModel']."</td>
            <td class='td'> ".$row['appointmentDate']."</td>
            <td class='td'> ".$row['mechanic']."</td>
            <td class='td'> <a class='button' href='editMechanic.php?id=".$row['email']." '>Choose</a> </td>
        </tr>";
    }
} else {
    echo "0 results";
}

//mysqli_close($conn);
?>
    </tr>
    
            




</body>