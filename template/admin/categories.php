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
                            <a href="#" class='sidebar-link'>
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
                    </ul>
                    <ul class="menu mt-5 ">
                        <li class="sidebar-item  ">
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
                <h3>Categories</h3>
            </div>
            <!-- Writting Settings start -->
            <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Writting Settings</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <h6>Default post categories</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <h6>Default post categories</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <h6>Default post categories</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <h6>Default post categories</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>IT</option>
                                                        <option>Blade Runner</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- Writting Settings End -->
            <!-- radio Start  -->
            
        </div>
            <!-- post via e-mail end  -->
            <!-- radio End  -->
            
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>