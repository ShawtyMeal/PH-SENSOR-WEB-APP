   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notif Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
           <i class="far fa-bell"></i>
           <span class="badge badge-danger navbar-badge">2</span>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">2 Notifications</span>
          <a href="plantinfo.html" class="dropdown-item">
            <!-- Notif Start -->
            <div class="media">
              <img src="pics/arce.jpeg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Leaf Lettuce
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Notif End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="plantinfo2.html" class="dropdown-item">
            <!-- Notif Start -->
            <div class="media">
              <img src="pics/logo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Water Spinatch
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Notif End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Dark Mode -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#">
          <i id="darkModeButton" i class="fa-regular fa-moon"></i>
        </a>
      </li>

      <?php
        include('../dbcon.php');

        $uid = $_SESSION['verified_user_id'];
        $user = $auth->getUser($uid);
        ?>


      <li class="nav-item dropdown user user-menu">
  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
    <img src="dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
    <span class="hidden-xs"><?=$user->displayName;?></span>
  </a>
  <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <!-- User image -->
    <li class="user-header bg-primary">
      <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      <p>
        <?=$user->displayName;?>
        <small>Member since Nov. 2012</small>
      </p>
    </li>
    <!-- Menu Footer -->
    <li class="user-footer">
      <div class="text mt-3"> <!-- Use text-left class instead of pull-left -->
        <a href="my-profile.php" class="btn btn-default btn-flat">Profile</a>
        <a href="../logout.php " class="btn btn-default btn-flat float-right">Sign out</a>
      </div>
    </li>
  </ul>
</li>




  </ul>
  </nav>
      <!-- LOGOUT
      <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php">
          <i class="fa-solid fa-right-from-bracket"></i>
        </a>
      </li>
    </ul>
  </nav> -->
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="pics/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 8">
      <span class="brand-text font-weight-light">Rosa L. Susano</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="pics/arce.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

        <a href="#" class="d-block">Hi! <?=$user->displayName;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fa-solid fa-gauge"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="plants.php" class="nav-link">
              <i class="fa-solid fa-seedling"></i>
              <p>Plants</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="history.php" class="nav-link">
              <i class="fa-solid fa-clock-rotate-left"></i>
              <p>History</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="report.php" class="nav-link">
              <i class="fa-solid fa-file-pen"></i>
              <p>Report</p>
            </a>
          </li>


        <li class="nav-item">
          <a href="recommendation.php" class="nav-link">
            <i class="fa-solid fa-thumbs-up"></i>
            <p>Recommendation</p>
          </a>
        </li>

          <li class="nav-header">USER</li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="fa-solid fa-user-plus"></i>
              <p>
                Manage Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user-gear"></i>
              <p>
                Account Settings
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>