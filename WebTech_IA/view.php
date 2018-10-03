<?php
	include("db.php");

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


	if (isset($_POST['save'])) {
		$name = $_POST['id'];
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
}

		

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 p-3 mb-2 bg-dark text-white fixed-left" style="height:650px;">
				<ul class="list-group" style="color: black; background-color: transparent;">
  					<a href="index.php"><li class="list-group-item">Add Student</li></a>
  					<a href="view.php"><li class="list-group-item">View Records</li></a>
  					<a href="update.php"><li class="list-group-item">Update Record</li></a>
  					<a href="delete.php"><li class="list-group-item">Delete Student Record</li></a>
				</ul>
			</div>
			<div class="col-md-10">
				<div class="row" style="background-color: grey;">
					<div class="col-md-3">
						<p>Admin</p>
					</div>
					<div class="col-md-3">
						
					</div>
					<div class="col-md-3">
						
					</div>
					<div class="col-md-3">
						<p>Log out</p>
					</div>
				</div>
				<div class="form-group">
						<form>
							<label>Search</label>
							<input type="Search" name="search" class="form-control">
						</form>
					</div>
				<table cellpadding="20px">
					<thead>
						<tr>
							<th>ID number</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Mobile Number</th>
							<th>Residential Status</th>
							<th>Course</th>
							<th>Disability</th>
							<th>Level</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						
</tbody>
</table>


</div>
</div>
</div>
</body>
</html>
