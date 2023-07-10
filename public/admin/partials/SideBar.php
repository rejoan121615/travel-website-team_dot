<?php
$req_url = $_SERVER['REQUEST_URI'];
$extract_current_link = explode('/', $req_url);
$current_page = end($extract_current_link);
?>

<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <div class="d-flex justify-content-between">
        <div class="logo w-100 ">
          <a href="../view/index.php" class=" btn btn-success fw-bold d-block ">Go To Website</a>
        </div>
        <div class="toggler">
          <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-item <?php if ($current_page == 'dashboard.php') echo 'active'; ?>">
          <a href="dashboard.php" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item <?php if (
          ($current_page == 'all-post.php') || 
          ($current_page == 'new-post.php') || 
          ($current_page == 'categories.php') ||
          ($current_page == 'tags.php')
          )  echo 'active'; ?>  has-sub">
          <a href="" class='sidebar-link '>
            <i class="bi bi-stack"></i>
            <span>Post</span>
          </a>
          <ul class="submenu <?php if (
          ($current_page == 'all-post.php') || 
          ($current_page == 'new-post.php') || 
          ($current_page == 'categories.php') ||
          ($current_page == 'tags.php')
          )  echo ' d-block '; ?> ">
            <li class="submenu-item <?php if ($current_page == 'all-post.php') echo 'active'; ?>">
              <a href="all-post.php">All Post</a>
            </li>
            <li class="submenu-item <?php if ($current_page == 'new-post.php') echo 'active'; ?>">
              <a href="new-post.php">New Post</a>
            </li>
            <li class="submenu-item <?php if ($current_page == 'categories.php') echo 'active'; ?>">
              <a href="categories.php">Categories</a>
            </li>
            <!-- <li class="submenu-item <?php if ($current_page == 'tags.php') echo 'active'; ?>">
              <a href="tags.php">Tags</a>
            </li> -->
          </ul>
        </li>
        <li class="sidebar-item <?php if ($current_page == 'media.php') echo 'active'; ?>">
          <a href="media.php" class='sidebar-link'>
            <i class="bi bi-images"></i>
            <span>Media</span>
          </a>
        </li>
        <!-- <li class="sidebar-item <?php if ($current_page == 'comments.php') echo 'active'; ?>">
          <a href="comments.php" class='sidebar-link'>
            <i class="bi bi-chat-dots-fill"></i>
            <span>Comments</span>
          </a>
        </li> -->
        <!-- <li class="sidebar-item <?php if ($current_page == 'users.php') echo 'active'; ?>">
          <a href="users.php" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Users</span>
          </a>
        </li> -->
        <li
          class="sidebar-item <?php if (($current_page == 'profile.php') || ($current_page == 'update-profile.php') ) echo 'active'; ?>">
          <a href="profile.php" class='sidebar-link'>
            <i class="bi bi-person-fill"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="logout.php" class='sidebar-link '>
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>