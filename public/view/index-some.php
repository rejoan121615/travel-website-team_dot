<?php

  if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
    if (isset($_SESSION['USER_ID'])) {
      
    }
  }
  
  // if 


?>


<!-- header from partials  -->
<?php include('./partials/Header.php') ?>

<body>
<h1>

</h1>

  <!-- main section wrapper -->
  <main class=" w-100 position-relative" style=" height: 100vh;">
    <!-- navbar ---------------------  -->
    <div class=" w-100 h-100 ">
      <div class="container ">
        <!-- navigation menu  -->
        <?php include('./partials/Navbar.php') ?>
        <!-- highlight text  -->
        <div class=" position-relative" style=" z-index: 30; margin-top: 25vh;">
          <div class=" text-white text-center ">
            <h1 class=" display-3 fw-bold ">Discover New Places and Create</h1>
            <h1 class=" display-3 fw-bold">Unforgettable Memories</h1>
          </div>
          <div class=" position-relative">
              <input placeholder="Type to search a location" class=" form-control mb-0 " type="text">
              <button class=" btn btn-search" >
                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
              </button>
            </div>
        </div>
      </div>
    </div>

    <!-- post lists --------------------  -->
    <div class=" position-absolute w-100 h-100 " style=" left: 0; top: 0; z-index: 10;">
      <div class=" row g-0 h-100 ">
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

        const all = new Swiper(".swiper", {
            // Optional parameters
            direction: "horizontal",
            slidesPerView: 2.2,
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