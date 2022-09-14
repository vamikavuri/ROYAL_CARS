<?php
session_start();
require_once('config.php');

$curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
echo "<script>console.log(String('$curPage'));</script>";

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reserve'])) {

    $pickuploc = $_POST['pickuploc'];
    $droploc = $_POST['droploc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $carid = $_POST['carid'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailid = $_POST['emailid'];
    $mobile = $_POST['mobile'];


    $sql= "INSERT INTO bookings (fname, lname, emailid, mobile, pickuploc, droploc, pickupdate, pickuptime, carid) 
    VALUES ('$fname', '$lname', '$emailid', '$mobile', '$pickuploc', '$droploc', '$date', '$time', '$carid')";
    $r= mysqli_query($mysqli, $sql); 

    }

?>
    
    <?php require_once ('header.php')?>

    <!-- Thankyou Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Thanks for choosing us !</h1>
        </div>
    </div>

    <?php require_once("footer.php"); ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>