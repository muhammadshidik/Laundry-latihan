<?php
$navbarID = $_SESSION['id'];
$queryNavbar = mysqli_query($connection, "SELECT * FROM user WHERE id = '$navbarID'");
$dataNavbar = mysqli_fetch_assoc($queryNavbar);

?>
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="text-nowrap logo-img">
        <h5>Laundry App</h5>
        <img src="" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-6"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="sidebar-item <?= !isset($_GET['page']) || ($_GET['page'] == 'dashboard') ? 'active' : '' ?>">
          <a class="sidebar-link" href="?page=dashboard" aria-expanded="false">
            <i class="ti ti-home"></i>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        <?php if ($dataNavbar['id_level'] == 1) : ?>
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">Master Data</span>
          </li>
          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'user' || $_GET['page'] == 'add-user')) ? 'active' : '' ?>">
            <a class="sidebar-link justify-content-between "
              href="?page=user" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">User</span>
              </div>

            </a>
          </li>
          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'level' || $_GET['page'] == 'add-level')) ? 'active' : '' ?>">
            <a class="sidebar-link justify-content-between"
              href="#" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-id-badge"></i>
                </span>
                <span class="hide-menu">level</span>
              </div>

            </a>
          </li>
          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'customer' || $_GET['page'] == 'add-customer')) ? 'active' : '' ?>">
            <a class="sidebar-link justify-content-between "
              href="admin/content/user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="fa-regular fa-user"></i>
                </span>
                <span class="hide-menu">Customer</span>
              </div>

            </a>
          </li>
          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'service' || $_GET['page'] == 'add-service')) ? 'active' : '' ?> ">
            <a class="sidebar-link justify-content-between "
              href="admin/content/user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-harddrives"></i>
                </span>
                <span class="hide-menu">Service</span>
              </div>
            </a>
          </li>

          <!-- Operator -->

        <?php elseif ($dataNavbar['id_level'] == 2) : ?>
          <li class="sidebar-item">
            <a class="sidebar-link justify-content-between "
              href="admin/content/user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Transaction Data</span>
              </div>
            </a>
          </li>

          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'order' || $_GET['page'] == 'add-order')) ? 'active' : '' ?>">
            <a class="sidebar-link justify-content-between "
              href="user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Order</span>
              </div>
            </a>
          </li>

          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'pickup' || $_GET['page'] == 'add-pickup')) ? 'active' : '' ?>">
            <a class="sidebar-link justify-content-between "
              href="admin/content/user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Pickup</span>
              </div>
            </a>
          </li>

          <!-- Pimpinan -->
        <?php elseif ($dataNavbar['id_level'] == 3) : ?>
          <li class="sidebar-item">
            <a class="sidebar-link justify-content-between "
              href="admin/content/user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Transaction Data</span>
              </div>
            </a>
          </li>

          <li class="sidebar-item <?= (isset($_GET['page']) && ($_GET['page'] == 'report' || $_GET['page'] == 'add-report')) ? 'active' : '' ?>">
            <a class="sidebar-link justify-content-between "
              href="admin/content/user.php" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Report</span>
              </div>
            </a>
          </li>


          <li>
            <span class="sidebar-divider lg"></span>
          </li>
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">Auth</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
              <i class="ti ti-login"></i>
              <span class="hide-menu">Login</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
              href="#"
              aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Side Login</span>
              </div>

            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
              <i class="ti ti-user-plus"></i>
              <span class="hide-menu">Register</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
              href="#"
              aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Side Register</span>
              </div>
            </a>
            </a>
          </li>
      </ul>
    <?php endif ?>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>