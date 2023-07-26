<?php 

include('db_connect.php');

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];

	$sql = "INSERT INTO `user`(`name`, `email`, `phone`, `address`) VALUES ('$name','$email','$number','$address')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("location:index.php");
		exit();
	}
	else{
		header("location: register.php?error=something went wrong");
		exit();
	}

}


 ?>