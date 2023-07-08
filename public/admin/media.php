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
    <!-- sidebar  -->
    <?php include('./partials/SideBar.php') ?>
    <!-- main section  -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>All Media List</h3>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Upload new file</h5>
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- imgBB file uploader -->
              <input type="file" name="image" class="imgbb-filepond">
            </div>
          </div>
        </div>
        <div class="page-content">
          <div class="card">
            <div class="card-body">
              <section class="row">
                <div class="col-12 mb-3 ">
                  <div class="nav  nav-pills" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                    <a class="nav-link active" id="v-media-pills-all-tab" data-bs-toggle="pill"
                      href="#v-media-pills-all" role="tab" aria-controls="v-media-pills-all"
                      aria-selected="true">All</a>
                    <a class="nav-link" id="v-media-pills-images-tab" data-bs-toggle="pill" href="#v-media-pills-images"
                      role="tab" aria-controls="v-media-pills-images" aria-selected="false">Images</a>
                    <a class="nav-link" id="v-media-pills-video-tab" data-bs-toggle="pill" href="#v-media-pills-video"
                      role="tab" aria-controls="v-media-pills-video" aria-selected="false">Video</a>
                  </div>
                </div>
                <div class="col-12 ">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-media-pills-all" role="tabpanel"
                      aria-labelledby="v-media-pills-all-tab">
                      <div class="row row-cols-4 ">
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-media-pills-images" role="tabpanel"
                      aria-labelledby="v-media-pills-images-tab">
                      <div class="row row-cols-4 ">
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-media-pills-video" role="tabpanel"
                      aria-labelledby="v-media-pills-video-tab">
                      <div class="row row-cols-4 ">
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                        <div class="col">
                          <div class=" card ">
                            <img class=" rounded-3 " src="assets/images/samples/banana.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- filepond validation -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
    </script>

    <!-- image editor -->
    <script
      src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

    <!-- toastify -->
    <script src="assets/vendors/toastify/toastify.js"></script>

    <!-- filepond -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
    // register desired plugins...
    FilePond.registerPlugin(
      // validates the size of the file...
      FilePondPluginFileValidateSize,
      // validates the file type...
      FilePondPluginFileValidateType,

      // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
      FilePondPluginImageCrop,
      // preview the image file type...
      FilePondPluginImagePreview,
      // filter the image file
      FilePondPluginImageFilter,
      // corrects mobile image orientation...
      FilePondPluginImageExifOrientation,
      // calculates & adds resize information...
      FilePondPluginImageResize,
    );

    // Filepond: Basic
    FilePond.create(document.querySelector('.basic-filepond'), {
      allowImagePreview: false,
      allowMultiple: false,
      allowFileEncode: false,
      required: false
    });

    // Filepond: Multiple Files
    FilePond.create(document.querySelector('.multiple-files-filepond'), {
      allowImagePreview: false,
      allowMultiple: true,
      allowFileEncode: false,
      required: false
    });

    // Filepond: With Validation
    FilePond.create(document.querySelector('.with-validation-filepond'), {
      allowImagePreview: false,
      allowMultiple: true,
      allowFileEncode: false,
      required: true,
      acceptedFileTypes: ['image/png'],
      fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
      })
    });

    // Filepond: ImgBB with server property
    FilePond.create(document.querySelector('.imgbb-filepond'), {
      allowImagePreview: false,
      server: {
        process: (fieldName, file, metadata, load, error, progress, abort) => {
          // We ignore the metadata property and only send the file

          const formData = new FormData();
          formData.append(fieldName, file, file.name);

          const request = new XMLHttpRequest();
          // you can change it by your client api key
          request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

          request.upload.onprogress = (e) => {
            progress(e.lengthComputable, e.loaded, e.total);
          };

          request.onload = function() {
            if (request.status >= 200 && request.status < 300) {
              load(request.responseText);
            } else {
              error('oh no');
            }
          };

          request.onreadystatechange = function() {
            if (this.readyState == 4) {
              if (this.status == 200) {
                let response = JSON.parse(this.responseText);

                Toastify({
                  text: "Success uploading to imgbb! see console f12",
                  duration: 3000,
                  close: true,
                  gravity: "bottom",
                  position: "right",
                  backgroundColor: "#4fbe87",
                }).showToast();

                console.log(response);
              } else {
                Toastify({
                  text: "Failed uploading to imgbb! see console f12",
                  duration: 3000,
                  close: true,
                  gravity: "bottom",
                  position: "right",
                  backgroundColor: "#ff0000",
                }).showToast();

                console.log("Error", this.statusText);
              }
            }
          };

          request.send(formData);
        }
      }
    });

    // Filepond: Image Preview
    FilePond.create(document.querySelector('.image-preview-filepond'), {
      allowImagePreview: true,
      allowImageFilter: false,
      allowImageExifOrientation: false,
      allowImageCrop: false,
      acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
      fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
      })
    });

    // Filepond: Image Crop
    FilePond.create(document.querySelector('.image-crop-filepond'), {
      allowImagePreview: true,
      allowImageFilter: false,
      allowImageExifOrientation: false,
      allowImageCrop: true,
      acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
      fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
      })
    });

    // Filepond: Image Exif Orientation
    FilePond.create(document.querySelector('.image-exif-filepond'), {
      allowImagePreview: true,
      allowImageFilter: false,
      allowImageExifOrientation: true,
      allowImageCrop: false,
      acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
      fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
      })
    });

    // Filepond: Image Filter
    FilePond.create(document.querySelector('.image-filter-filepond'), {
      allowImagePreview: true,
      allowImageFilter: true,
      allowImageExifOrientation: false,
      allowImageCrop: false,
      imageFilterColorMatrix: [
        0.299, 0.587, 0.114, 0, 0,
        0.299, 0.587, 0.114, 0, 0,
        0.299, 0.587, 0.114, 0, 0,
        0.000, 0.000, 0.000, 1, 0
      ],
      acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
      fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
      })
    });

    // Filepond: Image Resize
    FilePond.create(document.querySelector('.image-resize-filepond'), {
      allowImagePreview: true,
      allowImageFilter: false,
      allowImageExifOrientation: false,
      allowImageCrop: false,
      allowImageResize: true,
      imageResizeTargetWidth: 200,
      imageResizeTargetHeight: 200,
      imageResizeMode: 'cover',
      imageResizeUpscale: true,
      acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
      fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
      })
    });
    </script>
    <script src="assets/js/main.js"></script>
</body>

</html>