<?php

include('db_connect.php');

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

      <a href="register.php"><button type="submit" name="submit" class="btn btn-primary">Add User</button></a>

<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

      $sql = "SELECT * From user";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
      echo '
    <tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['phone'].'</td>
      <td>'.$row['address'].'</td>
      <td>
      <a href="edit.php?editid='.$row['id'].'"><button type="submit" name="submit" class="btn btn-success">Edit</button></a>
      <a href="delete.php?deleteid='.$row['id'].'"><button type="submit" name="submit" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>';
  }
    ?>
  </tbody>
</table>
    
    </div>
  </body>
</html>