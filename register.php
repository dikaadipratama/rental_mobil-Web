<?php
// periksa apakah user sudah login, cek kehadiran session login
// jika tidak ada, redirect ke index.php
session_start();
  if (isset($_SESSION["login"])) {
     header("Location: index.php");
     exit;
  }

// buat koneksi ke mysql dari file koneksi.php
require("koneksi.php");

// cek apakah tombol register sudah ditekan
if(isset($_POST["register"])) {
  if(registrasi($_POST) > 0 ) {
      // buat alert javascript
      echo "<script>
          alert('User baru telah berhasil ditambahkan!');
      </script>";

  } else {
      echo mysqli_error($link);
  }
}

function registrasi($data) {
  global $link;

  // strtolower untuk mengubah semua huruf menjadi lowercase
  // stripslashes untuk menghiraukan simbol / pada inputan
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($link, $data["password"]);
  $password2 = mysqli_real_escape_string($link, $data["password2"]);

  // cek username dobel
  $result = mysqli_query($link, "SELECT username FROM tb_users WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)) {
      // buat alert javascript
      echo "<script>
          alert('Username sudah terdaftar')
      </script>";

      return false;
  }

  // cek konfirmasi password
  if($password !== $password2) {
    // buat alert javascript
    echo "<script>
      alert('konfirmasi password tidak sesuai!');
    </script>";
    return false;
  }
  
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  // $password = md5($password);
  // var_dump($password); die;

  // menambahkan user baru ke database
  mysqli_query($link, "INSERT INTO tb_users VALUES ('', '$username', '$password')");

  return mysqli_affected_rows($link);
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
    <title>Registrasi IDN Rental Car</title>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('img/img6.jpg')">
        <div class="wrap-login10 p-l-55 p-r-55 p-t-65 p-b-54">
          <form class="login100-form validate-form" action="" method="POST">
            <span class="login100-form-title p-b-49" style="margin-top: -10px;"> Registrasi </span>
            
            <!-- tampilkan error jika ada -->
            <?php if (isset($pesan_error)) : ?>
            <p class="error">Username dan/atau Password tidak sesuai</p>
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
              class="wrap-input100 validate-input m-b-23"
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

            <!-- konfirmasi password -->
            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <span class="label-input100">Konfirmasi Password</span>
              <input
                class="input101"
                type="password"
                name="password2"
                id="password2"
                placeholder="Type your password"
              />
              <span class="focus-input100" data-symbol="&#xf190;"></span>
              <div id="toggle2" onclick="showHide2();"></div>
            </div>

            <div class="text-right p-t-8 p-b-31"></div>
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <input class="login100-form-btn input-submit" type="submit" name="register" value="Register">
              </div>
              <div class="flex-col-c">
                <span class="txt1 p-b-10">Sudah Punya Akun?</span>
                <a href="login.php" class="txt2">Login</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- JS script -->
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
    <!-- password 2 -->
    <script type="text/javascript">
      const password2 = document.getElementById("password2");
      const toggle2 = document.getElementById("toggle2");

      function showHide2() {
        if (password2.type === "password2") {
          password2.setAttribute("type", "text");
          toggle2.classList.add("hide2");
        } else {
          password2.setAttribute("type", "password2");
          toggle2.classList.remove("hide2");
        }
      }
    </script>
  </body>
</html>
