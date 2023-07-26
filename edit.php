<?php  

include('db_connect.php');

$id = $_GET['editid'];

$sql1 = "SELECT * FROM user WHERE id='$id'";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);

$name1 = $row['name'];
$email1 = $row['email'];
$number1 = $row['phone'];
$address1 = $row['address'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];

  $sql = "UPDATE user SET name='$name', email='$email', phone='$number', address='$address' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("location: index.php");
    exit();
  }
  else{
    header("location: edit.php?error=Failed to Update");
    exit();
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD Application</title>
  </head>
  <body>
    <div class="container my-5">

      <?php if (isset($_GET['error'])) { ?>
        <p class="alert alert-danger"><?php echo $_GET['error'];  ?></p>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
        <p class="alert alert-success"><?php echo $_GET['success'];  ?></p>
      <?php } ?>

      <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" placeholder="Write your name here" name="name" value="<?php echo $name1 ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email: </label>
    <input type="email" class="form-control" placeholder="Write your email here" name="email" value="<?php echo $email1 ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone: </label>
    <input type="number" class="form-control" placeholder="Write your number here" name="number" value="<?php echo $number1 ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address: </label>
    <input type="text" class="form-control" placeholder="Write your address here" name="address" value="<?php echo $address1 ?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
    </div>
  </body>
</html>