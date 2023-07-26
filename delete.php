<?php 

include('db_connect.php');

$id = $_GET['deleteid'];

if (isset($id)) {
	$sql = "DELETE FROM user WHERE id='$id'";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("location: index.php");
		exit();
	}
	else{
		header("location: index.php?error=something went wrong");
		exit();
	}
}


 ?>