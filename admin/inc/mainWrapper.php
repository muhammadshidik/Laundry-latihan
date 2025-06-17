 <?php
  // getting account data
  $idNav = $_SESSION['id'];
  $queryNav = mysqli_query($connection, "SELECT user.*, level.level_name FROM user LEFT JOIN level ON user.id_level = level.id WHERE user.id = '$idNav'");
  $rowNav  = mysqli_fetch_array($queryNav);
  ?>

 <div class="body-wrapper">
   <!--  Header Start -->
   <header class="app-header">
     <nav class="navbar navbar-expand-lg navbar-light">
       <ul class="navbar-nav">
         <li class="nav-item d-block d-xl-none">
           <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
             <i class="ti ti-menu-2"></i>
           </a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="ti ti-bell"></i>
             <div class="notification bg-primary rounded-circle"></div>
           </a>
           <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
             <div class="message-body">
               <a href="javascript:void(0)" class="dropdown-item">
                 Item 1
               </a>
               <a href="javascript:void(0)" class="dropdown-item">
                 Item 2
               </a>
             </div>
           </div>
         </li>
       </ul>
       <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
         <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

           <li class="nav-item dropdown">
             <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
               aria-expanded="false">
               <img src="<?= !empty($rowNav['profile_picture']) && file_exists('../img/profile_picture/' . $rowNav['profile_picture']) ? 'img/profile_picture/' . $rowNav['profile_picture'] : 'https://placehold.co/100' ?>" alt="" width="35" height="35" class="rounded-circle">
             </a>
             <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">

               <div class="message-body">
                 <div class="d-flex align-items-center gap-2 dropdown-item">
                   <div class="avatar avatar-online">
                     <img src="<?= !empty($rowNav['profile_picture']) && file_exists('../img/profile_picture/' . $rowNav['profile_picture']) ? 'img/profile_picture/' . $rowNav['profile_picture'] : 'https://placehold.co/100' ?>" alt class="w-px-40 h-auto rounded-circle" />
                   </div>
                   <span
                     class="fw-semibold d-block"><?= isset($rowNav['username']) ? $rowNav['username'] : '-- your name --' ?></span>
                   <small
                     class="text-muted"><?= isset($rowNav['level_name']) ? $rowNav['level_name'] : 'unleveled' ?></small>
                 </div>
                 <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                   <i class="ti ti-user fs-6"></i>
                   <p class="mb-0 fs-3">My Profile</p>
                 </a>
                 <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                   <i class="ti ti-mail fs-6"></i>
                   <p class="mb-0 fs-3">My Account</p>
                 </a>
                 <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                   <i class="ti ti-list-check fs-6"></i>
                   <p class="mb-0 fs-3">My Task</p>
                 </a>
                 <a href="admin/controller/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
               </div>
             </div>
           </li>
         </ul>
       </div>
     </nav>
   </header>
   <!--  Header End -->
   <div class="body-wrapper-inner">
     <div class="container-fluid">
       <!--  Row 1 -->
       <div class="row">
         <div class="card">
           <div class="card-body">
             <?php
              if (isset($_GET['page'])) {
                if (file_exists('admin/content/' . $_GET['page'] . '.php')) {
                  include 'admin/content/' . $_GET['page'] . '.php';
                } else {
                  header("Location: admin/content/misc/error.php");
                  die;
                }
              } else {
                include 'admin/content/dashboard.php';
              }
              ?>
           </div>
         </div>
       </div>
       <div class="py-6 px-6 text-center">
         <p class="mb-0 fs-4">Design and Developed by <a href="#"
             class="pe-1 text-primary text-decoration-underline">Wrappixel.com</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
       </div>
     </div>
   </div>
 </div>