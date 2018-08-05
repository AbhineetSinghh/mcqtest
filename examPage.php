<?php
session_start(); // Starting Session
// registration php
include 'dbconnect.php';
if(!isset($_SESSION['username'])){ 
	header("location: index.php");
}
$subject = $_GET['subjectTest'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exam</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--  CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/examPage-css.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.flipcountdown.css" />
</head>
<body>	
<div class="container">
	<div class="row">
	<?php include 'header.php'; 
	?>
	</div>
	<!-- ====================options and timer================ -->
	<nav class="navbar navbar-default" id="optionsBar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#physicsHead">Physics</a>
          </li>
          <li><a href="#chemisrtyHead">Chemistry</a>
          </li>
          <li><a href="#subjectHead"><?php echo ucfirst($subject); ?></a>
          </li>
        </ul>
        <ul class=" navbar-nav nav navbar-right">
			<li >
				<a>Exam will be submitted automatically when time is over.</a>
			</li>
			<li class="theTimerLi">
				<a>
					<div id="cdTimer" class="timerClass"></div>
				</a>
			</li>
		</ul><!--navbar right end-->
      </div>
    </div>
  </nav>
	<!-- ===================================================== -->
<!-- 	<div class="row">
		<div class="col-md-12">
			<div>Examp will be submitted automatically when time is over.</div>
			<div id="cdTimer" class="timerClass"></div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-12 column">
		<form action="testResult.php" method="post" id="mcqForm">
			<?php echo '<input type="hidden" name="subjectIs" value="'.$subject.'">' ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" id="physicsHead"> Physics</h3>
				</div>

				<div class="panel-body">
					<ol>
						<?php include 'qphysics.php'; ?>
					</ol>

				</div>
				
				<div class="panel-heading">
					<h3 class="panel-title" id="chemisrtyHead"> Chemistry</h3>
				</div>
				<div class="panel-body">
					<ol>
						<?php include 'qchemistry.php'; ?>
					</ol>
				</div>
				
				<div class="panel-heading">
					<h3 class="panel-title" id="subjectHead"> <?php echo ucfirst($subject); ?></h3>
				</div>
				<div class="panel-body">
					<ol>
						<?php include 'q'.$subject.'.php'; ?>
					</ol>
				</div>

				<div class="panel-footer">
					<input type="submit" id="mcqFormSubmit" name="submit" class="btn btn-success btn-lg">
				</div>

			</div>
			<div class="col-md-1 column"> </div>
		</form>
		</div>
	</div>
</div>
</body>
	<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>
	<script type="text/javascript" src="js/examPage-js.js"></script>
</html>