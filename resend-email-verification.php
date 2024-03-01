<?php

session_start();
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
    .resend-button {
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        display: block;


    }
    </style>

</head>

<body>



    <section class="vh-100" style="background-color: #2c5e7b;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">

                                    <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color:#32506c">Not
                                        Verified Yet? Resend
                                        Confirmation</p>

                                    <form class="mx-1 mx-md-4" action="resend-code.php" method="POST">


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">
                                                    Enter your email here...</label>
                                                <input type="text" name="email" id="form3Example3c"
                                                    class="form-control border" />
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="resend-email-verify-btn" class="btn btn-info"
                                                data-mdb-ripple-init>Resend
                                                Email</button>
                                        </div>

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

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="image/resend-email03.jpg" class="img-fluid"
                                        style="height: 250px; width: 300px" alt="Sample image">

                                </div>
                            </div>
                        </div>
                        <a href="index.php" type="button" class="btn btn-outline-info mb-3 resend-button"
                            data-mdb-ripple-init data-mdb-ripple-color="dark">Back To Homepage</a>
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