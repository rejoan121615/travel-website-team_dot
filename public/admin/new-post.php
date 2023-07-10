<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require __DIR__ . '../../../vendor/autoload.php';
use App\model\ArticlesModel;
use App\model\CategoryModel;

$categoryModel = new ArticlesModel();

$postTitle = '';
$postDescription = '';
$tagList = [];
$selectedCategory = '';

// Handle file upload

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postTitle = $_POST['post-title'];
    $postDescription = $_POST['post-description'];
    $tagList = $_POST['tag-list'];
    $selectedCategory = $_POST['category'];

    // handle file upload
    if (isset($_FILES['image'])) {
        $file = $_FILES['image'];

        // File properties
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Extract file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Define allowed file types
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg'];

        // Define the target directory
        $targetDir = './assets/upload/';

        // Generate a unique file name
        $newFileName = uniqid('', true) . '.' . $fileExt;

        // Define the file destination path
        $destination = $targetDir . $newFileName;

        // Check if the file extension is allowed
        if (in_array($fileExt, $allowedExtensions)) {
            // Check if there was no file upload error
            if ($fileError === 0) {
                // Move the uploaded file to the destination folder
                if (move_uploaded_file($fileTmpName, $destination)) {
                    // File uploaded successfully
                    $uploadedFilePath = $destination;
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                }
            } else {
                $_SESSION['error'] = "Sorry, there was an error uploading your file.";
            }
        } else {
            $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG, GIF, and SVG files are allowed.";
        }
    }

    // Create new post
    $postModel = new ArticlesModel();
    // create post in database using createPost() method 
   $uploadResult =  $postModel->createArticle($postTitle, $postDescription, $uploadedFilePath, $selectedCategory, $tagList);
    print_r($uploadResult);
    
}


// get all the form field data and store them in an array
$postData = [
    'postTitle' => $postTitle,
    'postDescription' => $postDescription,
    'tagList' => $tagList,
    'selectedCategory' => $selectedCategory,
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Post</title>
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
            <form method="post" action="" class="needs-validation" enctype="multipart/form-data" novalidate>

              <div class="w-100 mb-3">
                <label for="post-title" class="form-label fw-bold">Post title</label>
                <input type="text" class="form-control" id="post-title" name="post-title"
                  placeholder="Write your post title" value="" required>
                <div class="valid-feedback">
                  <i class="bx bx-radio-circle"></i>
                  This is valid state.
                </div>
                <div class="invalid-feedback">
                  Please provide a valid post title.
                </div>
              </div>
              <div class="w-100 mb-3">
                <label for="post-title" class="form-label fw-bold">Description</label>
                <div id="full" style="height: 200px;"></div>
                <!-- Add a hidden input field to store the Quill editor's content -->
                <input type="hidden" id="post-description" name="post-description">
              </div>
              <div class="form-group mb-3">
                <label for="thumbnail">Thumbnail Image</label>
                <input id="" type="file" name="image" class="imgbb-filepond">
              </div>
              <div class="form-group w-100 mb-3">
                <label for="post-title" class="form-label fw-bold">Tag List</label>
                <select class="choices form-select multiple-remove" name="tag-list[]" multiple="multiple">
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
              <div class="form-group w-100 mb-4">
                <label class="form-label fw-bold" for="category">Select Category</label>
                <select id="catagory-list" class="form-select" name="category" aria-label="Default select example">
                  <?php
                  $categoryModel = new CategoryModel();
                  $categoryList = $categoryModel->getAllCategories();
                  foreach ($categoryList as $category) {
                      echo "<option value='{$category['id']}'>{$category['name']}</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="submit-btn">
                <button class="btn btn-success">Create Post</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
  // Get the form element
  var form = document.querySelector('.needs-validation');

  // Add event listener to form submission
  form.addEventListener('submit', function(event) {
    // Check if the form is valid
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }

    // Add Bootstrap validation classes
    form.classList.add('was-validated');
  });



  // Get the form element
var form = document.querySelector('.needs-validation');

// Get the Quill editor instance
var quill = new Quill('#full', {
  theme: 'snow'
});

// Add event listener to form submission
form.addEventListener('submit', function(event) {
  // Check if the form is valid
  if (!form.checkValidity()) {
    event.preventDefault();
    event.stopPropagation();
  } else {
    // Get the Quill editor's content
    var quillContent = quill.root.innerHTML;

    // Assign the content to the hidden input field
    document.getElementById('post-description').value = quillContent;
  }

  // Add Bootstrap validation classes
  form.classList.add('was-validated');
});


  </script>
</body>

</html>