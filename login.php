<?php 
session_start();

if(isset($_SESSION['authenticated'])){
    $_SESSION['status'] = "You are already Logged In";
    header('Location: dashboard.php');
    exit(0);
}

$page_title = "Login Form";
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
    <title>Login Form</title>

    <style>
    .forgot-password {
        font-weight: 600;
        font-size: 15px;
        color: #075261;

    }

    .register-here {
        font-weight: 600;
        font-size: 15px;
    }

    .resend-p {
        font-weight: 600;
        font-size: 15px;
        color: #1b3729;

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



                                    <form action="logincode.php" method="POST">

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

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input type="text" name="email" id="form2Example17"
                                                class="form-control form-control-lg border" required />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="text" name="password" id="form2Example27"
                                                class="border form-control form-control-lg" required />

                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit"
                                                name="login_now_btn">Login</button>
                                        </div>

                                        <div class="mb-2">
                                            <a class="small  text-muted fw-semibold" href="password-reset.php"><span
                                                    class="forgot-password">Forgot
                                                    password? We're here! No Worries about this...</span></a>
                                        </div>
                                        <div class="">
                                            <p class=" pb-lg-2 fw-semibold" style="color: #393f81;"> <span
                                                    class="register-here">Don't
                                                    have an
                                                    account?</span> <a href="register.php"
                                                    style="color: #393f81;">Register
                                                    here</a>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="mb-2 pb-lg-2" style="color:#393f81;"><span class="resend-p">Did
                                                    not receive your
                                                    verification Email? </span><a href="resend-email-verification.php"
                                                    style="color: #393f81;">
                                                    <span class="resend-p">Resend Verification Email</span>
                                                </a></p>
                                        </div>
                                    </form>

                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="button" class="btn btn-outline-info btn-rounded"
                                            data-mdb-ripple-init data-mdb-ripple-color="dark"><a href="index.php"
                                                style="color:#2c5e7b " class="fw-bolder">Want
                                                To Back Homepage?</a></button>

                                    </div>

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
</body>

</html>