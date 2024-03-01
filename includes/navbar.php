<nav class="navbar navbar-expand-lg bg-body-green nav-padding fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bold ubuntu-bold" href="index.php">Virtual Learning Nexus</a>
        <span class="navbar-text fw-bold" style="color:white;">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav ul-padding ">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link fw-bolder">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link fw-bolder">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link fw-bolder">Payment Status</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link fw-bolder">MY Profile</a></li>

                <?php if(isset($_SESSION['authenticated'])): ?>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link fw-bolder">Logout</a></li>
                <?php endif ?>

                <?php if(!isset($_SESSION['authenticated'])): ?>
                <li class="nav-item custom-nav-item"><a href="login.php" class="nav-link fw-bolder">Login</a></li>
                <li class="nav-item custom-nav-item"><a href="register.php" class="nav-link fw-bolder">Signup</a></li>
                <?php endif ?>


                <li class="nav-item custom-nav-item"><a href="#" class="nav-link fw-bolder">Feedback</a></li>
                <li class="nav-item custom-nav-item"><a href="dashboard.php" class="nav-link fw-bolder">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>