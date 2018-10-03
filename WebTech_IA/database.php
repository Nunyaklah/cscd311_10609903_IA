<?php 
	//initialize variables
		$id = "";
		$firstName = "";
		$lastName = "";
		$email = "";
		$gender = "";
		$dob = "";
		$tel = "";
		$residential = "";
		$course = "";
		$disability = "";
		$level = "";
		$address = "";
//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'school');

	//if add records button is clicked
	if(isset($_POST['save'])){
		$id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$tel = $_POST['tel'];
		$residential = $_POST['residential'];
		$course = $_POST['course'];
		$disability = $_POST['disability'];
		$level = $_POST['level'];
		$address = $_POST['address'];

		$query = "INSERT INTO records (id, firstName, lastName, email, gender, dob, tel, residential, course, disability, level, address ) VALUES ('$id', '$firstName', '$lastName','$email', '$gender', '$dob', '$tel', '$residential', '$course', '$disability', '$level', '$address')";
		mysqli_query($db, $query);
		header('location: index.php'); // redirection

		
	}





?>