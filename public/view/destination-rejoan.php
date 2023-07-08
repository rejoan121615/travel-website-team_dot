<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>sign-up page</title>
  <!-- font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <!-- slider  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
  <!-- main section wrapper -->
  <main class=" w-100 position-relative destination-main " >
    <!-- navbar ---------------------  -->
    <div class=" w-100 h-100 ">
      <div class="container ">
        <!-- navigation menu  -->
        <nav class="navbar navbar-expand-md bg-body-tertiary position-relative " style=" z-index: 30;">
          <div class="container-fluid">
            <!-- website brand logo  -->
            <a class="navbar-brand d-md-none" href="#">
              <img src="../assets/images/logo.png" alt="website logo" style=" width: 50px;">
            </a>
            <!-- responsive button  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-between " id="navbarSupportedContent">
              <!-- website brand logo  -->
              <a class="navbar-brand d-none d-md-block" href="#">
                <img src="../assets/images/logo.png" alt="website logo" style=" width: 50px;">
              </a>
              <!-- navigation menuse  -->
              <ul class="navbar-nav justify-content-md-center mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link px-4 px-xl-5 text-white fw-bold" aria-current="page" href="#">Destination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-4 px-xl-5 text-white fw-bold" aria-current="page" href="#">Stories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-4 px-xl-5 text-white fw-bold" aria-current="page" href="#">Reviews</a>
                </li>
              </ul>
              <!-- user area  -->
              <form class="d-flex">
                <button class=" btn text-white " type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <a href="" class=" fw-bold text-capitalize btn text-white rounded-pill px-4 py-2 ">Sign Up</a>
                <a href="" class=" fw-bold text-capitalize btn bg-white text-dark rounded-pill px-4 py-2  ">Log In</a>
              </form>
            </div>
          </div>
        </nav>
        <!-- highlight text  -->
        <div class=" position-relative" style=" z-index: 30; margin-top: 25vh;">
          <div class=" text-white text-center ">
            <h1 class=" display-3 fw-bold ">Discovering the wonders of our</h1>
            <h1 class=" display-3 fw-bold">planet, one adventure at a time</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- bg cover  -->
    <div class="bg-cover">
      <img src="../assets/images/location-bg.png" alt="location images">
    </div>
  </main>
  <!-- plan your best trip eveer  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class=" destination-bar row">
        <div class="col-4 d-flex align-items-end ">
          <div class=" w-100 ">
            <div class=" position-relative">
              <input placeholder="Type to search a location" class=" form-control mb-0 " type="text">
              <button class=" btn btn-search" >
                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-4 d-flex align-items-end ">
          <div class=" input-group d-flex flex-column">
            <label for="type-of-place" class="fw-bold mb-3 ms-2 ">Filter by type of places</label>
            <select class="form-select w-100 " >
              <option selected>All Types</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="col-4 d-flex align-items-end ">
          <div class=" input-group d-flex flex-column">
            <label for="type-of-place" class="fw-bold mb-3 ms-2 ">Short by</label>
            <select class="form-select w-100 " >
              <option selected>Most Popular</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mt-90 ">
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Morocco</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="../assets/images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Mexico</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Croatia</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- your recent search section --------------  -->
 <section class=" mt-90 ">
    <div class="container">
        <!-- pagination  -->
      <div class=" mt-45 ">
        <ul class="pagination justify-content-center ">
          <li class="">
            <a class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
          </li>
          <li class="">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="" >
            <a class="page-link active" href="#">2</a>
          </li>
          <li class="">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="">
            <a class="page-link" href="#"><i class="fa-solid fa-ellipsis fa-2xl"></i></a>
          </li>
          <li class="">
            <a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- footer  -->
  <footer class=" bg-cus-primary mt-150 ">
    <div class=" container d-flex flex-column align-items-center justify-content-center">
      <img src="../assets/images/white-logo.png" alt="website white logo">
      <p class=" mt-5 text-white ">© 2023 Travel Pulse. All rights reserved</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js">
  </script>
  <script src="./js/script.js"></script>
</body>

</html>