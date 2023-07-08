<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>

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
                <h3 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-person-lines-fill "></i>
                </h3>
                <div>
                  <p class=" mb-0 ">Full name</p>
                  <h5 class=" mb-0 ">Mohd Rejoan</h5>
                </div>
              </div>
              <!-- user name row  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h3 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-person-circle"></i>
                </h3>
                <div>
                  <p class=" mb-0 ">User Name</p>
                  <h5 class=" mb-0 ">Rejoan@75</h5>
                </div>
              </div>
              <!-- E-mail row  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h3 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-envelope"></i>
                </h3>
                <div>
                  <p class=" mb-0 ">E-mail</p>
                  <h5 class=" mb-0 ">emaple@gmail.com</h5>
                </div>
              </div>
              <!-- Phone Number  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h3 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-telephone"></i>
                </h3>
                <div>
                  <p class=" mb-0 ">Phone Number</p>
                  <h5 class=" mb-0 ">0111111252666</h5>
                </div>
              </div>
              <!-- Location  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h3 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-geo-alt-fill"></i>
                </h3>
                <div>
                  <p class=" mb-0 ">Location</p>
                  <h5 class=" mb-0 ">Dhaka, Bangladesh</h5>
                </div>
              </div>
              <!-- date of birth  -->
              <div class=" col-12 d-flex align-items-center mb-3 mb-lg-4  ">
                <h3 class=" me-4 me-md-5 d-flex align-items-center justify-content-start ">
                  <i class="bi bi-calendar-date"></i>
                </h3>
                <div>
                  <p class=" mb-0 ">Date of Birth</p>
                  <h5 class=" mb-0 ">23 November 1999</h5>
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