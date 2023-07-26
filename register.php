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

      <form method="post" action="register.ini.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" placeholder="Write your name here" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email: </label>
    <input type="email" class="form-control" placeholder="Write your email here" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone: </label>
    <input type="number" class="form-control" placeholder="Write your number here" name="number">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address: </label>
    <input type="text" class="form-control" placeholder="Write your address here" name="address">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
</html>