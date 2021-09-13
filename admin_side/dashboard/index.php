<?php

if(isset($_POST['submit1']))
{

	if(($_POST['txtadmin']=="admin") && ($_POST['pass']=="admin"))
	{
		header('location:index_admin1.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}
else
{


}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="loginpage/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="loginpage/css/style.css">
	</head>

	<body>
	    <div class="wrapper">
		   <div class="inner">
				   <div class="image-holder">
					  <img src="loginpage/images/registration-form-6.jpg" alt="">
					</div>
					<form  method="post">
						   <h3>Login Page</h3>
						   <div class="form-row">
							    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
							    <input type="text" name="txtadmin" class="form-control" placeholder="Admin Username" required>
						  </div>
						  <div class="form-row">
							 <label for="your_pass"><i class="zmdi zmdi-lock material-icons-name"></i></label>
							  <input type="Password" name="pass" class="form-control" placeholder="Password" required>
						  </div>
					   		<button type="submit" name="submit1">Sign in </button>
					     	<div class="social_icon">
                           		   <ul class="socials">
	                              		  <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
	                               		 <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
	                               		 <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                           		   </ul>
                        	</div>
					</form>	 	
			</div>
		</div>

		<script src="loginpage/js/jquery-3.3.1.min.js"></script>
		<script src="loginpage/js/main.js"></script>
	</body>
</html>