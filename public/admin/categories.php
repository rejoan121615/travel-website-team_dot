<?php

  require __DIR__ . '../../../vendor/autoload.php';
  use App\model\CategoryModel;

  // echo $_GET['c-name'];

if (isset($_GET['c-name'])) {
    $title = $_GET['c-name'];
    $description = $_GET['c-description'];
    $msg = '';
    // $categoryModel = new CategoryModel();
    // $categoryModel->createCategory("New Category", "This is a new category description");
    // Check if the category already exists
    $categoryModel = new CategoryModel();
    $existingCategory = $categoryModel->getCategoryByName($title);
    if ($existingCategory) {
     $msg = "<p class=' text-danger text-center'>Category already exists.</p>";
    //  header('location:categories.php');
    } else {
      // Create the new category
      $categoryModel->createCategory($title, $description);
      $msg = "<p class=' text-success text-center'>
  Category created successfully.
</p>";
      // header('location:categories.php');
    }
  }





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
    <!-- main section -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>Categories</h3>
      </div>
      <!-- Writting Settings start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <h4 class="card-title">Add New Categories</h4>
                  <form action="" method="get" class="needs-validation" novalidate>
                    <div class="row">
                      <?= isset($msg) ? $msg : null ?>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="c-name" class=" mb-2 ">Category Name</label>
                          <input type="text" name="c-name" class="form-control" id="c-name" placeholder="Enter name" required>
                          <div class="valid-feedback">
                            Category Name is valid.
                          </div>
                          <div class="invalid-feedback">
                            Please enter a Category Name.
                          </div>
                          <div id="category-suggestions"></div> <!-- Container to display category name suggestions -->
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="c-description" class=" mb-2 ">Categories Description</label>
                          <input type="text" name="c-description" class="form-control" id="c-description" placeholder="Enter categories description" required>
                          <div class="valid-feedback">
                            Categories Description is valid.
                          </div>
                          <div class="invalid-feedback">
                            Please enter Categories Description.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                  </form>
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
                    <th class=" col-8 ">Comments</th>
                    <th class=" col-3 ">Actions</th>
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
                  </tr>
                  <tr>
                    <td class="col-1 "><input type="checkbox" class=" form-check-input "></td>
                    <td class="col-8 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                    <td class="col-3 ">
                      <button class=" btn btn-sm btn-outline-primary ">Edit</button>
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
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script>
  // Get all forms that have the 'needs-validation' class
  var forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
</script>
  <script src="assets/js/main.js"></script>
</body>

</html>