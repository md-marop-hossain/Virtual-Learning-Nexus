<?php 
include('authentication.php');

$page_title = "Dashboard";

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
            <div class="row">
                <div class="col-md-12 ">

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

                    <div class="card">
                        <div class="card-header">
                            <h4>User Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <h4>Access when you are logged in</h4>
                            <hr>
                            <h5>Username: <?= $_SESSION['auth_user']['username']; ?></h5>
                            <h5>Email ID: <?= $_SESSION['auth_user']['email']; ?></h5>
                            <h5>Phone Number: <?= $_SESSION['auth_user']['phone']; ?></h5>
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