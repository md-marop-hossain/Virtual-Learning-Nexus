<?php 
session_start();
$page_title = "Registration Form";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    .span-info {
        color: #2c5e7b;
        font-weight: 500;
        font-size: 15px;
    }

    .span-i {
        color: #2c5e7b;
        font-size: 15px;
    }
    </style>
</head>

<body>

    <section class="vh-100" style="background-color: #2c5e7b;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="image/loginpageimg.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">





                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="code.php" method="POST">

                                        <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>

                                        <div class="alert  border" style="background-color: #ffe3b5;">
                                            <h5 class="fw-bolder" style="color: #000000;">
                                                <?= $_SESSION['status']; ?>
                                            </h5>
                                        </div>
                                        <?php
                unset($_SESSION['status']);
                    }
                    ?>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Virtual Learning Nexus</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 fw-bold" style="letter-spacing: 1px;">Let's
                                            Create New
                                            Account</h5>

                                        <div class="form-outline mb-4">


                                            <label class="form-label" for="form2Example17">Name</label>

                                            <input type="text" name="name" id="form2Example17"
                                                class="border form-control form-control-lg" required />

                                        </div>

                                        <div name="text" type="phone" class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Phone Number</label>
                                            <input type="text" name="phone" id="form2Example27"
                                                class="border form-control form-control-lg" required />

                                        </div>

                                        <div type="text" name="email" class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Email Address</label>
                                            <input type="text" name="email" id="form2Example27"
                                                class="border form-control form-control-lg" required />

                                        </div>

                                        <div type="text" name="password" class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="text" name="password" id="form2Example27"
                                                class="border form-control form-control-lg" required />

                                        </div>







                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit"
                                                name="register_btn">SignUP</button>
                                        </div>


                                        <p class="mb-2 pb-lg-2 fw-semibold" style="color: #393f81;">Already have an
                                            account? <a href="login.php" style="color: #393f81;">Login here</a></p>

                                        <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a> -->
                                        <i class="fa-solid fa-circle-info span-i"></i>
                                        <span class="span-info"> To register,
                                            make sure you provide a valid Email Address,
                                            unless you have failed to verify your email account to log in.</span>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>