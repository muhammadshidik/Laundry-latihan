<?php
session_start();
require_once 'admin/controller/koneksi.php';
require_once 'admin/controller/functions.php';
if (isset($_POST['login'])) {
  $email    = $_POST['email'];
  $password = $_POST['password'];

  $queryLogin = mysqli_query($connection, "SELECT * FROM user WHERE email='$email' AND password='$password'");

  // mysqli_num_row() : untuk melihat total data di dalam table
  if (mysqli_num_rows($queryLogin) > 0) {
    $rowLogin = mysqli_fetch_assoc($queryLogin);
    if ($password == $rowLogin['password']) {
      $_SESSION['id'] = $rowLogin['id'];
       $_SESSION['name'] = $rowLogin['name'];
      header("location:index.php");
      die;
    } else {
      header("location:login.php?login=failed");
      die;
    }
  } 
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flexy Free Bootstrap Admin Template by WrapPixel</title>
  <link rel="shortcut icon" type="image/png" href="tmp/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="tmp/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="tmp/assets/images/logos/logo.svg" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                  <!-- Alert  -->
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'failed') : ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        Invalid email or password.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php elseif (isset($_GET['register']) && $_GET['register'] == 'success'): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        Your account has registered successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif ?>
                  <!-- END Alert  -->
                <form action="" method="POST">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  value=""
                  autofocus>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="Enter your password"
                    aria-describedby="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button href="" name="login" type="submit" class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>