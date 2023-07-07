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
  <link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
  <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">
</head>

<body>
  <div id="app">
    <!-- sidebar  -->
    <?php include('./partials/SideBar.php') ?>
    <!-- main section -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      <div class="page-heading">
        <h3>All Post</h3>
      </div>
      <!-- Writting Settings start -->
      <div class="row">
        <div class="col-12">
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <a href="new-post.php" class=" d-block btn btn-primary fw-bold">Create new post</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <table class=" table table-md w-100 border ">
            <thead>
              <tr>
                <th class=" col-1 ">
                  <input type="checkbox" class=" form-check-input "> <span class=" ms-2 ">All</span>
                </th>
                <th class=" col-8 ">Post</th>
                <th class=" col-3 ">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-1 "><input type="checkbox" class=" form-check-input "></td>
                <td class="col-8 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                <td class="col-3 ">
                  <button class=" btn btn-sm btn-outline-primary ">Edit</button>
                  <button class=" btn btn-sm btn-outline-success ">View</button>
                  <button class=" btn btn-sm btn-outline-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td class="col-1 "><input type="checkbox" class=" form-check-input "></td>
                <td class="col-8 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                <td class="col-3 ">
                  <button class=" btn btn-sm btn-outline-primary ">Edit</button>
                  <button class=" btn btn-sm btn-outline-success ">View</button>
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
  <!-- Writting Settings End -->
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/quill/quill.min.js"></script>
  <script src="assets/js/pages/form-editor.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>