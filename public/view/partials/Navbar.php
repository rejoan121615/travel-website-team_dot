<?php



?>

<div id="sticky-nav" class=" px-4 ">
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
          <a class="nav-link px-4 px-xl-5 text-white fw-bold" aria-current="page" href="destination.php">Destination</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4 px-xl-5 text-white fw-bold" aria-current="page" href="stories.php">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4 px-xl-5 text-white fw-bold" aria-current="page" href="review.php">Reviews</a>
        </li>
      </ul>
      <!-- user area  -->
      <form class="d-flex">
        <?php if (isset($_SESSION['AUTH'])){ ?>
          <?= "<a href='../admin/dashboard.php' class=' btn btn-primary ' >Dashboard</a>" ?>
        <?php } else { ?>
          <a href="signup.php" class=" fw-bold text-capitalize btn text-white rounded-pill px-4 py-2 ">Sign Up</a>
          <a href="login.php" class=" fw-bold text-capitalize btn bg-white text-dark rounded-pill px-4 py-2  ">Log In</a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>
</div>
