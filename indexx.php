
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="tmp/assets/img/favicon.png">
  <title>
    Material Dashboard 3 by Creative Tim
  </title>
  <head>
    <?php include("admin/linkCDN/css.php") ?>
  </head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Sidebar -->
    <?php include 'admin/inc/sidebar.php'?>
    <!-- End Sidebar -->
  <!-- Navbar -->
    <?php include("admin/inc/navbar.php") ?>
  <!-- End Navbar -->

  <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Content -->
            <?php
            if (isset($_GET['page'])) {
              if (file_exists('content/' . $_GET['page'] . '.php')) {
                include 'content/' . $_GET['page'] . '.php';
              } else {
                header("Location: content/misc/error.php");
                die;
              }
            } else {
              include 'admin/content/dashboard.php';
            }
            ?>
          </div>
 
  </div>
  <!--   Core JS Files   -->
  <?php
  include("admin/linkCDN/js.php");
  ?>
  
</body>

</html>