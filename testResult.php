<?php
 session_start();
 include 'dbconnect.php';
$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];
$answer9 = $_POST['question-9-answers'];
$answer10 = $_POST['question-10-answers'];
$answer11 = $_POST['question-11-answers'];
$answer12 = $_POST['question-12-answers'];
$answer13 = $_POST['question-13-answers'];
$answer14 = $_POST['question-14-answers'];
$answer15 = $_POST['question-15-answers'];
$answer16 = $_POST['question-16-answers'];
$answer17 = $_POST['question-17-answers'];
$answer18 = $_POST['question-18-answers'];
$answer19 = $_POST['question-19-answers'];
$answer20 = $_POST['question-20-answers'];
$answer21 = $_POST['question-21-answers'];
$answer22 = $_POST['question-22-answers'];
$answer23 = $_POST['question-23-answers'];
$answer24 = $_POST['question-24-answers'];
$answer25 = $_POST['question-25-answers'];
$answer26 = $_POST['question-6-answers'];
$answer27 = $_POST['question-27-answers'];
$answer28 = $_POST['question-28-answers'];
$answer29 = $_POST['question-29-answers'];
$answer30 = $_POST['question-30-answers'];
$totalCorrect = 0;
$subjectIs = $_POST['subjectIs'];
if ($answer1 == "B") {
 $totalCorrect++;
}
if ($answer2 == "A") {
 $totalCorrect++;
}
if ($answer3 == "D") {
 $totalCorrect++;
}
if ($answer4 == "C") {
 $totalCorrect++;
}
if ($answer5 == "D") {
 $totalCorrect++;
}
if ($answer6 == "A") {
 $totalCorrect++;
}
if ($answer7 == "D") {
 $totalCorrect++;
}
if ($answer8 == "A") {
 $totalCorrect++;
}
if ($answer9 == "C") {
 $totalCorrect++;
}
if ($answer10 == "D") {
 $totalCorrect++;
}
if ($answer11 == "B") {
 $totalCorrect++;
}
if ($answer12 == "B") {
 $totalCorrect++;
}
if ($answer13 == "D") {
 $totalCorrect++;
}
if ($answer14 == "C") {
 $totalCorrect++;
}
if ($answer15 == "B") {
 $totalCorrect++;
}
if ($answer16 == "A") {
 $totalCorrect++;
}
if ($answer17 == "A") {
 $totalCorrect++;
}
if ($answer18 == "B") {
 $totalCorrect++;
}
if ($answer19 == "A") {
 $totalCorrect++;
}
if ($answer20 == "B") {
 $totalCorrect++;
}
/*FOR MATHS*/
if ($_POST['subjectIs'] == 'math') {
	
if ($answer21 == "A") {
 $totalCorrect++;
}
if ($answer22 == "D") {
 $totalCorrect++;
}
if ($answer23 == "B") {
 $totalCorrect++;
}
if ($answer24 == "C") {
 $totalCorrect++;
}
if ($answer25 == "A") {
 $totalCorrect++;
}
if ($answer26 == "A") {
 $totalCorrect++;
}
if ($answer27 == "C") {
 $totalCorrect++;
}
if ($answer28 == "C") {
 $totalCorrect++;
}
if ($answer29 == "D") {
 $totalCorrect++;
}
if ($answer30 == "B") {
 $totalCorrect++;
}

}//maths if end

/*FOR BIOLOGY*/
if ($_POST['subjectIs'] == 'biology') {
	
if ($answer21 == "D") {
 $totalCorrect++;
}
if ($answer22 == "C") {
 $totalCorrect++;
}
if ($answer23 == "B") {
 $totalCorrect++;
}
if ($answer24 == "A") {
 $totalCorrect++;
}
if ($answer25 == "D") {
 $totalCorrect++;
}
if ($answer26 == "C") {
 $totalCorrect++;
}
if ($answer27 == "A") {
 $totalCorrect++;
}
if ($answer28 == "C") {
 $totalCorrect++;
}
if ($answer29 == "C") {
 $totalCorrect++;
}
if ($answer30 == "D") {
 $totalCorrect++;
}
}//maths if end

$studentID = $_SESSION['id'];
$query = "INSERT INTO student_marks(student_id,stream,totalcorrect) values('$studentID','$subjectIs','$totalCorrect')";
$result = mysqli_query($dbhandle,$query);
/*"INSERT INTO result( name , mobile ,stream, correct_answer)
				SELECT `student.name`,`student.mobile`,`student_marks.stream`,`student_marks.totalcorrect`
				FROM student JOIN student_marks ON `student.id` = `student_marks.student_id`";*/
$query2 = "SELECT student.`name`,student.`mobile` FROM student WHERE student.`id` = $studentID";
$result2 = mysqli_query($dbhandle,$query2); 
$row = mysqli_fetch_array($result2);
$query3 = "INSERT INTO result( name , mobile ,stream, correct_answer)
			VALUES('".$row['name']."','".$row['mobile']."','$subjectIs','$totalCorrect')";
$result3 = mysqli_query($dbhandle,$query3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Result Page</title>
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
				<div class="sub-header">
					<h2>
						Thankyou, <?php echo ucfirst($_SESSION['studentName']);  ?>
					</h2>
				</div>
			</div>
		</div>

		<div class="panel-body text-center">
			<h2>Your Result is:</h2>
			<h3>Correct <?php echo($totalCorrect);?> Out of 30 total questions</h3>

		</div>
		<!-- class panel body end -->

	</div> <!-- Container Ends	 -->
    <?php }
?>


</body>
</html>