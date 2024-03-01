<?php
session_start();
include('dbcon.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendemail_verify($name, $email, $verify_token)
{
 
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 2; // Enable verbose debug output

    $mail->isSMTP();   
    $mail->SMTPAuth   = true;   

    $mail->Host       = 'smtp.gmail.com';                                       
    // $mail->Username   = 'virtuallearningnexus@gmail.com';                    
    // $mail->Password   = 'cgxf lifh nvid gphj';    
    // $mail->Username   = 'marop.hossain21@gmail.com';                    
    // $mail->Password   = 'sbhn ewze bxco zirs';
    $mail->Username   = 'mdmarophossain2022@gmail.com';                    
    $mail->Password   = 'unqt eyfe hxfu tafw';
       

    $mail->SMTPSecure = "tls";        
    $mail->Port       = 587;                                  

    $mail->setFrom('mdmarophossain2022@gmail.com', $name);
    $mail->addAddress($email);     

    $mail->isHTML(true);                                  
    $mail->Subject = 'Email Verification from Virtual Learning Nexus';

    $email_template = "
    <h2>You have Registered with Virtual Learning Nexus</h2>
    <h5>Verify your email address to Login with the below given link</h5>
    <br/> <br/>
    <a href='http://localhost/VirtualLearningNexus/verify-email.php?token=$verify_token'>click me</a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}

if(isset($_POST["register_btn"]))
{
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $verify_token = md5(rand());

    //Email Exists or not
    $check_email_query = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0)
    {
       $_SESSION['status'] = 'It seems you already have an account on this site. Please try using another email to create a new account.';
       header("Location: register.php");
    }
    else{
        //Insert User / Registered User Data
        $query = "INSERT INTO users (name, phone, email, password, verify_token) VALUES ('$name', '$phone','$email', '$password', '$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
          
            sendemail_verify("$name", "$email", "$verify_token");
            $_SESSION['status'] = 'Registration Successful! Please verify your Email Address';
            header("Location: register.php");
            
        }
        else{
            $_SESSION['status'] = 'Registration Failed';
            header("Location: register.php");
        }
    }
    
}

?>