<?php
$email = isset($_POST['email']);
$password = isset($_POST['password']);

$mysqli = new mysqli('localhost', 'root', '', 'project');

if ($mysqli->connect_errno) {
}

$sql = "INSERT INTO user_login (email, password) VALUES ('$email', '$password')";

if ($mysqli->query($sql) === true) {
  echo "Data inserted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>

<body class="full-screen d-flex justify-content-center align-items-center ">
  <div class="form-wrap bg-secondary-subtle ">
    <div class=" row ">
      <!-- image  -->
      <div class=" col-sm-6">
        <img class=" w-100 " src="./images/Frame 26.jpg" alt="">
      </div>
      <!-- my form  -->
      <div class=" col-sm-5">
        <h3>Welcome to our Site</h3>
        <p>Cotinue with google or enter login details</p>
        <div class="row">
          <div class="col-md-12">
            <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="#">
              <img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a>
          </div>
        </div>
        <!-- User Form  -->
        <form method="post">
          <div class="mb-3">
            <label for="email" class="email">Email address</label>
            <input type="email" class="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="password1" class="password">Password</label>
            <input type="password" class="password" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
        </form>
        <!-- Form Submit Button  -->
        <div>
          <button type="submit" class="btn btn-primary rounded-pill ">Login</button>
          <p>Don't account yet?<a href="">Create account</a></p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>