<?php
session_start(); // Starting Session
// registration php
include 'dbconnect.php';
if (isset($_SESSION['username'])) {
	header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login/Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="js/custom-js.js"></script>
	<!--Form CSS-->
	<link rel="stylesheet" type="text/css" href="css/form.css">
	
</head>
<body>
	<div class="container">
    	<div class="row">
    		<div class='col-md-12'>
    			<img src="img/welcomeLogo.png" class="welcomeLogo">
    		</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<!--Heading login/register-->
					<div class="panel-heading">
						<div class="row">							
							<div class="col-xs-6" >
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6" >
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<!--!!!!!!!!!!!!!!!!!!!!!!!!!Panle body start!!!!!!!!!!!!!!!-->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="usernameLogin" class="form-control" placeholder="username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="login_password" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login_submit" id="login-submit" class="form-control btn btn-login" value="Submit">
											</div>
										</div>
									</div>
								</form>

								<form id="register-form"  name="registration" style="display: none;" >
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" value="">
									</div>
									<div class="form-group">
										<input type="text" name="username" id="userName"  class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="text" name="School Name" id="schoolName"  class="form-control" placeholder="School Name" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="">
									</div>									
									<div class="form-group">
										<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number(10 digit)" value="">
									</div>									
									<div class="form-group">
										<input type="text" name="rollno" id="rollno" class="form-control" placeholder="Roll Number" value="">
									</div>									
									<div class="form-group">
										<input type="text" name="fathername" id="fathername" class="form-control" placeholder="Father's Name" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit"  name="register_submit" id="register-submit" class="form-control btn btn-register" value="submit">
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class=" message col-md-6 col-md-offset-3">	
					<div id="error_message" class="error_message alert alert-danger" style="display: none; width: 100%;"></div>
						</div>
					</div>
				</div>
			</div>

	</div>
	
</body>
<script type="text/javascript" src="js/main-js.js"></script>
</html>