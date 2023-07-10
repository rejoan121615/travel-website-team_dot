<?php

    require __DIR__ . '../../../vendor/autoload.php';

    use App\model\ProfileModel;

    $profiles = new ProfileModel(1);

    $profiles->AllProfile();
    



?>


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
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
  <div id="app">
    <!-- sidebar  -->
    <?php include('./partials/SideBar.php') ?>
    <!-- main content section  -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      <div class="page-heading">
        <h3>users</h3>
      </div>
      <!-- Writting Settings start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <table class=" table table-md w-100 border ">
                <thead>
                  <tr>
                    <th class=" col-2 ">
                      <input type="checkbox" class=" form-check-input d-inline-block me-1 ">
                       <span class="">All</span>
                    </th>
                    <th class=" col-7 ">Name</th>
                    <th class=" col-3 ">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 


                  ?>
                  <tr>
                    <td class="col-2 "><input type="checkbox" class=" form-check-input "></td>
                    <td class="col-7 ">rejoan</td>
                    <td class="col-3 ">
                      <button class=" btn btn-sm btn-outline-primary mb-2 mb-sm-0 ">Edit</button>
                      <button class=" btn btn-sm btn-outline-danger">Delete</button>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="assets/js/pages/dashboard.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>