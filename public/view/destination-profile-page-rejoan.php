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
  <link rel="stylesheet" href="../../css/style.css" />
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
            <h1 class=" fw-bold dest-pro-title ">Jatrapur</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- bg cover  -->
    <div class="bg-cover">
      <img src="./images/location-bg.png" alt="location images">
    </div>
  </main>
  <!-- location details  -->
  <section>
    <div class="container">
      <div class="row py-5 ">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center ">
          <h1 class=" text-primary mb-3 ">Croatia</h1>
          <h3 class=" mb-3 ">Bangladesh</h3>
          <p class=" w-75 mx-auto text-center mb-0 ">Croatia is a fun destination with a wide range of 
            attractions, including beautiful coastal cities, 
            stunning national parks, charming seaside towns, 
            and picturesque islands. The country offers a rich 
            history and culture, with ancient ruins, impressive
             architecture, and a vibrant cultural scene. </p>
        </div>
      </div>
    </div>
  </section>
  <!-- plan your best trip eveer  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class=" destination-bar row">
        <div class="col-12">
          <p class=" text-primary text-start fw-bold ">01 / TOP SIGHTS & LOCATIONS</p>
        </div>
        <div class="col-8 ">
          <h1>Top Destinations for</h1>
          <h1>your Travel Plans</h1>
        </div>
        <div class="col-4 d-flex align-items-center ">
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
      <div class="row mt-90 gx-5 gy-3 ">
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
      <div class=" mt-5 text-center ">
        <a href="" class=" btn-primary-outline ">View All Top Attractions</a>
      </div>
    </div>
  </section>
    <!-- post slider  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class=" destination-bar row">
        <div class="col-12">
          <p class=" text-primary text-start fw-bold ">02 / LATEST FEATURED STORIES</p>
        </div>
        <div class="col-8 ">
          <h1>Latest Stories from Croatia</h1>
        </div>
        <div class="col-4 text-end  ">
          <a href="" class=" btn-primary-outline ">View All Stories</a>
        </div>
      </div>
      <!-- post and slider  -->
      <div class=" swiper mt-5 pt-3 ">
        <div class="swiper-wrapper ">
          <div class=" swiper-slide">
            <div class="card bg-transparent border-0 " >  
                <img src="./images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
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
          <div class=" swiper-slide">
            <div class="card bg-transparent border-0 " >  
                <img src="./images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
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
          <div class=" swiper-slide">
            <div class="card bg-transparent border-0 " >  
                <img src="./images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
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
          <div class=" swiper-slide">
            <div class="card bg-transparent border-0 " >  
                <img src="./images/Chattagram.jpg" class="card-img-top rounded-5 " alt="post image">
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
        <div class="row mt-5 pt-3 ">
          <div class="col-8"></div>
          <div class="col-4 d-flex align-items-center justify-content-end">
            <!-- <a href="" class=" btn-primary-outline ">view all destination</a> -->
            <div class=" slider-btn me-3 button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            <div class=" slider-btn button-next"><i class="fa-solid fa-arrow-right"></i></div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
    <!-- plan your best trip eveer  -->
  <section class=" mt-90 ">
    <div class="container">
      <div class=" destination-bar row">
        <div class="col-12">
          <p class=" text-primary text-start fw-bold ">03 / OTHER FUN PLACES IN CROATIA</p>
        </div>
        <div class="col-8 ">
          <h1>Other Fun Places</h1>
          <h1>in Croatia</h1>
        </div>
        <div class="col-4 d-flex align-items-center ">
          <div class=" input-group d-flex flex-column">
            <label for="type-of-place" class="fw-bold mb-3 ms-2 ">Filter option</label>
            <select class="form-select w-100 " >
              <option selected>All Popular Places</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mt-90 gx-5 gy-3 ">
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
      <div class=" mt-5 text-center ">
        <a href="" class=" btn-primary-outline ">View All Other Places</a>
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