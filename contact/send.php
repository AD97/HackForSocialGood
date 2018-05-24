<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mail Confirmation</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="http://www.jsdelivr.com/#!particles.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,300,200" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  

    <!-- Custom styles for this template -->
    <link href="contact.css" rel="stylesheet">
    <style type="text/css">
    
  </style>
  </head>
<body>

 <header class="content_to_hide" style="font-family: 'Quicksand', sans-serif; font-weight: 400;">
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index.html"><img src="../img/Hackathon Logo_FINAL-03.png" width="120"></a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="width: 100%;">
           <ul class="navbar-nav" style="margin-left: 45%;">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">HOME<span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../about-us.html">ABOUT</a>
            </li>  
             <li class="nav-item">
              <a class="nav-link" href="../hackathon.html">HACKATHON</a>
            </li>
             <li class="nav-item">
              <a class="nav-link " href="../calendar.html">CALENDER</a>
            </li>
          
            </ul>
             </div>
             <div class="register-here" style="background-color: #3FA3A3; font-size: 100%; margin-right: 3%; padding: 2px 0 2px 0;">
              <a  style="padding: 10px !important; text-decoration: none; color: white;" href="#">REGISTER</a>

            </div>
          
         
         <div class="spi">
          <a href="https://www.spicinemas.in/"><img src="../img/SPI Cinemas_logo-02.png" width="120"></a>
         </div>
        
      </nav>
    </header>

     <div class="calendar-mobile">


     <nav class="navbar navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index.html"><img src="../img/Hackathon Logo_FINAL-03.png" width="120"></a>

    <div id="mySidebar" class="sidebar">
      <div class="container" style="font-family: 'Quicksand' , sans-serif;">
      <div style="width: 100%; text-align: center; margin-top: 4%;">
      <button class="register-here btn btn-md btn-light" style="border: 3px solid #3FA3A3;  border-radius: 0; font-size: 18px;  width: 80%; color:black; font-weight: bold; "><a href="#">REGISTER</a></button>
    
</div>

<hr style="margin-top: 8%; margin-bottom: 3%;">
 <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
 <div style="text-align: center;">
  <a href="../index.html">HOME</a>
  <hr style="margin-top: 3%; margin-bottom: 3%;">
  <a href="../about-us.html">ABOUT</a>
  <hr style="margin-top: 3%; margin-bottom: 3%;">
  <a href="../hackathon.html">HACKATHON</a>
  <hr style="margin-top: 3%; margin-bottom: 3%;">
  <a href="../calendar.html">CALENDAR</a>
 <hr style="margin-top: 3%; margin-bottom: 20%;">
 <h4 >Follow us on:</h4>
 <div class="social_nav" style=" margin-top: 3%;">
            <a href="https://www.facebook.com/h4sg16/" class="social"><img src="../img/FACEBOOK-01.png" width="30"></a>
             <a href="https://www.instagram.com/hackforsocialgood/" class="social"><img src="../img/INSTAGRAM-01.png" width="30"></a>
             <a href="https://twitter.com/hack4socialgood" class="social"><img src="../img/TWITTER-01.png" width="30"></a>
             <a href="https://www.youtube.com/channel/UCAXmCYGrHeqFcx7p4cgx4Ug" class="social"><img src="../img/YOUTUBE-01.png" width="30"></a> 
  </div>
  </div>
  
  </div>

</div>

<!-- Use any element to open the sidenav -->
<span onclick="openSidebar()"><img src="../img/hamburger.png" width="35"></span>
</nav>




</div>
 

<?php

$Email = $_POST['Email'];
$Message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
                                    // Enable verbose debug output
    $mail->isSMTP(); 
    $mail->Host = 'sg2plcpnl0076.prod.sin2.secureserver.net';    // Must be GoDaddy host name
    $mail->SMTPAuth = true; 
    $mail->Username = 'spicinemas@hackforsocialgood.in';
    $mail->Password = 'Arvind888';
    $mail->SMTPSecure = 'tls';   // ssl will no longer work on GoDaddy CPanel SMTP
    $mail->Port = 587;    // Must use port 587 with TLS                               // TCP port to connect to

    //Recipients
    $mail->setFrom('spicinemas@hackforsocialgood.in','Hackforsocialgood');
    $mail->addAddress('hackathon@spicinemas.in');     // Add a recipient
    

    //body
    $body = '<p>
    <p style="font-size:130%; font-weight:bold;">You have a new query</p>
    <ul style="list-style-type: none;">
        
        <li style="  margin-bottom:1%; margin-top:2%;"><span style="font-weight:bold; font-size:120%;">Email:  </span>' . $Email . '</li>'.
        
        '<li><span style="font-weight:bold; font-size:120%;">Message:  </span>' . $Message . '</li>' . "</p>";
     

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hack For Social Good | Website Query';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();

    echo "";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>

<div class="thanks" style="width: 100%; text-align: center; margin-top:18%;">
<h1 style="font-family:'Oswald',sans-serif; font-weight: 600; color: #3FA3A3; font-size: 250%; ">Thanks for reaching out to us!</h1>
<br>
<p style="font-family: 'Quicksand',sans-serif; font-size: 120%; margin-bottom: 0; ">Do follow us on:</p>
<div>
            <a href="https://www.facebook.com/h4sg16/" class="social"><img src="../img/FACEBOOK-01.png" width="30"></a>
             <a href="https://www.instagram.com/hackforsocialgood/" class="social"><img src="../img/INSTAGRAM-01.png" width="30"></a>
             <a href="https://twitter.com/hack4socialgood" class="social"><img src="../img/TWITTER-01.png" width="30"></a>
             <a href="https://www.youtube.com/channel/UCAXmCYGrHeqFcx7p4cgx4Ug" class="social"><img src="../img/YOUTUBE-01.png" width="30"></a> 
           </div>
</div>


 <script>


    function openSidebar() {
    document.getElementById("mySidebar").style.width = "100%";
    }

    /* Set the width of the side navigation to 0 */
    function closeSidebar() {
        document.getElementById("mySidebar").style.width = "0";
    }

  

    </script>

</body>
</html>
