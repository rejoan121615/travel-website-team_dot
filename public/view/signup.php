<?php

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
      echo $_POST['name'];
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

            <a class="page_btn mb-4" href="./login-rejoan.php">Log-In</a>

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