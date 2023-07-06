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
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Post</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">All Post</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Add New</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Catagories</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Tags</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="media-page.php" class='sidebar-link'>
                                <i class="bi bi-images"></i>
                                <span>Media</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Comments</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>All Post Table</h3>
            </div>
            <!--  Inverse table start -->
            <section class="section">
                    <div class="row" id="table-inverse">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <!-- table with dark -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500">Michael Right</td>
                                                    <td><a href="#"><i class="badge-circle font-medium-1"
                                                                data-feather="mail"></i></a>
                                                                <button type="button" class="btn btn-outline-info">Edit</button>
                                                                <button type="button" class="btn btn-outline-info">Delete</button>
                                                                <button type="button" class="btn btn-outline-info">View</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">Michael Wrong</td>
                                                    <td><a href="#"><i class="badge-circle font-medium-1"
                                                                data-feather="mail"></i></a>
                                                                <button type="button" class="btn btn-outline-info">Edit</button>
                                                                <button type="button" class="btn btn-outline-info">Delete</button>
                                                                <button type="button" class="btn btn-outline-info">View</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">Michael Left</td>
                                                    <td><a href="#"><i class="badge-circle font-medium-1"
                                                                data-feather="mail"></i></a>
                                                                <button type="button" class="btn btn-outline-info">Edit</button>
                                                                <button type="button" class="btn btn-outline-info">Delete</button>
                                                                <button type="button" class="btn btn-outline-info">View</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inverse table end -->
            
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>