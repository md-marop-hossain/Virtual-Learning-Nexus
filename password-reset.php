<?php

session_start();
$page_title = "Password Reset Form";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset Form</title>


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }
    </style>

</head>

<body>


    <section class="h-100 h-custom" style="background-color: #2c5e7b;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="image/password-reset-pic.png" style="height: 400px; width: 100px" class="w-100"
                            style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-2 pb-md-0 mb-md-5 px-md-2">Reset Password</h3>

                            <form class="px-md-2" action="password-reset-code.php" method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Enter Your Email Address</label>
                                    <input type="text" name="email" id="form3Example1q" class="form-control border"
                                        required />

                                </div>



                                <div>
                                    <button type="submit" name="password_reset_link" class="btn btn-info btn-rounded "
                                        data-mdb-ripple-init>Send
                                        Password Reset Link</button>
                                </div>

                                <div class="d-flex justify-content-end mt-3">
                                    <button type="button" class="btn btn-outline-info btn-rounded" data-mdb-ripple-init
                                        data-mdb-ripple-color="dark"><a href="index.php" style="color:#2c5e7b "
                                            class="fw-bolder">Want
                                            To Back Homepage?</a></button>

                                </div>


                                <div>
                                    <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>

                                    <div class="alert  border mt-4" style="background-color: #096a7f;">
                                        <h6 class="fw-bolder" style="color: white;">
                                            <?= $_SESSION['status']; ?>
                                        </h6>
                                    </div>
                                    <?php
                unset($_SESSION['status']);
                    }
                    ?>
                                </div>


                            </form>

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