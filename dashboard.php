<?php
session_start(); // Starting Session
// registration php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--  CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>	
<?php include 'header.php'; ?>
<?php
	if(!isset($_SESSION['username'])){ 
		header("location: index.php");
?>
		
	<?php }else{ ?>
	<div class="container">

		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>
					Welcome, <?php echo ucfirst($_SESSION['studentName']); ?>
				</h2>
			</div>
			<div class="col-sm-12 text-center">
				<h3>
					21-April-2018 | Genius Mind Exam | PGOI
				</h3>
			</div>
		</div>

		<div class="panel-body text-center">
			<h3>Choose your Stream to proceed to Exam</h3>
				<div class="pcbButton">
					<a  href="examPage.php?subjectTest=biology">
					<button id="toPCB" class="btn btn-success">PCB</button>
					</a>
				</div>

				<div class="pcmButton">
					<a  href="examPage.php?subjectTest=math">
					<button id="toPCM" class="btn btn-warning">PCM</button>
					</a>
				</div>

		</div>
		<!-- class panel body end -->

	</div> <!-- Container Ends	 -->
    <?php }
?>


</body>
</html>