<?php


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter'])) {
    $email = $_POST['emailid'];
    $sql= "INSERT INTO newsletter (emailid) VALUES ('$email')";
    $r= mysqli_query($mysqli, $sql); }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>royal@cars.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php if($curPage == "index.php" || $curPage == "thankyou.php") {echo "active";} ?> ">Home</a>
                        <a href="service.php" class="nav-item nav-link <?php if($curPage == "service.php") {echo "active";} ?>">Service</a>
                        <a href="car.php" class="nav-link <?php if($curPage == "car.php" || $curPage == "detail.php" || $curPage == "booking.php") {echo "active";} ?>">Cars</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if($curPage == "about.php" || $curPage == "team.php" || $curPage == "testimonial.php") {echo "active";} ?>" data-toggle="dropdown">About</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="about.php" class="dropdown-item">Our Commitment</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Our Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link <?php if($curPage == "contact.php") {echo "active";} ?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <form action="booking.php" method="post">
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select required name="pickuploc" id="pickuploc" class="custom-select px-4 mb-3" style="height: 50px;">
                    <option value="" disabled selected>Pickup Location</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Montreal">Montreal</option>
                    <option value="Calgary">Calgary</option>
                    <option value="Ottawa">Ottawa</option>
                    <option value="Edmonton">Edmonton</option>
                    <option value="Winnipeg">Winnipeg</option>
                    <option value="Mississauga">Mississauga</option>
                    <option value="Vancouver">Vancouver</option>
                    <option value="Brampton">Brampton</option>
                    <option value="Hamilton">Hamilton</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select required name="droploc" id="droploc" class="custom-select px-4 mb-3" style="height: 50px;">
                    <option value="" disabled selected>Drop Location</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Montreal">Montreal</option>
                    <option value="Calgary">Calgary</option>
                    <option value="Ottawa">Ottawa</option>
                    <option value="Edmonton">Edmonton</option>
                    <option value="Winnipeg">Winnipeg</option>
                    <option value="Mississauga">Mississauga</option>
                    <option value="Vancouver">Vancouver</option>
                    <option value="Brampton">Brampton</option>
                    <option value="Hamilton">Hamilton</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input required name="date" type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                        data-target="#date" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="time mb-3" id="time" data-target-input="nearest">
                    <input required name="time" type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                        data-target="#time" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select required name="carid" id="carid" class="custom-select px-4 mb-3" style="height: 50px;">
                    <option disabled selected>Select A Car</option>
                    <option value="1">Mercedes Benz S1</option>
                    <option value="2">Mercedes Benz R3</option>
                    <option value="3">Mercedes Benz S3</option>
                    <option value="4">Mercedes Benz R1</option>
                    <option value="5">Mercedes Benz R2</option>
                    <option value="6">Mercedes Benz S2</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input class="btn btn-primary btn-block mb-3" value="Book" name="book" type="submit" style="height: 50px;">
            </div>
        </div>
    </div>
    </form>
    <!-- Search End -->