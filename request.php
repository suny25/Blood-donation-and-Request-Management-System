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
    <title>PULL REQUEST</title>
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
    <div style="margin:60px 0px 0px;padding:40px;height:1500px;background-image:url(&quot;assets/img/background for blood donar website.png&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
        <h1 class="text-center">APPLICATION FOR PULL REQUEST</h1>
		<form class="myform" action="request.php" method="post">
			  <div class="form-group" style="margin-left:0px;">
        <div id="formdiv">
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Full Name :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" type="text" name="fullname" placeholder="Name" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Contact number :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" type="tel" name="phone_no" placeholder="phone_no" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Patient Name :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" type="text" name="patientname" placeholder="Patient Name" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-10 col-md-offset-1"><select style="width:250px;height:42px;margin-left:0px;font-family:Roboto, sans-serif;" name="relation" required><option value="" selected="">Select Relation</option><option value="Self">Self</option><option value="Father">Father</option><option value="Mother">Mother</option><option value="Brother">Brother</option><option value="Sister">Sister</option><option value="Husband">Husband</option><option value="Wife">Wife</option><option value="Daughter">Daughter</option><option value="Son">Son</option><option value="Uncle">Uncle</option><option value="Aunt">Aunt</option><option value="Grandparents">Grandparents</option><option value="Other">Other</option></select></div>
            </div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Date of Requirement of Blood :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" input type="date" name="dorob" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-10 col-md-offset-1"><select style="width:250px;height:42px;margin-left:0px;font-family:Roboto, sans-serif;" name="bloodgroup" required><option value="" selected="">Select Blood Group</option><option value="A+ve">A+ve</option><option value="A-ve">A-ve</option><option value="B+ve">B+ve</option><option value="B-ve">B-ve</option><option value="AB+ve">AB+ve</option><option value="AB-ve">AB-ve</option><option value="O+ve">O+ve</option><option value="O-ve">O-ve</option></select></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-10 col-md-offset-1"><select style="width:250px;height:42px;margin-left:0px;font-family:Roboto, sans-serif;" name="statename" required><option value="" selected="">Select State Name</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Meghalaya">Meghalaya</option><option value="Manipur">Manipur</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Sikkim">Sikkim</option><option value="Tripura">Tripura</option></select></div>
            </div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your City Name / District :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" type="text" name="cityname" placeholder="City Name / District" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter Hospital Name and Comment (if any) :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" type="text" name="hos_name" placeholder="Hospital Name" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-4 col-md-offset-4 col-xs-12 col-xs-offset-0" style="width:500px;"><button class="btn btn-default btn-lg" name="request_submit" type="submit" style="margin-left:16px;">Submit </button></div>
            </div>
        </div>
    </div>
	</form>
        </div>
		
	<?php
		$username=$_SESSION["username"];
		$query1 = "select * from userinfotable where username='$username'";
		$result = mysqli_query($con,$query1);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$id = $row["id"];
	
		if(isset($_REQUEST['request_submit']))
		{
			$fullname=$_REQUEST["fullname"];
			$phone_no=$_REQUEST["phone_no"];
			$patientname=$_REQUEST["patientname"];
			$relation=$_REQUEST["relation"];
			$dorob=$_REQUEST["dorob"];
			$bloodgroup=$_REQUEST["bloodgroup"];
			$statename=$_REQUEST["statename"];
			$cityname=$_REQUEST["cityname"];
			$hos_name=$_REQUEST["hos_name"];
			$query2 = "insert into request(fullname,phone_no,patientname,relation,dorob,bloodgroup,statename,cityname,hos_name,user_id) value('$fullname','$phone_no','$patientname','$relation','$dorob','$bloodgroup','$statename','$cityname','$hos_name','$id')";
			$query_run2 = mysqli_query($con,$query2);
			
			if($query_run2)
				{
					echo '<script type="text/javascript"> alert("Request Application is submitted !!") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error !!")</script>';
				}
		}
	?>
		
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
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a><a href="logout.php"><i class="fa fa-user-circle-o"></i></a></div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>