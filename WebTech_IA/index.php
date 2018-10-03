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
		$row ="";
		$results ="";


	if (isset($_POST['save'])) {
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

		
		$query = "INSERT INTO students (id, firstName, lastName, email, gender, dob, tel, residential, course, disability, level, address ) VALUES ('$id', '$firstName', '$lastName', '$email', '$gender', '$dob', '$tel', '$residential', '$course', '$disability', '$level', '$address')";
		$solution = mysqli_query($connection,$query);
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
				<table cellpadding="20px" cellspacing="20px">
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
						<?php
							if(isset($_POST['save']))
							{
								$query = "SELECT * FROM students";
								$run = mysqli_query($connection,$query);
								while ($row = mysqli_fetch_array($run)) {
									echo "<tr><td>" . $row['id'] ."</td><td>".$row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['dob']."</td><td>".$row['tel']."</td><td>".$row['residential']."</td><td>".$row['course']."</td><td>".$row['disability']."</td><td>".$row['level']."</td><td>".$row['address']."</td></tr>";
								}
							}
						?>
						
						
					</tbody>
				</table>
				<form method="POST" action="index.php">
					<div class="row">
						
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="idNumber">ID Number</label>
	    							<input type="text" class="form-control"  placeholder="ID Number" name="id">
	  							</div>
							
						</div>
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="firstName">First Name</label>
	    							<input type="text" class="form-control"  placeholder="First Name" name="firstName">
	  							</div>
							
						</div>
					
					
								<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="lastName">Last Name</label>
	    							<input type="text" class="form-control"  placeholder="Last Name" name="lastName">
	  							</div>
							
						</div>
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="email">Email</label>
	    							<input type="email" class="form-control"  placeholder="Enter Email" name="email">
	  							</div>
							
						</div>
					
					
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="gender">Gender</label><br>
	    							<input type="radio" class=""  name="gender" value="male" checked>Male<br>
	    							<input type="radio" class=""  name="gender" value="female">Female
	  							</div>
							
						</div>
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="dob">Date of Birth</label>
	    							<input type="date" class="form-control"  name="dob">
	  							</div>
							
						</div>
					
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="tel">Mobile Number</label>
	    							<input type="tel" class="form-control"  placeholder="Enter Mobile number" name="tel">
	  							</div>
							
						</div>
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="residential">Residential Status</label><br>
	    							<input type="radio" name="residential"  name="residential" checked>Resident<br>
	    							<input type="radio" name="residential"  name="residential">Non-Resident
	  							</div>
							
						</div>
					
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="course">Course</label>
	    							<input type="text" class="form-control"  placeholder="Enter Course" name="course">
	  							</div>
							
						</div>
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="disability">Disabled?</label><br>
	    							<input type="radio" name="disability"  checked>Yes<br>
	    							<input type="radio" name="disability" >No
	  							</div>
							
						</div>
					
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="email">Level</label>
	    							<input type="number" class="form-control"  placeholder="Enter your level" min="100" max="400" step="100" name="level">
	  							</div>
							
						</div>
						<div class="col-md-6">
							
								<div class="form-group">
	    							<label for="address">Address</label>
	    							<input type="text" class="form-control"  placeholder="Address Here" name="address">
	  							</div>
  							
						</div>
						
					

			<div class="saveBtn">
			  	<button type="submit" name="save" class="btn">Add Student Record</button>
			</div>
			</form>
			</div>
			</div>
			</div>
			</body>
			</html>	

























