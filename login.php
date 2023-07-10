<?php
// periksa apakah user sudah login, cek kehadiran session name 
// jika tidak ada, redirect ke index.php
session_start();
  if (isset($_SESSION["login"])) {
     header("Location: afterlogin.php");
     exit;
  }

// buat koneksi ke mysql dari file koneksi.php
require("koneksi.php");

// cek apakah tombol login sudah di tekan
if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($link, "SELECT * FROM tb_users WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1 ) {
      
      // cek password
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row["password"])) {

        // buat session
        $_SESSION["login"] = true;
        // arahkan ke halaman afterlogin.php
        header("Location:afterlogin.php");
        exit;
      }
    }

    $pesan_error = true;
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- ICON WEBSITE -->
    <link
      rel="icon"
      type="image/png"
      href="img/logo-utama.png"
    />
    <!-- MATERIAL ICONS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/material-design-iconic-font.min.css"
    />
    <!-- CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/util.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/login.css"
    />
    <title>Login IDN Rental Car</title>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('img/img6.jpg')">
        <div class="wrap-login100 p-l-55 p-r-55">
          <form class="login100-form validate-form" action="" method="POST">
            <span class="login100-form-title p-b-49"> Login </span>
            
            <!-- tampilkan error jika ada -->
            <?php if (isset($pesan_error)) : ?>
            <p class="error">Username atau Password tidak sesuai</p>
            <?php endif; ?>

            <!-- username -->
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Username is required"
            >
              <span class="label-input100">Username</span>
              <input
                class="input101"
                type="text"
                name="username"
                placeholder="Type your username"
              />
              <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>

            <!-- password -->
            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <span class="label-input100">Password</span>
              <input
                class="input101"
                type="password"
                name="password"
                id="password"
                placeholder="Type your password"
              />
              <span class="focus-input100" data-symbol="&#xf190;"></span>
              <div id="toggle" onclick="showHide();"></div>
            </div>

            <div class="text-right p-t-8 p-b-31"></div>
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <input class="login100-form-btn input-submit" type="submit" name="login" value="Login">
              </div>
              <div class="flex-col-c p-t-145">
              <span class="txt11 p-b-10">Belum Punya Akun?</span>
              <a href="register.php" class="txt2">Registrasi</a>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--/ JS SCRIPT /-->
    <script type="text/javascript">
      const password = document.getElementById("password");
      const toggle = document.getElementById("toggle");

      function showHide() {
        if (password.type === "password") {
          password.setAttribute("type", "text");
          toggle.classList.add("hide");
        } else {
          password.setAttribute("type", "password");
          toggle.classList.remove("hide");
        }
      }
    </script>
  </body>
</html>