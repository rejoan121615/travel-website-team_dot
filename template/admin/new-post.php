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
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
  <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
  <!-- Include Choices CSS -->
  <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
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
        <h3>Add new post</h3>
      </div>
      <section class="section ">
        <div class="card">
          <div class="card-body">
            <form action="">
              <div class=" w-100 mb-3 ">
                <label for="post-title" class=" form-label fw-bold ">Post title</label>
                <input type="text" class="form-control is-valid" id="post-title" placeholder="Valid" value="" required>
                <div class="valid-feedback">
                  <i class="bx bx-radio-circle"></i>
                  This is valid state.
                </div>
              </div>
              <div class=" w-100 mb-3 ">
                <label for="post-title" class=" form-label fw-bold ">Description</label>
                <div id="full" style=" height: 200px; ">
                </div>
              </div>
              <div class="form-group mb-3 ">

                <label for="thubmnail">Thumbnail Image</label>
                <input type="file" name="image" class="imgbb-filepond">
              </div>
              <div class=" form-group w-100 mb-3 ">
                <label for="post-title" class=" form-label fw-bold ">Tag List</label>
                <select class="choices form-select multiple-remove" multiple="multiple">
                  <optgroup label="Figures">
                    <option value="romboid">Romboid</option>
                    <option value="trapeze" selected>Trapeze</option>
                    <option value="triangle">Triangle</option>
                    <option value="polygon">Polygon</option>
                  </optgroup>
                  <optgroup label="Colors">
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue" selected>Blue</option>
                    <option value="purple">Purple</option>
                  </optgroup>
                </select>
              </div>
              <div class=" form-group w-100 mb-4 ">
                <label class=" form-label fw-bold " for="catagory">Select Catagory</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class=" submit-btn">
                <button class=" btn btn-success">Create Post</button>
              </div>
            </form>

          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/quill/quill.min.js"></script>
  <script src="assets/js/pages/form-editor.js"></script>
  <!-- filepond validation -->
  <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
  </script>
  <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
  </script>
  <script src="assets/vendors/choices.js/choices.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>