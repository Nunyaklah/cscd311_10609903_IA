<?php
   include("db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>

<!DOCTYPE html>
<html>
<head>
	<title>School Management System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-6" style="padding: 0; margin: 0;">
  				<div class="jumbotron">
  					<h1 class="display-4">Welcome, to School Management System</h1>
  					<p class="lead">This is a simple web application to help in the management of school records.</p>
  					<hr class="my-4">
  					<p>Its functions include adding records, updating records, deleting records and viewing your entire database.</p>
				</div>
  			</div>
  			<div class="col-md-6">
  				<form>
  					<div class="form-group" style="padding-top: 70px;">
    					<label for="email">Email address</label>
    					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  					</div>
  					<div class="form-group">
    					<label for="password">Password</label>
    					<input type="password" class="form-control" id="password" placeholder="Password">
  					</div>
  					<div class="form-group form-check">
    					<input type="checkbox" class="form-check-input" id="exampleCheck1">
    					<label class="form-check-label" for="exampleCheck1">Check me out</label>
  					</div>
  					<a href="index.php" class="btn btn-primary">Login</a>
				</form>
  				</div>
			</div>
	</div>






















</body>
</html>