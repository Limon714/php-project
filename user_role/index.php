
<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <div class="container">
    <div style="margin-left:15%; margin-top:10%; border:1px solid #5dc;">
      <form action="index.php" method="post" style="margin:20px; padding: 10px;">
        <div class="form-group">
          <label>User Name</label>
          <input type="text" class="form-control" placeholder="Enter username" id="email" name="username">
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
    
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
      </form>
    </div>
  </div>
</body>
</html>

<?php include 'db.php' ?>