<?php
	include("db.php");
	$name = "";

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$query = "INSERT INTO dummy (name) VALUES ('$name')";

		$result = mysqli_query($connection, $query);

		if($result) {
			echo "Dummy worked";
		} else {
			echo "Dummy failed";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dummy</title>
	</head>
	<body>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div>Name:
				<input type="text" name="name" placeholder="Enter Name">
			</div>
			<input type="submit" name="submit" value="send">
		</form>
	</body>
</html>