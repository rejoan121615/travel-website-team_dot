<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Write Review</title>
  <!-- font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <!-- slider  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="./css/style.css" />
</head>
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
              <img src="./images/blue-logo.png" alt="website logo" style=" width: 50px;">
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
                <img src="./images/blue-logo.png" alt="website logo" style=" width: 50px;">
              </a>
              <!-- navigation menuse  -->
              <ul class="navbar-nav justify-content-md-center mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link px-4 px-xl-5 fw-bold" aria-current="page" href="#">Destination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-4 px-xl-5 fw-bold" aria-current="page" href="#">Stories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-4 px-xl-5 fw-bold" aria-current="page" href="#">Reviews</a>
                </li>
              </ul>
              <!-- user area  -->
              <form class="d-flex">
                <button class=" btn text-dark " type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <a href="" class=" fw-bold text-capitalize btn text-primary rounded-pill px-4 py-2 ">Sign Up</a>
                <a href="" class=" fw-bold text-capitalize btn btn-primary rounded-pill px-4 py-2  ">Log In</a>
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
    <!-- post lists --------------------  -->
    <div class=" position-absolute w-100 h-100 " style=" left: 0; top: 0; z-index: 10;">
    </div>
  </main>
  <!-- plan your best trip eveer  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1>Top places with reviews</h1>
          <p class=" mb-0 ">Travelers want to see more reviews of these places.</p>
        </div>
        <div class="col-4 text-end ">
          <a href="" class=" btn-primary-outline "> <span class=" me-2 "> <i class="fa-solid fa-pen"></i></span> Write new review</a>
        </div>
      </div>
      <div class="row mt-90 g-0 ">
        <div class="col-12 mt-4">
           <div class="card mb-3 border-0 ">
            <div class="row g-0">
              <div class="col-md-4">
                <img class=" d-inline-block w-100 " src="./images/Frame 17.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-6 ms-5 ">
                <div class="card-body">
                  <div class=" row time-date mb-3 ">
                    <div class="col">
                      <small>Chattogram, Bangladesh</small>                   
                    </div>
                  </div>
                  <div>
                    <h4 class=" mb-3 ">A Wonderful Journey to India</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Tempore accusantium aperiam, modi atque laudantium deleniti debitis id fugiat maiores voluptas,
                       similique et autem non facere? Quia, recusandae? Aliquam, nam velit?</p>
                    <p class="card-text mt-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Tempore accusantium aperiam, modi atque laudantium deleniti debitis id fugiat maiores voluptas,
                       similique et autem non facere? Quia, recusandae? Aliquam, nam velit?</p>
                    <div class=" d-flex mt-5 ">
                      <div class=" d-flex ">
                        <span class=" me-3 text-primary "><i class="fa-regular fa-star fa-xl"></i></span>
                        <span class=" me-3 text-primary "><i class="fa-regular fa-star fa-xl"></i></span>
                        <span class=" me-3 text-primary "><i class="fa-regular fa-star fa-xl"></i></span>
                        <span class=" me-3 text-primary "><i class="fa-regular fa-star fa-xl"></i></span>
                        <span class=" me-3 text-primary "><i class="fa-regular fa-star fa-xl"></i></span>
                      </div>
                      <p class=" ms-5 mb-0 fw-bold text-primary text-capitalize ">Click to rate</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- footer  -->
  <footer class=" bg-cus-primary mt-150 ">
    <div class=" container d-flex flex-column align-items-center justify-content-center">
      <img src="./images/white-logo.png" alt="website white logo">
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