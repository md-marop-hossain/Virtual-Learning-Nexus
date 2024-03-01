<?php
session_start();
include("dbcon.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function resend_email_verify($name, $email, $verify_token){
    
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
    $mail->Subject = 'Resend - Email Verification from Virtual Learning Nexus';

    $email_template = "
    <h2>You have Registered with Virtual Learning Nexus</h2>
    <h5>Verify your email address to Login with the below given link</h5>
    <br/> <br/>
    <a href='http://localhost/Login_Registration_Form_design_PHP_MYsql/verify-email.php?token=$verify_token'>click me</a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}

if(isset($_POST['resend-email-verify-btn']))
{
    if(!empty(trim($_POST['email'])))
    {
       $email = mysqli_real_escape_string($con, $_POST['email']);
       $checkemail_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
       $checkemail_query_run = mysqli_query( $con ,$checkemail_query);

       if(mysqli_num_rows($checkemail_query_run)>0)
       {
          $row = mysqli_fetch_array($checkemail_query_run);
          if($row['verify_status'] == "0")
          {
            $name = $row['name']; 
            $email = $row['email']; 
            $verify_token = $row['verify_token'];

            resend_email_verify($name, $email, $verify_token);
             
             $_SESSION['status'] = "Verification Email Link has been sent to your email address!";
             header("Location: login.php");
             exit(0);
          }
          else{
            $_SESSION['status'] = "Email already verified. Please login!";
            header("Location: resend-email-verification.php");
            exit(0);
          }
       }
       else{
        $_SESSION['status'] = "Email is not registered. Please register now!";
        header("Location: register.php");
        exit(0);
       }
    }
    else{
        $_SESSION['status'] = "Please Enter the Email field";
        header("Location: resend-email-verification.php");
        exit(0);
    }
}

?>