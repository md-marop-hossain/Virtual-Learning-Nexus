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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    .info-p {
        font-size: 12px;
        color: #136c88;
    }

    .alegreya-sans-bold {
        font-family: "Alegreya Sans", sans-serif;
        font-weight: 700;
        font-style: normal;
    }
    </style>

    <script>
    // Check if localStorage is supported before using it
    function isLocalStorageSupported() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

    // Function to handle form submission and store data in local storage
    function handleSubmit() {
        let name = document.forms["registerForm"]["name"].value;
        let phone = document.forms["registerForm"]["phone"].value;
        let email = document.forms["registerForm"]["email"].value;

        // Store data in local storage
        localStorage.setItem("name", name);
        localStorage.setItem("phone", phone);
        localStorage.setItem("email", email);
    }

    // Function to populate form fields with data from local storage on page load
    function populateFormFields() {
        let name = localStorage.getItem("name");
        let phone = localStorage.getItem("phone");
        let email = localStorage.getItem("email");

        // Populate form fields
        document.forms["registerForm"]["name"].value = name || "";
        document.forms["registerForm"]["phone"].value = phone || "";
        document.forms["registerForm"]["email"].value = email || "";
    }



    // Function to validate form
    function validateForm() {
        let name = document.forms["registerForm"]["name"].value;
        let phone = document.forms["registerForm"]["phone"].value;
        let email = document.forms["registerForm"]["email"].value;
        let password = document.forms["registerForm"]["password"].value;

        // Regular Expressions for Validation
        let mobileRegex = /^\+?(88)?0?1[3456789][0-9]{8}\b/i;
        let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i;

        let isValid = true; // Start with the assumption that the form is valid

        // Name Validation
        if (name.trim() === "") {
            alert("Name cannot be empty.");
            isValid = false;
        }

        // Phone Number Validation
        if (!mobileRegex.test(phone)) {
            alert("Please enter a valid phone number.");
            isValid = false;
        }

        // Email Validation
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            isValid = false;
        }

        // Password Validation
        if (password.length < 8 || password.length > 32) {
            alert("Password must be between 8 and 32 characters long.");
            isValid = false;
        }

        // If validation is successful, call the handleSubmit function
        if (isValid) {
            handleSubmit();
        }

        return isValid; // Return whether validation was successful
    }


    // Check if localStorage is supported before using it
    if (isLocalStorageSupported()) {
        window.onload = populateFormFields;
    }
    </script>



</head>

<body>

    <section class="" style="background-color: #2c5e7b;">
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




                                    <form action="code.php" method="POST" name="registerForm"
                                        onsubmit="return validateForm()" id="form">

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

                                        <!-- form first div start  -->

                                        <div class="form-outline mb-4 form-control">


                                            <label class="form-label" for="form2Example17">Name</label>

                                            <input type="text" name="name" id="form2Example17"
                                                class="border form-control form-control-lg usernameinput" required />


                                            <p class="info-p alegreya-sans-bold mt-2"><span><i
                                                        class="fa-solid fa-circle-info pl-2"></i></span><span
                                                    class="pl-2">Your
                                                    full
                                                    name is
                                                    required. Please enter your first and
                                                    last name (and
                                                    middle name, if applicable)</span></p>

                                        </div>

                                        <!-- form first div end  -->

                                        <div name="text" type="phone" class="form-outline mb-4 form-control">
                                            <label class="form-label" for="form2Example27">Phone Number</label>
                                            <input type="text" name="phone" id="form2Example27"
                                                class="border form-control form-control-lg phoneinput" required />

                                            <p class="info-p alegreya-sans-bold mt-2"><i
                                                    class="fa-solid fa-circle-info"></i>Provide a valid
                                                Bangladeshi phone number
                                                <br>
                                                <i class="fa-solid fa-circle-info"></i>Format: The number
                                                should start with an optional '+88' or
                                                '0', followed
                                                by the correct mobile network code (e.g., 017..., 015...), and then an
                                                8-digit number.
                                            </p>

                                        </div>





                                        <div type="text" name="email" class="form-outline form-control mb-4">
                                            <label class="form-label" for="form2Example27">Email Address</label>
                                            <input type="text" name="email" id="form2Example27"
                                                class="border form-control form-control-lg emailinput" required />
                                            <p class="info-p alegreya-sans-bold mt-2"><i
                                                    class="fa-solid fa-circle-info"></i>Enter a valid email
                                                address. The email should follow the
                                                standard format
                                                (example: [abc@xyz.com]).</p>
                                        </div>




                                        <div type="text" name="password" class="form-outline mb-4 form-control">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="password" name="password" id="form2Example27"
                                                class="border form-control form-control-lg passwordinput" required />

                                            <p class="info-p alegreya-sans-bold mt-2"><i
                                                    class="fa-solid fa-circle-info"></i>Choose a strong
                                                password. It must be between 8 and 32
                                                characters in
                                                length ,<br>
                                                <i class="fa-solid fa-circle-info"></i>We recommend using
                                                a mix of: Uppercase and lowercase
                                                letters, numbers,
                                                and special symbols for better security
                                            </p>
                                        </div>



                                        <div class="pt-1 mb-4">

                                            <button class="btn btn-dark btn-lg btn-block" type="submit"
                                                name="register_btn">SignUP</button>
                                        </div>


                                        <p class="mb-2 pb-lg-2 fw-semibold" style="color: #393f81;">Already have an
                                            account? <a href="login.php" style="color: #393f81;">Login here</a></p>


                                        <i class="fa-solid fa-circle-info span-i"></i>
                                        <span class="span-info alegreya-sans-bold"> To register,
                                            make sure you provide a valid Email Address,
                                            unless you have failed to verify your email account to log in.</span>
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