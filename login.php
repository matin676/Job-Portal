<!DOCTYPE html>
<html lang="en">
<?php include 'config.php' ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body{
      margin: 0px;
      padding: 0px;
      background-image: url('images/FormBackground.jpg');
      background-size: cover;
    }
    form{
      background-color: thistle;
      padding: 40px;
      padding-top: 30px;
      margin: 6em;
      margin-left: 30em;
      margin-right: 20em;
      box-shadow: 10px 10px 8px #888888;
      border-radius: 10%;
    }
  </style>
  <title>Login</title>
</head>

<body>
    <div class="container">
    <form method="POST" action="index.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div><br>
  <button type="submit" class="btn btn-primary" name="login">Login</button><br><br>
  <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>