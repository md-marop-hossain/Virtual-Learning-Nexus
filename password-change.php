<?php 
session_start();
$page_title = "Registration Form";

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Change</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <style>
    .button-color {
        background-color: #2c5e7b;
        color: white;
    }
    </style>


</head>

<body>


    <section class="vh-100" style="background-color: #2c5e7b;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class="text-white mb-4">Reset your password</h1>
                    <h4 class="text-white mb-4">Make new password! Secure your account!</h4>

                    <form action="password-reset-code.php" method="POST">


                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">

                                <input type="hidden" name="password_token"
                                    value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">


                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Email Address</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="email" class="form-control form-control-lg"
                                            placeholder="example@example.com"
                                            value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" required />

                                    </div>
                                </div>

                                <hr class="mx-n3">


                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Enter Password</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="new_password" class="form-control form-control-lg"
                                            placeholder="Enter your password" required />

                                    </div>
                                </div>


                                <hr class="mx-n3">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Confirm Password</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="confirm_password" class="form-control form-control-lg"
                                            placeholder="Re-type your password" required />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" name="password_update"
                                        class="btn button-color btn-lg border">Submit to
                                        Change</button>
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

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>





    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js">
    </script>
</body>

</html>