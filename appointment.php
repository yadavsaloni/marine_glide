<!DOCTYPE html>
<html lang="en">

<?php
include("header.php");
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-warning active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Appointment</h4>
                    <h1 class="display-5 mb-4">Make An Appointment To Start Your Dream Project</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">+012 345 6789</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Mail Us Now</p>
                                    <h3 class="mb-0">info@example.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Mobile" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select class="form-select" style="height: 55px;">
                                <option selected>Choose Service</option>
                                <option value="1">Service 1</option>
                                <option value="2">Service 2</option>
                                <option value="3">Service 3</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
        

    <!-- Footer Start -->
   
   <?php
   include("footer.php");
   ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>