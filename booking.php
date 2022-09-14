<?php
session_start();
require_once('config.php');

$curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
echo "<script>console.log(String('$curPage'));</script>";

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book'])) {
    $pickuploc = $_POST['pickuploc'];
    $droploc = $_POST['droploc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $carid = $_POST['carid'];
}


?>

    <?php require_once ('header.php')?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <?php    
    
    $sql= "SELECT * FROM `cars` WHERE carid = ".strval($_POST['carid']);
    $r= mysqli_query($mysqli, $sql);
    if ($r->num_rows > 0) {
        if ($row = mysqli_fetch_assoc($r)) {
            ?>
    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5"><?php echo $row['carname'] ?></h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="<?php echo $row['carimagename'] ?>" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">$99.00/Day</h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt</p>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: <?php echo $row['caryear'] ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span><?php echo $row['carmileage'] ?>km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Personal Detail</h2>
                    <form action="thankyou.php" method="post">
                    <input type="hidden" name="pickuploc" id="pickuploc" value="<?php echo $pickuploc; ?>">
                    <input type="hidden" name="droploc" id="droploc" value="<?php echo $droploc; ?>">
                    <input type="hidden" name="date" id="date" value="<?php echo $date; ?>">
                    <input type="hidden" name="time" id="time" value="<?php echo $time; ?>">
                    <input type="hidden" name="carid" id="carid" value="<?php echo $carid; ?>">
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input name="fname" id="fname" type="text" class="form-control p-4" placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input name="lname" id="lname" type="text" class="form-control p-4" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input name="emailid" id="emailid" type="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input name="mobile" id="mobile" type="tel" class="form-control p-4" placeholder="Mobile Number" required="required">
                            </div>
                        </div>
                    </div>  
                                    
                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <input type="submit" name="reserve" value="reserve" class="btn btn-block btn-primary py-3">
                    </div>
                </div>
            </form>  
            </div>
        </div>
    </div>
    <!-- Car Booking End -->

    <?php }} ?>

    <?php require_once("footer.php"); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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