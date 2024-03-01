<?php 
session_start();
$page_title = "Registration Form";

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                    <div class="alert alert-success">
                        <h5><?= $_SESSION['status']; ?></h5>
                    </div>
                    <?php
                unset($_SESSION['status']);
                    }
                    ?>

                    <div class="card shadow">
                        <div class="card-header">
                            <h5>Change Password</h5>
                        </div>
                        <div class="card-body">
                            <form action="password-reset-code.php" method="POST">

                                <input type="hidden" name="password_token"
                                    value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">

                                <div class="form-group mb-3">
                                    <label for="">Email Address</label>
                                    <input type="text" name="email"
                                        value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>"
                                        class="form-control" placeholder="Enter Your Email Address">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">New Password</label>
                                    <input type="text" name="new_password" class="form-control"
                                        placeholder="Enter New Password">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="text" name="confirm_password" class="form-control"
                                        placeholder="Enter your Password">
                                </div>

                                <div class="form group">
                                    <button type="submit" name="password_update" class="btn btn-success w-100"> Update
                                        Password
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>