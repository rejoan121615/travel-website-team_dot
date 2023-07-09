<?php

  require __DIR__ . '../../../vendor/autoload.php';

  use App\model\ProfileModel;

  if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
    if (isset($_SESSION['AUTH'])) {
      // get profile data 
      $profile = new ProfileModel($_SESSION['USER_ID']);
      $profileData = $profile->profileData();
      // set profile data into session 
      $_SESSION['USER_DATA'] = $profileData;
    }
  }
  
  // if 


?>

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

  <!-- navigation menu  -->
  <?php include_once('partials/Navbar.php') ?> 
  <!-- main section wrapper -->
  <main class=" w-100 position-relative" style=" height: 100vh;">
    <!-- navbar ---------------------  -->
    <div class=" w-100 h-100 ">
      <div class="container ">
        <!-- highlight text  -->
        <div class=" position-relative" style=" z-index: 30; padding-top: 35vh;">
          <div class=" text-white text-center ">
            <h1 class=" display-3 fw-bold ">Discover New Places and Create</h1>
            <h1 class=" display-3 fw-bold">Unforgettable Memories</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- post lists --------------------  -->
    <div class=" position-absolute w-100 h-100 " style=" left: 0; top: 0; z-index: 10;">
    <!-- for large screen  -->
      <div class=" row g-0 h-100 d-none d-md-flex ">
        <!-- post column  -->
        <div class=" col-4 d-flex align-items-end justify-content-center  "
          style="background: url('../assets/images/post/hills.jpg') no-repeat left center; background-size: auto 100%; ">
          <div class=" row g-0 p-4 ">
            <div class=" col-10">
              <p class=" text-white mb-0 " style="font-size: 25px;">Why you should reconsider The Inca Trail, Peru
                Trip
              </p>
            </div>
            <div class=" col-2 d-flex align-items-end justify-content-end ">
              <a href="" class=" text-white " style="font-size: 25px;"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- post column  -->
        <div class=" col-4 d-flex align-items-end justify-content-center  "
          style="background: url('../assets/images/post/ice.jpg') no-repeat left center; background-size: auto 100%; ">
          <div class=" row g-0 p-4 ">
            <div class=" col-10">
              <p class=" text-white mb-0 " style="font-size: 25px;">The Hidden Powers of The Northern Lights, Iceland
              </p>
            </div>
            <div class=" col-2 d-flex align-items-end justify-content-end ">
              <a href="" class=" text-white " style="font-size: 25px;"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- post column  -->
        <div class=" col-4 d-flex align-items-end justify-content-center  "
          style="background: url('../assets/images/post/sea.jpg') no-repeat left center; background-size: auto 100%; ">
          <div class=" row g-0 p-4 ">
            <div class=" col-10">
              <p class=" text-white mb-0 " style="font-size: 25px;">Why you should reconsider The Inca Trail, Peru
                Trip
              </p>
            </div>
            <div class=" col-2 d-flex align-items-end justify-content-end ">
              <a href="" class=" text-white " style="font-size: 25px;"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- for small screen  -->
      <div class=" h-100 d-block d-md-none "
          style="background: url('../assets/images/post/hills.jpg') no-repeat left center; background-size: auto 100%; ">
    </div>
    </div>
  </main>
  <!-- plan your best trip eveer  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1>Plan your best trip ever</h1>
          <p class=" mb-0 ">Making the Most of Your Travel Experience in 2023</p>
        </div>
        <div class="col-4 text-end ">
          <a href="" class=" btn-primary-outline ">view all destination</a>
        </div>
      </div>
      <div class="row mt-90 ">
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body">
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
                <h5 class="card-title">Croatia</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Top Locations to Explore --------------  -->
  <section id="top-explore" class=" mt-90 ">
    <div class="container">
      <div class=" swiper">
          <div class="row">
            <div class="col-8">
              <h1>Top Locations to Explore</h1>
              <p class=" mb-0 ">Here are some of the most visited places in 2023</p>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
              <!-- <a href="" class=" btn-primary-outline ">view all destination</a> -->
              <div class=" slider-btn me-3 button-prev"><i class="fa-solid fa-arrow-left"></i></div>
              <div class=" slider-btn button-next"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
          <div class="swiper-wrapper mt-90 ">
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Burj Khalifa</h5>
              </div>
            </div>
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Burj Khalifa</h5>
              </div>
            </div>
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- your recent search section --------------  -->
  <section id="recent-search" class=" mt-90 ">
    <div class="container">
      <div class=" swiper">
          <div class="row">
            <div class="col-8">
              <h1>Location based on search</h1>
              <p class=" mb-0 ">Check out fun places based on your searches</p>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
              <!-- <a href="" class=" btn-primary-outline ">view all destination</a> -->
              <div class=" slider-btn me-3 button-prev"><i class="fa-solid fa-arrow-left"></i></div>
              <div class=" slider-btn button-next"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
          <div class="swiper-wrapper mt-90 ">
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Burj Khalifa</h5>
              </div>
            </div>
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Burj Khalifa</h5>
              </div>
            </div>
            <div class=" swiper-slide card border border-0">
              <img src="../assets/images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- your recent search section --------------  -->
 <section class=" mt-90 ">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1>Top Travel Sories</h1>
          <p class=" mb-0 ">Explore our latest stories from our active users</p>
        </div>
        <div class="col-4 text-end ">
          <a href="" class=" btn-primary-outline ">view all destination</a>
        </div>
      </div>
      <div class="row mt-45 g-5  ">
        <div class="col-6 mt-0 ">
          <div>
            <div class="card bg-transparent border-0 " >
                <img src="../assets/images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
                <div class="card-body px-0  ">
                  <div class=" row time-date mb-3 ">
                    <div class="col">
                      <small>Chattogram, Bangladesh</small>                   
                    </div>
                    <div class=" col text-end ">
                      <small>
                        <span>Feb 27, 2023</span>
                        <span class=" px-2 icon "><i class="fa-solid fa-circle"></i></span>
                        <span>8 min read</span>  
                      </small>
                    </div>
                  </div>
                  <div>
                    <h4 class=" mb-3 ">Chattogram the city of Port and Hill Tracts. </h4>
                    <p class="card-text">Chattogram, also known as Chittagong, is a major city in Bangladesh. It is the second-largest city in the country and serves as the country's principal seaport and commercial hub. Chattogram is known for several things.</p>
                    <a href="#" class="card-link text-capitalize fw-bold text-decoration-none ">Read full post	<i class=" ms-3 fa-solid fa-arrow-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-6 mt-0 ">
          <div>
            <div class="card bg-transparent border-0 " >
                <img src="../assets/images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
                <div class="card-body px-0  ">
                  <div class=" row time-date mb-3 ">
                    <div class="col">
                      <small>Chattogram, Bangladesh</small>                   
                    </div>
                    <div class=" col text-end ">
                      <small>
                        <span>Feb 27, 2023</span>
                        <span class=" px-2 icon "><i class="fa-solid fa-circle"></i></span>
                        <span>8 min read</span>  
                      </small>
                    </div>
                  </div>
                  <div>
                    <h4 class=" mb-3 ">Chattogram the city of Port and Hill Tracts. </h4>
                    <p class="card-text">Chattogram, also known as Chittagong, is a major city in Bangladesh. It is the second-largest city in the country and serves as the country's principal seaport and commercial hub. Chattogram is known for several things.</p>
                    <a href="#" class="card-link text-capitalize fw-bold text-decoration-none ">Read full post	<i class=" ms-3 fa-solid fa-arrow-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-6 ">
          <div>
            <div class="card bg-transparent border-0 " >
                <img src="../assets/images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
                <div class="card-body px-0  ">
                  <div class=" row time-date mb-3 ">
                    <div class="col">
                      <small>Chattogram, Bangladesh</small>                   
                    </div>
                    <div class=" col text-end ">
                      <small>
                        <span>Feb 27, 2023</span>
                        <span class=" px-2 icon "><i class="fa-solid fa-circle"></i></span>
                        <span>8 min read</span>  
                      </small>
                    </div>
                  </div>
                  <div>
                    <h4 class=" mb-3 ">Chattogram the city of Port and Hill Tracts. </h4>
                    <p class="card-text">Chattogram, also known as Chittagong, is a major city in Bangladesh. It is the second-largest city in the country and serves as the country's principal seaport and commercial hub. Chattogram is known for several things.</p>
                    <a href="#" class="card-link text-capitalize fw-bold text-decoration-none ">Read full post	<i class=" ms-3 fa-solid fa-arrow-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-6 ">
          <div>
            <div class="card bg-transparent border-0 " >
                <img src="../assets/images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
                <div class="card-body px-0  ">
                  <div class=" row time-date mb-3 ">
                    <div class="col">
                      <small>Chattogram, Bangladesh</small>                   
                    </div>
                    <div class=" col text-end ">
                      <small>
                        <span>Feb 27, 2023</span>
                        <span class=" px-2 icon "><i class="fa-solid fa-circle"></i></span>
                        <span>8 min read</span>  
                      </small>
                    </div>
                  </div>
                  <div>
                    <h4 class=" mb-3 ">Chattogram the city of Port and Hill Tracts. </h4>
                    <p class="card-text">Chattogram, also known as Chittagong, is a major city in Bangladesh. It is the second-largest city in the country and serves as the country's principal seaport and commercial hub. Chattogram is known for several things.</p>
                    <a href="#" class="card-link text-capitalize fw-bold text-decoration-none ">Read full post	<i class=" ms-3 fa-solid fa-arrow-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div>
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
  <script>
    window.onload = function () {
    const topExploreSwiper = new Swiper("#top-explore .swiper", {
        // Optional parameters
        direction: "horizontal",
        slidesPerView: 3,
        spaceBetween: 24,
        // Navigation arrows
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
    });
  
    const recentSearchSwipe = new Swiper("#recent-search .swiper", {
        // Optional parameters
        direction: "horizontal",
        slidesPerView: 3,
        spaceBetween: 24,
        // Navigation arrows
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
    });
};

  </script>
</body>

</html>