<?php

    require __DIR__ . '/../../vendor/autoload.php';
    use App\model\DbModel;
    
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
      $connection = new DbModel();
      // echo $_POST['name'];
      $userData = ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']];
      $hashPass = password_hash($userData['password'], PASSWORD_DEFAULT);
      // query on database 
      $dbFeedBack = $connection->createUser($userData['name'],$userData['email'], $hashPass);
      
      if ($dbFeedBack['created']) {
        header("Location: login.php");
      }
    }

?>

<!-- html header  -->
<?php include_once('./partials/Header.php') ?>
<body class="form-body">
  <div class="bg-light form-wrap">
    <div class="row w-100">
      <!-- left side highlight image  -->
      <div class="col-sm-6">
        <div class="form-img">
          <img class="w-100" src="../assets/images/sign-up.jpg" alt="" />
        </div>
      </div>
      <!-- sign-up form  -->
      <div class="col-sm-6">
        <div class="form-container d-flex justify-content-center align-items-center h-100">
          <form method="post" class="row g-3 needs-validation" novalidate>
            <h2 class="text-center display-5 fw-bold mb-5">
              Hi, Get Started Now
            </h2>

            <a class="page_btn mb-4" href="login.php">Log-In</a>

            <img class="w-100" src="../assets/images/credential barrier.png" alt="">

            <!-- Sign form  -->
            <div class="mb-4">
              <div class="input-group mb-3 ">
                <input type="text" placeholder="Full Name" aria-describedby="name" name="name" required
                  class="form-control" />
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="input-group mb-3 ">
                <input name="email" type="email" placeholder="Email" aria-describedby="email" required
                  class="form-control" />
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="input-group mb-3 ">
                <input name="password" type="password" placeholder="Password" aria-describedby="password" required
                  class="form-control" />
                <div class="invalid-feedback">Please enter a password.</div>
              </div>
            </div>

            <div class="form-group">
              <button class="submit-btn fw-bold" type="submit">Create Account</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- form script  -->
  <script defer src="../assets/js/user-form-validation.js"></script>
</body>

</html>