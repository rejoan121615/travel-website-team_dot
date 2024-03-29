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
        <h3>Comments</h3>
      </div>
      <section class="section ">
        <div class="card">
          <div class="card-body">
          <table class=" table table-md w-100 border ">
              <thead>
                <tr>
                  <th class=" col-1 ">
                  <input type="checkbox" class=" form-check-input "> <span class=" ms-2 ">All</span>
                  </th>
                  <th class=" col-8 ">Comments</th>
                  <th class=" col-3 ">Actions </th>
                  <th class=" col-3 "> users </th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-1 "><input type="checkbox" class=" form-check-input "></td>
                  <td class="col-8 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                  <td class="col-3 ">
                    <button class=" btn btn-sm btn-outline-primary ">Edit</button>
                    <button class=" btn btn-sm btn-outline-danger">Delete</button>
                  </td>
                  <td>
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-md">
                      <img src="assets/images/faces/5.jpg">
                    </div>
                      <p class="font-bold ms-3 mb-0">Si Cantik</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-1 "><input type="checkbox" class=" form-check-input "></td>
                  <td class="col-8 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                  <td class="col-3 ">
                    <button class=" btn btn-sm btn-outline-primary ">Edit</button>
                    <button class=" btn btn-sm btn-outline-danger">Delete</button>
                  </td>
                  <td>
                  <div class="d-flex mt-auto align-items-center">
                    <div class="avatar avatar-md">
                      <img src="assets/images/faces/2.jpg">
                    </div>
                      <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="assets/js/pages/dashboard.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>