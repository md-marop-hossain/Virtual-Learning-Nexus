<?php

session_start();
$page_title = "Password Reset Form";

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
                            <h5>Reset Password</h5>
                        </div>
                        <div class="card-body">
                            <form action="password-reset-code.php" method="POST">

                                <div class="form-group mb-3">
                                    <label for="">Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div>

                                <div class="form group">
                                    <button type="submit" name="password_reset_link" class="btn btn-primary">Send
                                        Password Reset Link</button>
                                </div>
                            </form>
                            <hr>
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