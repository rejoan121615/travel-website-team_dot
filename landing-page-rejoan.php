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
              <img src="./images/logo.png" alt="website logo" style=" width: 50px;">
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
                <img src="./images/logo.png" alt="website logo" style=" width: 50px;">
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
            <h1 class=" display-3 fw-bold ">Discover New Places and Create</h1>
            <h1 class=" display-3 fw-bold">Unforgettable Memories</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- post lists --------------------  -->
    <div class=" position-absolute w-100 h-100 " style=" left: 0; top: 0; z-index: 10;">
      <div class=" row g-0 h-100 ">
        <!-- post column  -->
        <div class=" col-4 d-flex align-items-end justify-content-center  "
          style="background: url('./images/post/hills.jpg') no-repeat left center; background-size: auto 100%; ">
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
          style="background: url('./images/post/ice.jpg') no-repeat left center; background-size: auto 100%; ">
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
          style="background: url('./images/post/sea.jpg') no-repeat left center; background-size: auto 100%; ">
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
              <img src="./images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Morocco</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Mexico</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Croatia</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- plan your best trip eveer  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1>Top Locations to Explore</h1>
          <p class=" mb-0 ">Here are some of the most visited places in 2023</p>
        </div>
        <div class="col-4 text-end ">
          <a href="" class=" btn-primary-outline ">view all destination</a>
        </div>
      </div>
      <div class="row mt-90 ">
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Burj Khalifa</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 17.png" class="card-img-top" alt="..." />
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
          <h1>Location based on search</h1>
          <p class=" mb-0 ">Check out fun places based on your searches</p>
        </div>
        <div class="col-4 text-end ">
          <a href="" class=" btn-primary-outline ">view all destination</a>
        </div>
      </div>
      <div class="row mt-90 ">
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Dubai ,UEA</p>
                <h5 class="card-title">Burj Khalifa</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 19.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div>
            <div class="card border border-0">
              <img src="./images/Frame 17.png" class="card-img-top" alt="..." />
              <div class="card-body px-0">
                <p class="card-text mb-0 ">Rio de Janerio Brazil</p>
                <h5 class="card-title">Meuseam of Tomorrow</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js">
  </script>

</body>

</html>