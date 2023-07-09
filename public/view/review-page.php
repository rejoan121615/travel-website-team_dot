<?php
require __DIR__ . '../../../vendor/autoload.php';
use App\classes\Auth;
use App\db\MysqliDb;
?>
 <!-- html header  -->
 <?php include('./partials/Header.php') ?>
<body>
  <!-- main section wrapper -->
  <main class=" w-100 position-relative" style=" height: 100vh;">
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
          <div class=" text-center ">
            <h1 class=" display-3 fw-bold ">Share your Travel Experience in </h1>
            <h1 class=" display-3 fw-bold">form of a story</h1>
          </div>
          <div class=" search-bar mt-5 pt-5 mx-auto " style=" max-width: 800px">
            <div class=" position-relative">
              <input placeholder="Type to search a location" class=" form-control mb-0 " type="text">
              <button class=" btn btn-search" >
                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
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