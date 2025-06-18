<?php 
session_start();
session_regenerate_id();
ob_start();
ob_clean();
require_once 'admin/controller/koneksi.php';
require_once 'admin/controller/functions.php';
if (empty($_SESSION['id'])) {
  header('Location: admin/controller/logout.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laundry App</title>
  <link rel="shortcut icon" type="image/png" href="https://img.freepik.com/premium-vector/simple-laundry-logo_756483-88.jpg?semt=ais_hybrid&w=740" />
 <?php include("admin/linkCDN/css.php")?>
 <!-- Bootstrap CSS -->

<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!--  App Topstrip -->
    <?php include("admin/inc/topstrip.php")?>
    <!-- Sidebar Start -->
    <?php include("admin/inc/sidebar.php")?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
   <?php include("admin/inc/mainWrapper.php")?>
  </div>

  <!-- link CDN -->
  <?php include("admin/linkCDN/js.php")?>
</body>

</html>