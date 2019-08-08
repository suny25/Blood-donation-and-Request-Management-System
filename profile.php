<?php
	require 'dbconfig/config.php';
	session_start();
	
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
    <title>My Profile</title>
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
                    <<li role="presentation"><a href="profile.php"><strong><?php echo $_SESSION['username']?></strong></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            
        </div>
        <form>
            <div class="row profile-row">
                <div class="col-md-4">
                    <div class="form-control">
                        <div class="avatar-bg center"></div>
                    </div><?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">';?></div>
                <div class="col-md-8" style="margin-bottom:40px;">
                    <h1>Profile </h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group"><label class="control-label">Full name : </label><?php echo $_SESSION['name']?></div>
                        </div>
                    </div>
                    <div class="form-group"><label class="control-label">Email :</label><?php echo $_SESSION['email']?></div>
                    <div class="form-group"><label class="control-label">Address :-</label><?php echo $_SESSION['address']?></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group"><label class="control-label">Contact : </label><?php echo $_SESSION['phone_no']?></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-right"><a class="btn btn-default form-btn" role="button" href="request.php" type="submit" style="background-color:rgb(249,249,251);color:rgb(8,8,8);"><strong>PULL REQUEST</strong></a><a class="btn btn-danger form-btn" role="button"
                                href="donate.php" type="reset" style="background-color:rgb(252,250,250);color:rgb(11,11,11);"><strong>DONATE BLOOD</strong></a></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation ">
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
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a><a href="logout.php"><i class="fa fa-user-circle-o"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    
</body>

</html>