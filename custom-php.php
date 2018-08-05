<?php
 session_start();
 include 'dbconnect.php';
 $action = $_POST['action'];
 if ($action == 'register-action') {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$schoolName = $_POST['schoolName'];
	$mobile = $_POST['mobile'];
	$rollno = $_POST['rollno'];
	$fathername = $_POST['fathername'];
	$name = $_POST['name'];
	$hashedPW = hash('sha256', $password);
	if (isset($_POST['username'])) {
	 	$sql = "SELECT * FROM student WHERE username = '".$username."'";
	 	$result=mysqli_query($dbhandle,$sql);
		if (mysqli_num_rows($result) > 0) {	
			$responseArray = ["success" => false, "data" => "Student already exists"];
            echo json_encode($responseArray);
            die;
        }else{
	 		$insertData = mysqli_query($dbhandle,"INSERT INTO student(username,email,password,school,mobile,rollno,fathername,name)
													VALUES ('$username','$email','$hashedPW','$schoolName','$mobile','$rollno','$fathername','$name')");

	 		if($insertData){
	 			$responseArray = ["success" => true, "data" => "Registration Successful, Login to continue."];
            	echo json_encode($responseArray);
            	die;
	 		}
	 		else {
	 			$responseArray = ["success" => false, "data" => "Unable to add Information to database."];
            	echo json_encode($responseArray);
            	die;
	 		}	 		
        }						
	}
 	die;
 }

if ($action == 'login-action') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashedPW = hash('sha256', $password);
 	$sql = "SELECT * FROM student WHERE username='$username'"; 	
	$result = mysqli_query($dbhandle, $sql);
	$row = mysqli_fetch_assoc($result);
	if($row['password'] == $hashedPW){
		$responseArray = ["success" => true, "data" => "Login Successful"];
		echo json_encode($responseArray);
		$_SESSION['username'] = $row['username'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['studentName'] = $row['name'];
		 die;
	} else {
		$responseArray = ["success" => false, "data" => "Incorrect username or password"];        
		echo json_encode($responseArray);
		die;
	}
}
die;
mysqli_close($dbhandle);
?>