<?php
// session (variabel sementara yg diletakkan di server)
// session_start (memulai session dan menyimpan di browser)
// array (untuk menyimpan data dalam jumlah banyak dalam tipe yg sama)
session_start();
$title = 'IDN Rent Car';
$harga = 400000;
$produk = array(
  1 => array(
      'namamobil' => 'Audi A7',
      'gambar' => 'img/car/audi-rs7.png',
      'harga' => 22000000
  ),
  2 => array(
      'namamobil' => 'BMW i8',
      'gambar' => 'img/car/bmw-i8.png',
      'harga' => 26000000
  ),
  3 => array(
      'namamobil' => 'BMW 6',
      'gambar' => 'img/car/bmw-m3.png',
      'harga' => 21000000
  ),
  4 => array(
      'namamobil' => 'Daihatsu Terios',
      'gambar' => 'img/car/daihatsu-terios.png',
      'harga' => 450000
  ),
  5 => array(
      'namamobil' => 'Honda Brio',
      'gambar' => 'img/car/honda-brio.png',
      'harga' => 300000
  ),
  6 => array(
      'namamobil' => 'Honda Civic-R',
      'gambar' => 'img/car/honda-civic.png',
      'harga' => 2400000
  ),
  7 => array(
      'namamobil' => 'Honda CRV',
      'gambar' => 'img/car/honda-crv.png',
      'harga' => 1500000
  ),
  8 => array(
      'namamobil' => 'Nissan Leaf',
      'gambar' => 'img/car/honda-nissan.png',
      'harga' => 600000
  ),
  9 => array(
      'namamobil' => 'Lambo Huracan',
      'gambar' => 'img/car/lamborghini-huracan.png',
      'harga' => 36000000
  ),
  10 => array(
      'namamobil' => 'Mazda BT-50',
      'gambar' => 'img/car/mazda-bt-50.png',
      'harga' => 500000
  ),
  11 => array(
      'namamobil' => 'Mercy E300',
      'gambar' => 'img/car/mercedes-benz-e300.png',
      'harga' => 5000000
  ),
  12 => array(
      'namamobil' => 'Pajero Sport',
      'gambar' => 'img/car/mitsubishi-pajero.png',
      'harga' => 1400000
  ),
  13 => array(
      'namamobil' => 'Xpander',
      'gambar' => 'img/car/mitsubishi-xpander.png',
      'harga' => 500000
  ),
  14 => array(
      'namamobil' => 'Porsche 718',
      'gambar' => 'img/car/porsche-cayman.png',
      'harga' => 21000000
  ),
  15 => array(
      'namamobil' => 'Suzuki Ertiga',
      'gambar' => 'img/car/suzuki-ertiga.png',
      'harga' => 300000
  ),
  16 => array(
      'namamobil' => 'Toyota Alphard',
      'gambar' => 'img/car/toyota-alphard.png',
      'harga' => 2300000
  ),
  17 => array(
      'namamobil' => 'Toyota Avanza',
      'gambar' => 'img/car/toyota-avanza.png',
      'harga' => 300000
  ),
  18 => array(
      'namamobil' => 'Toyota Camry',
      'gambar' => 'img/car/toyota-camry.png',
      'harga' => 1200000
  ),
  19 => array(
      'namamobil' => 'Toyota Corolla',
      'gambar' => 'img/car/toyota-corolla.png',
      'harga' => 1200000
  ),
  20 => array(
      'namamobil' => 'Toyota Fortuner',
      'gambar' => 'img/car/toyota-fortuner.png',
      'harga' => 1600000
  ),
  21 => array(
      'namamobil' => 'Toyota Innova',
      'gambar' => 'img/car/toyota-innova.png',
      'harga' => 500000
  )
);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- ICON WEBSITE -->
    <link rel="icon" type="image/png" href="../img/logo-utama.png" />
    <!-- MATERIAL ICONS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="../fonts/material-design-iconic-font.min.css"
    />
    <!-- CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../css/util.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../css/login.css"
    />
    <title>Login IDN Rental Car</title>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('../img/img6.jpg')">
        <div class="wrap-login102 p-l-55 p-r-55 p-t-65 p-b-54">
        <a href="../rentcar.php" class="btn btn-back" style="width: 100px;margin-left:-30px;margin-top:-75px">Back</a>
          <form class="login100-form validate-form" action="../pemesanan.php" method="POST">
            <span class="login100-form-title" style="margin-top: 0;">TOYOTA COROLLA</span>
            <h4 class="margin0 text-center" style="font-size: 17px;">AD 1227 CA</h4>
            <div class="car-item">
              <img class="img-fluid" src="../img/car/toyota-corolla.png" style="width:50%; display:block;margin:auto;margin-top:10px;padding-bottom:100px"/>
              <div class="car-caption space-text-car-bmw">
            </div>
            <span class="login100-form-title" style="margin-top: -85px;font-size:28px;padding-bottom:30px"> Form Penyewaan </span>
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Username is required"
            >
              <span class="label-input100">Nama Pemesan</span>
              <input
                class="input100"
                type="text"
                name="nama_pemesan"
                id="nama_pemesan"
                placeholder="Masukan nama anda"
              />
              <span class="focus-input100"></span>
            </div>
            
            <!-- alamat -->
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Password is required"
            >
              <span class="label-input100">Alamat Lengkap</span>
              <input
                class="input100"
                type="text"
                name="alamat"
                id="alamat"
                placeholder="Masukan alamat lengkap"
              />
              <span class="focus-input100"></span>
            </div>
            
            <!-- tgl pesan -->
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Password is required"
            >
              <span class="label-input100">Tanggal Pesan</span>
              <input
                class="input100"
                type="text"
                name="tgl_pesan"
                id="tgl_pesan"
                placeholder="Masukan tanggal pesan"
              />
              <span class="focus-input100"></span>
            </div>

            <!-- jaminan -->
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Password is required"
            >
              <span class="label-input100">Jaminan (STNK/Sertifikat Rumah)</span>
              <input
                class="input100"
                type="text"
                name="jaminan"
                id="jaminan"
                placeholder="Masukan jaminan"
              />
              <span class="focus-input100"></span>
            </div>
            <a href="?beli=19" class="btn btn-lamasewa" type="button">
            <i></i>Klik Untuk Menentukan Lama Sewa
            </a>
            <br>
            <br>
            <br>
            <?php
            if (isset($_GET['beli']) && is_numeric($_GET['beli'])) {
                if (isset($_SESSION['chart'][$_GET['beli']])) {
                    $_SESSION['chart'][$_GET['beli']]++;
                } else {
                    $_SESSION['chart'][$_GET['beli']] = 1;
                }
            } elseif (isset($_GET['kurangi']) && is_numeric($_GET['kurangi'])) {
                if (isset($_SESSION['chart'][$_GET['kurangi']])) {
                    $_SESSION['chart'][$_GET['kurangi']]--;
                }
            } elseif (isset($_GET['tambah']) && is_numeric($_GET['tambah'])) {
                if (isset($_SESSION['chart'][$_GET['tambah']])) {
                    $_SESSION['chart'][$_GET['tambah']]++;
                }
            }
            if (isset($_SESSION['chart']) && count($_SESSION['chart']) > 0) {
            echo '<table class="table">
            <thead>
            <th style="padding-right:120px;padding-left:100px">Jumlah Hari</th>
            <th style="padding-right:112px;">Harga</th>
            </tr>
            </thead>
            </tbody>';
            $jumlah = 0;
            foreach ($_SESSION['chart'] as $key => $value) {
                echo '<tr><td style="padding-left:120px;"><a href="?kurangi='.$key.'" data-toggle="tooltip" title="Kurangi">&#10134;</a> '.$value.' <a href="?tambah='.$key.'" data-toggle="tooltip" title="Tambah">&#10133;</a></td><td style="padding-left:8px;">'.number_format($produk[$key]['harga']*$value).'</td>
                </tr>';
                $jumlah = $jumlah + ($produk[$key]['harga']*$value);
            }

                echo '<tr><td style="padding-left:240px;padding-top:22px"><b>Total</b></td><td style="padding-left:8px;padding-top:22px"><b>'.number_format($jumlah).'</b></td></tr></tbody></table>';
            }
            ?>
            <div class="text-right p-t-8 p-b-31"></div>
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <input class="login100-form-btn input-submit" type="submit" name="submit" value="Sewa Sekarang">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>