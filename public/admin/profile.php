<?php 



  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $data = $_SESSION['USER_DATA'];
    print_r($data['phone']);
  } else {
    header('Location: "../view/login.php"');
  }



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/vendors/toastify/toastify.css">
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
  <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
</head>

<body>
  <div id="app">
    <!-- sidebar item  -->
    <?php include('./partials/SideBar.php') ?>

    <!-- main content  -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      <div class="page-heading">
        <h3>Profile</h3>
      </div>
      <div class="page-content">
        <div class="card">
          <div class="card-body">
            <div class=" row">
              <div class="col-12 mb-4 ">
                <div class=" col-6 col-sm-4 col-md-3 col-xl-2  overflow-hidden rounded-pill ">
                  <img class=" w-100 d-inline-block" src="assets/images/faces/1.jpg" alt="profile image">
                </div>
              </div>
              <!-- buttons  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4 ">
                <a href="profile.php" type="button" class="btn btn-primary m-lg-3">Current Profile</a>
                <a href="update-profile.php" type="button" class="btn btn-outline-success">Update Profile</a>
              </div>
              <!-- name row  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4 ">
                <h5 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-person-lines-fill "></i>
                </h5>
                <div>
                  <p class=" mb-0 ">Full name</p>
                  <h6 class=" mb-0 "><?= isset($data['name']) ? $data['name'] : 'Not available' ?></h6>
                </div>
              </div>
              <!-- E-mail row  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h5 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-envelope"></i>
                </h5>
                <div>
                  <p class=" mb-0 ">E-mail</p>
                  <h6 class=" mb-0 "><?= isset($data['email']) ? $data['email'] : 'Not available' ?></h6>
                </div>
              </div>
              <!-- Phone Number  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h5 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-telephone"></i>
                </h5>
                <div>
                  <p class=" mb-0 ">Phone Number</p>
                  <h6 class=" mb-0 "><?= isset($data['phone']) ? $data['phone'] : 'Not available' ?></h6>
                </div>
              </div>
              <!-- gender  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h5 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-person-badge-fill"></i>
                </h5>
                <div>
                  <p class=" mb-0 ">Gender</p>
                  <h6 class=" mb-0 "><?= isset($data['location']) ? $data['location'] : 'Not available' ?></h6>
                </div>
              </div>
              <!-- Location  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h5 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-geo-alt-fill"></i>
                </h5>
                <div>
                  <p class=" mb-0 ">Address</p>
                  <h6 class=" mb-0 "><?= isset($data['location']) ? $data['location'] : 'Not available' ?></h6>
                </div>
              </div>
              <!-- end  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>