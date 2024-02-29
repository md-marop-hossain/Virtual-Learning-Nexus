<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome css  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- student testimonial owl slider css  -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">



    <style>
    .stripe {
        background-image: linear-gradient(240deg, #ed213a, #93291e);
        padding: 3rem;
        height: 13rem;
        margin-top: 4rem;
        transform: rotate(10deg);
        z-index: -5;

    }

    a.social-hover:hover {
        padding: 5px 100px;
        text-decoration: none;
        background-color: rgb(95, 93, 92);
    }
    </style>


    <title>Virtual Learning Nexus</title>
</head>

<body>


    <!-- start Navigation -->
    <?php include('includes/navbar.php'); ?>
    <!-- End Navigation -->


    <!-- Start video background -->
    <?php include('includes/videobackgroundsection.php'); ?>
    <!-- End video background -->


    <!-- start text banner  -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">

            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarantee</h5>
            </div>

        </div>
    </div>
    <!-- end text banner  -->


    <!-- Start Most popular course  -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>



        <div class="row">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="image/courseimg/Guitar.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Learn Guiter easy way</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">price: <small><del>&#8377 3000</del></small><span
                                class="font-weight-bolder">&#8377 300</span></p>
                        <div class="d-flex flex-row-reverse"><a href="#"
                                class="btn btn-primary text-white font-weight-bolder float-right ">Enroll</a></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="image/courseimg/Guitar.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Learn Guiter easy way</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">price: <small><del>&#8377 3000</del></small><span
                                class="font-weight-bolder">&#8377 300</span></p>
                        <div class="d-flex flex-row-reverse"><a href="#"
                                class="btn btn-primary text-white font-weight-bolder float-right ">Enroll</a></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="image/courseimg/Guitar.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Learn Guiter easy way</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">price: <small><del>&#8377 3000</del></small><span
                                class="font-weight-bolder">&#8377 300</span></p>
                        <div class="d-flex flex-row-reverse"><a href="#"
                                class="btn btn-primary text-white font-weight-bolder float-right ">Enroll</a></div>
                    </div>
                </div>
            </div>


        </div>



        <div class="text-center m-2">
            <a href="#" class="btn btn-danger btn-sm">
                View All Courses
            </a>
        </div>



    </div>

    <!-- end Most popular course  -->


    <!-- Start contact us  -->
    <div class="container mt-4" id="contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                    <input type="text" class="form-control" name="name" placeholder="Name"> <br>
                    <input type="text" class="form-control" name="subject" placeholder="subject"> <br>
                    <input type="email" class="form-control" name="email" placeholder="E-mail"> <br>
                    <textarea class="form-control" name="message" placeholder="How can we help you?"
                        style="height:150px;"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary" name="submit" value="send"> <br><br>

                </form>
            </div>



            <div class="col-md-4 stripe text-white text-center">
                <h4 class="abc">Virtual Learning Nexus</h4>
                <p>Virtual Learning Nexus, Near Police Camp II, Bokaro, Jharkand - 45674<br> Phone: +41654856<br>
                    www.virtual.com</p>
            </div>


        </div>
    </div>
    <!-- End contact us  -->


    <!-- start students testimonial  -->

    <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
        <h1 class="text-center testyheading p-4"> Student's Feedback </h1>
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <!-- Placeholder content for static demonstration -->
                    <div class="testimonial">
                        <p class="description">Sample feedback content goes here.</p>
                        <div class="pic">
                            <img src="image/stu/student2.jpg" alt="" />
                        </div>
                        <div class="testimonial-prof">
                            <h4>John Doe</h4>
                            <small>Student</small>
                        </div>
                    </div>
                    <!-- Repeat the above structure for additional testimonials -->

                    <!-- Another placeholder content -->
                    <div class="testimonial">
                        <p class="description">Another sample feedback content.</p>
                        <div class="pic">
                            <img src="image/stu/student3.jpg" alt="" />
                        </div>
                        <div class="testimonial-prof">
                            <h4>Jane Doe</h4>
                            <small>Student</small>
                        </div>
                    </div>
                    <!-- Repeat the above structure for additional testimonials -->
                    <!-- Another placeholder content -->
                    <div class="testimonial">
                        <p class="description">Another sample feedback content.</p>
                        <div class="pic">
                            <img src="image/stu/student3.jpg" alt="" />
                        </div>
                        <div class="testimonial-prof">
                            <h4>Jane Doe</h4>
                            <small>Student</small>
                        </div>
                    </div>
                    <!-- Repeat the above structure for additional testimonials -->
                    <!-- Another placeholder content -->
                    <div class="testimonial">
                        <p class="description">Another sample feedback content.</p>
                        <div class="pic">
                            <img src="image/stu/student3.jpg" alt="" />
                        </div>
                        <div class="testimonial-prof">
                            <h4>Jane Doe</h4>
                            <small>Student</small>
                        </div>
                    </div>
                    <!-- Repeat the above structure for additional testimonials -->
                </div>
            </div>
        </div>
    </div>

    <!-- end students testimonial  -->



    <div class="container-fluid bg-danger">
        <!-- Start Social Follow -->
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
    </div> <!-- End Social Follow -->



    <!-- Start About Section -->
    <?php include('includes/aboutsection.php'); ?>
    <!-- End About Section -->




    <!-- start footer  -->
    <?php include('includes/footersection.php'); ?>
    <!-- end footer  -->




    <!-- jquery and bootstrap javascript  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS  -->
    <script src="js/all.min.js"></script>

    <!-- Student testimonial OWl Slider JS  -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>
</body>

</html>