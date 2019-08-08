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
    <title>LIST OF BLOOD REQUEST</title>
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
                    <li role="presentation"><a href="profile.php"><strong><?php echo $_SESSION['username']?></strong></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div style="margin:60px 0px 0px;padding:40px;height:400px;background-image:url(&quot;assets/img/background for blood donar website.png&quot;);background-size:cover;background-repeat:no-repeat;background-position:center;">
        <h1 class="text-center">LIST OF REQUESTED BLOOD. BE A DONOR TO SAVE LIFE.</h1>
       
	   <form class="myform" action="myrequest.php" method="post">
        <div class="form-group" style="height:200px;">
            <div class="row" style="height:95px;max-width:100%;margin-top:33px;margin-left:190px;">
                <div class="col-md-4 item">
                    <p style="padding:10px;padding-right:30PX;width:400px;"><strong>SELECT BLOOD GROUP :-</strong></p>
                </div>
                <div class="col-md-4 item" style="margin-left:90px;"><select style="height:42px;padding:10px;margin:0px 0px 15px 20px;width:250px;" class="bloodgroup" required><option  selected="">Select Blood Group</option><option value="A+ve">A+ve</option><option value="A-ve">A-ve</option><option value="B+ve">B+ve</option><option value="B-ve">B-ve</option><option value="AB+ve">AB+ve</option><option value="AB-ve">AB-ve</option><option value="O+ve">O+ve</option><option value="O-ve">O-ve</option></select></div>
            </div>
			<button class="btn btn-info view_data" style="margin-left:500px;margin-top:100px;" type="button" name="view" value="view"><strong>Search</strong></button>	
			</div>
		</form>	
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
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a><a href="logout.php"><i class="fa fa-user-circle-o"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
   
</body>

</html>


<div id="dataModal" class="modal fade">  
      <div class="modal-dialog" style="width:70%">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Person Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail" style="height: 350px; overflow-y: scroll;">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>

	<script>
			$(document).ready(function(){
					var selectedBloodGroup;
					$("select.bloodgroup").change(function(){
							selectedBloodGroup = $(this).children("option:selected").val();
							//alert("You have selected the country - " + selectedBloodGroup);
					});

					$('.view_data').click(function(){

						$.ajax({
							url:"select1.php",
							method:"post",
							data:{selectedBloodGroup:selectedBloodGroup},
							success:function(data){
								 $('#employee_detail').html(data);
								 $('#dataModal').modal("show");
							}
						});

					});
			});
	</script>