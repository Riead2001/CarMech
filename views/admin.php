<html>
    <?php require 'components/head.php' ?>
    <body >
    <?php 
        session_start();
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin'){
            require 'components/adminnav.php';
            header ("Location: ../views/adminDashboard.php");
        }
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'customer'){
            require 'components/usernav.php';
        }
    ?>
    <header class="header">
    <nav class="navbar">
        <ul>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><div class="nav-container"><a href="admin.php">Admins</a></div></li>
        </ul>
    </nav>
</header>
<div class="container">
  <h2>Appointment form</h2>
  <div class="purple-container">
            <form  method="POST" action="../controller/admin.php">
                <label class="labelText">Email</label>
                <input class="inputBox" type="text" name="email" placeholder="example@email.com" required>
                <label class="labelText">Password</label>
                <input class="inputBox" type="text" name="password" placeholder="*******" required>
                <center><button  type="submit" class="btn">Submit</button></center>
            </form>
        </div></div>


    </body>
</html>