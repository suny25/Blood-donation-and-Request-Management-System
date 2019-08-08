<?php
	session_start();
	require 'dbconfig/config.php';
	
	if(!isset($_SESSION['username']))
	{
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD DONOR | HOME</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand" href="index.php"><img src="assets/img/logo blood.png" id="logo"><strong>BLOOD DONOR</strong></a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="myrequest.php"><strong>REQUEST LIST</strong></a></li>
                    <li role="presentation"><a href="mydonor.php"><strong>DONOR LIST</strong> </a></li>
                    <li role="presentation"><a href="criteria.php"><strong>CRITERIA</strong><br></a></li>
                    <li role="presentation"><a href="blood_banks.php"><strong>BLOOD BANKS</strong></a></li>
					<li role="presentation"><a href="profile.php"><strong><?php echo $_SESSION['username']?></strong></a></li>
                </ul>
        </div>
        </div>
    </nav>

<div id="index">
    <div id="promo">
        <div class="jumbotron">
            <h1 class="text-center">We Save Lives </h1>
            <p>Join our cause and help us save more lives. Everyone should have the right to get a blood transfusion. </p>
            <p><a class="btn btn-info btn-lg" role="button" href="about.php">Learn more</a></p>
        </div>
    </div>
    <div class="container site-section" id="welcome">
        <h1>Welcome to Blood Donar</h1>
        <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an efficient and seamless process.Blood Donar is an innovative approach to address global health. We provide&nbsp;immediate access to blood donors. </p>
    </div>
    <div class="dark-section">
        <div class="container site-section" id="why">
            <h1>Join the Cause </h1>
            <div class="row">
                <div class="col-md-4 item"><i class="glyphicon glyphicon-map-marker"></i>
                    <h2>Find Donors in your Area </h2>
                    <p>Get connected in a matter of minutes at zero cost. Our App ships with a smart system that finds the closest blood donors. Our automated blood donation system works efficiently whenever someone needs a blood transfusion. </p>
                </div>
                <div class="col-md-4 item"><i class="glyphicon glyphicon-phone"></i>
                    <h2>Answer to Emergencies </h2>
                    <p>As soon as a new blood request is raised, it is routed among our local volunteer blood donors. We know time matters! So we keep you updated with real-time notifications sent directly to you via&nbsp;<strong>SMS</strong> (text message)
                        or the installed mobile app </p>
                </div>
                <div class="col-md-4 item"><i class="glyphicon glyphicon-heart-empty"></i>
                    <h2>You are someone's Hero </h2>
                    <p>In as little as few minutes, you can become someone's unnamed, unknown, but all-important Hero. Saving a life is a noble work that starts very simply and easily. Donate Blood every form of contribution you make is important, valued
                        and essential in our shared mission to save lives. </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="index.php">Blood Donar</a></h3>
                <p class="links"><a href="request.php">Pull Request</a><strong> · </strong><a href="donate.php">Donate Blood</a><strong> · </strong><a href="about.php">About</a></p>
                <p class="company-name">Blood Donar © 2019 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Railway Schoool Near Maligaon</span> Guwahati, Assam,India</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@blooddonar.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an efficient and seamless process. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a>
				<a href="logout.php"><i class="fa fa-user-circle-o"></i></a>
				
				</div>
            </div>
        </div>
    </footer> 

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    
</body>

</html>