<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- font-awesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- bootstrap cdn -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <!-- css link -->
    <link rel="stylesheet" href="../../css/style.css" />
  </head>
  <body class=" dashboard ">
    <section>
      <div class="container-fluid " >
        <div class="row g-0 h-100 ">
          <div class="col-2 border-end pe-3 ">
            <!-- title  -->
            <div class=" display-2 mb-3 ">wise</div>
            <!-- profile  -->
            <div class=" d-flex justify-content-center flex-column align-items-center ">
              <img class=" w-75 h-75 rounded-circle " src="../../assets/images/profile.jpg" alt="profile image">
              <p class=" text-white ">name</p>
              <button class=" btn border-white rounded-pill text-white ">edit</button>
            </div>
            <!-- navigation buttons  -->
            <div class=" btn-group-vertical w-100 mt-4  ">
              <?php
                  $nav = [
                    ['title' => 'Dashboard','active' =>  'btn-primary', 'icon' => '<i class="fa-solid fa-table-columns"></i>'  ],
                    ['title' => 'Activity', 'active' => 'btn-primary-outline', 'icon' => '<i class="fa-solid fa-chart-line"></i>'], 
                    ['title' => 'Schedule', 'active' => 'btn-primary-outline', 'icon' => '<i class="fa-regular fa-calendar-days"></i>'],
                    ['title' => 'Settings', 'active' => 'btn-primary-outline', 'icon' => '<i class="fa-solid fa-gear"></i>']
                  ];
                  foreach ($nav as $navItem) {
                ?>
                    <button style="font-size: 20px;" 
                        class=" btn <?= $navItem['active'] ?> py-3 d-flex justify-content-center align-items-center rounded-4 ">
                        <?= $navItem['icon'] ?>
                        <p class=" ms-3 m-0  "><?= $navItem['title']; ?></p>
                    </button>
              <?php
                  }
              ?>
            </div>
          </div>
          <div class="col-10 ">
            <!-- top bar  -->
            <nav>
              <div class="row">
                <div class="col-11 d-flex">
                  <input type="text" class=" form-control mb-0 ">
                  <button class=" btn btn-outline-primary ms-3 "><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="col-1 d-flex justify-content-end align-content-center ">
                  <button class=" btn btn-outline-primary " style=" font-size: 20px">
                    <i class="fa-solid fa-bell"></i>
                  </button>
                </div>
              </div>
            </nav>
            <!-- bottom card  -->
            <div class=" row ">
              <div class="col-6">
                <div class="  manual-card bg-primary"></div>
              </div>
              <div class="col-6">
                <div class="  manual-card bg-primary"></div>
              </div>
              <div class="col-6">
                <div class="  manual-card bg-primary"></div>
              </div>
              <div class="col-6">
                <div class="  manual-card bg-primary"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
