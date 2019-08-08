<?php
	require 'dbconfig/config.php'; 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
	<script type="text/javascript">
		function PreviewImage() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
			
			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		};
	</script>	
	
</head>

<body style="padding-top:100px;">
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
					<li role="presentation"><a href="login.php"><strong>LOG IN</strong></a></li>
                </ul>
        </div>
        </div>
    </nav>
	<form class="myform" action="signup.php" method="post" enctype="multipart/form-data">
    <div class="form-group" style="margin-left:0px;">
        <div id="formdiv">
		  <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
			<center>
				<h2>Registration Form</h2>
				<div class="col-md-4 relative" style="margin-left:290px;margin-bottom:30px;">
                    <div class="avatar">
                        <img id="uploadPreview" src="assets/img/avatar.jpg" class="avatar" style="width:300px;"/>
                    </div><input type="file" id="imglink" accept=".jpg,.jpeg,.png" required="" class="form-control" name="imglink" onchange="PreviewImage();"/></div>
			</center>
			</div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Name :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" class="inputvalues" type="text" name="name" placeholder="Full Name" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Phone number :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" class="inputvalues" type="tel" name="phone_no" placeholder="phone_no" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Email-Id :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" class="inputvalues" type="email" name="email" placeholder="Email-Id" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
			<div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Address :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" class="inputvalues" type="text" name="address" placeholder="Address" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Enter your Username :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" class="inputvalues" type="text" name="username" placeholder="Username" style="margin-left:0px;font-family:Roboto, sans-serif;" required></div>
            </div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-8 col-md-offset-1">
                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Set Password :</strong></p>
                </div>
                <div class="col-md-10 col-md-offset-1"><input class="form-control" class="inputvalues" type="password" name="password" placeholder="Password" required></div>
            </div>
            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                <div class="col-md-4 col-md-offset-4 col-xs-12 col-xs-offset-0" style="width:500px;"><button class="btn btn-default btn-lg" type="reset" style="font-family:Roboto, sans-serif;">Clear </button><button class="btn btn-default btn-lg" name="submit_btn" type="submit" id="signup_btn" style="margin-left:16px;">Submit </button></div>
            </div>
        </div>
    </div>
	</form>
	
	<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Submit button clicked") </script>';
			
			$name = $_POST['name'];
			$phone_no = $_POST['phone_no'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$address = $_POST['address'];
			
			$img_name = $_FILES['imglink']['name'];
			$img_size = $_FILES['imglink']['size'];
			$img_tmp = $_FILES['imglink']['tmp_name'];
			
			$directory = 'uploads/';
			$target_file = $directory.$img_name;
		
			$query = "select * from userinfotable WHERE username='$username'";
			$query_run = mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				// there is already a user with the same username
				echo '<script type="text/javascript"> alert("User already exists ... Try another username") </script>';
			}
			else if(file_exists($target_file))
			{
				echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file")</script>';
			}
			else if($img_size>2097152)
			{
				echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file")</script>';
			}
			else
			{
				move_uploaded_file($img_tmp,$target_file);
				$query= "insert into userinfotable(name,phone_no,email,username,password,address,imglink) values('$name','$phone_no','$email','$username','$password','$address','$target_file')";
				$query_run = mysqli_query($con,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User Registered .. Go to login page to login") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error !!")</script>';
				}
			}
			
		}
	?>
	
    <div class="container">
        <div style="max-width:100%;"></div>
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
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    
</body>

</html>