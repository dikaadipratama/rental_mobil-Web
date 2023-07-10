<?php
// session (variabel sementara yg diletakkan di server)
// session_start (memulai session dan menyimpan di browser)
// periksa apakah user sudah login, cek kehadiran session name 
// jika tidak ada, redirect ke login.php
session_start();
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IDN Rent Car</title>
    <!--/ CSS /-->
    <link
      rel="stylesheet"
      href="css/styles.css"
    />
    <link
      rel="stylesheet"
      href="css/cobahover.css"
    />
    <!--/ ICON WEBSITE /-->
    <link rel="icon" type="image/x-icon" href="img/logo-utama.png" />
  </head>
  <body>
    
  <?php
  // NAVBAR
  include ("navbar_afterlogin.php");
  // HOME
  include ("home.php");
  // MOST RENT
  include ("mostrent.php");
  // CAR GARAGE
  include ("car_garage.php");
  // FOOTER
  include ("footer.php");
  ?>

  <!--/ JS SCRIPT /-->
  <script src="js/main.js"></script>
  </body>
</html>