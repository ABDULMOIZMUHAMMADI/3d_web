<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logo orb</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
        <div class="main">
        <div class="page">
            <div class="nav" data-aos="fade-down" style="margin-top: 2rem;">
                <div class="logo">
                    <img src="img/logo.gif" alt="Logo">
                    
                </div>
                <div class="navItem">
                    <a href="index.html">Home</a>
                    <a href="logo.html">logo</a>
                    <a href="NFT.html">NFT </a>
                    <a href="SEO.html">SEO</a>
                    <a href="VA.html">VideoAnimation</a>
                    <a href="MA.html">MobileApps</a>
                    <a href="portfolio.html">Portfolio</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
        <canvas></canvas>

    <div class="form" >
        <form action="contact.php" method="post">

            <label for="name" data-aos="fade-right"data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="200">Name :</label><br>

            <input type="text" id="name" name="name" data-aos="fade-right"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="200"><br><br>
            
            <label for="email"data-aos="fade-right"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="200">Email :</label><br>

            <input type="email" id="email" name="email" data-aos="fade-right"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="200"><br><br>
        
            <label for="message" data-aos="fade-right"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="200">Message :</label><br>

            <textarea id="message" name="message" rows="4" cols="50" data-aos="fade-right"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="900" data-aos-delay="200"></textarea><br><br>

            <input type="submit" name="submit" value="Submit" id="submit" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="400">

        </form>
    </div>








        <div class="footer" style=" bottom: 0;"   data-aos="fade-up"
     data-aos-duration="2000">
            <div class="copyright">
                <img src="img/footer-logo.png" alt="">
                <p>© Copyright 2024. <br>
                    LogoOrb <br>
                    All rights reserved.</p>
            </div>
            <div class="footCont">

                <div class="awardBox1" >

                    <div class="awardBoxes">
                        <div class="icon"><img src="img/call_ic.png" alt="phone">
                        <span>Call Us Anytime
                            We Are Here 24/7
                        </span>
                        </div>
                        <span class="number">+1(877)-818-9110</span>
                    </div>
                    
                    <div class="awardBoxes">
                        <div class="icon"><img src="img/chat_ic.png" alt="phone">
                        <span>Call Us Anytime
                            We Are Here 24/7
                        </span>
                        </div>
                        <span class="number">+1(877)-818-9110</span>
                    </div>

                </div>
    
            </div>

            <div class="footSocail">
                <p>FOLLOW US NOW
                    AND GET IN TOUCH</p>
                    <div class="icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest"></i>
                    </div>
            </div>
        </div>


    </div>

</div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js" integrity="sha512-AMl4wfwAmDM1lsQvVBBRHYENn1FR8cfOTpt8QVbb/P55mYOdahHD4LmHM1W55pNe3j/3od8ELzPf/8eNkkjISQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="script.js"></script>


</body>
</html>


<?php
error_reporting(0);
ini_set('display_errors', 0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require 'php mailer/PHPMailer.php';
    require 'php mailer/SMTP.php';
    require 'php mailer/Exception.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'abmoizs19@gmail.com';
        $mail->Password   = 'xuto vbue ogat lrfz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('abmoizs19@gmail.com', '3d_web');
        $mail->addAddress('abdulmoizsheikh53@gmail.com', 'Web Info');

        $mail->isHTML(true);
        $mail->Subject = '3d web contact form';
        $mail->Body    = "Sender name - $name <br> sender Email - $email <br> Message - $message";
     
        $mail->send();
        echo "<div class ='success'> Message Has been sent!!</div> ";
    } catch (Exception $e) {
        echo "<div class ='alert'> Message couldn't be send</div> Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // Form not submitted, do nothing or display the form here
}
?>
