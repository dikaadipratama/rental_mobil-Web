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

// array (untuk menyimpan data dalam jumlah banyak dalam tipe yg sama)
$title = 'IDN Rent Car';
$harga = 400000;
$produk = array(
  1 => array(
      'namamobil' => 'Audi A7',
      'gambar' => '../img/car/audi-rs7.png',
      'harga' => 22000000
  ),
  2 => array(
      'namamobil' => 'BMW i8',
      'gambar' => '../img/car/bmw-i8.png',
      'harga' => 26000000
  ),
  3 => array(
      'namamobil' => 'BMW 6',
      'gambar' => '../img/car/bmw-m3.png',
      'harga' => 21000000
  ),
  4 => array(
      'namamobil' => 'Daihatsu Terios',
      'gambar' => '../img/car/daihatsu-terios.png',
      'harga' => 450000
  ),
  5 => array(
      'namamobil' => 'Honda Brio',
      'gambar' => '../img/car/honda-brio.png',
      'harga' => 300000
  ),
  6 => array(
      'namamobil' => 'Honda Civic-R',
      'gambar' => '../img/car/honda-civic.png',
      'harga' => 2400000
  ),
  7 => array(
      'namamobil' => 'Honda CRV',
      'gambar' => '../img/car/honda-crv.png',
      'harga' => 1500000
  ),
  8 => array(
      'namamobil' => 'Nissan Leaf',
      'gambar' => '../img/car/honda-nissan.png',
      'harga' => 600000
  ),
  9 => array(
      'namamobil' => 'Lambo Huracan',
      'gambar' => '../img/car/lamborghini-huracan.png',
      'harga' => 36000000
  ),
  10 => array(
      'namamobil' => 'Mazda BT-50',
      'gambar' => '../img/car/mazda-bt-50.png',
      'harga' => 500000
  ),
  11 => array(
      'namamobil' => 'Mercy E300',
      'gambar' => '../img/car/mercedes-benz-e300.png',
      'harga' => 5000000
  ),
  12 => array(
      'namamobil' => 'Pajero Sport',
      'gambar' => '../img/car/mitsubishi-pajero.png',
      'harga' => 1400000
  ),
  13 => array(
      'namamobil' => 'Xpander',
      'gambar' => '../img/car/mitsubishi-xpander.png',
      'harga' => 500000
  ),
  14 => array(
      'namamobil' => 'Porsche 718',
      'gambar' => '../img/car/porsche-cayman.png',
      'harga' => 21000000
  ),
  15 => array(
      'namamobil' => 'Suzuki Ertiga',
      'gambar' => '../img/car/suzuki-ertiga.png',
      'harga' => 300000
  ),
  16 => array(
      'namamobil' => 'Toyota Alphard',
      'gambar' => '../img/car/toyota-alphard.png',
      'harga' => 2300000
  ),
  17 => array(
      'namamobil' => 'Toyota Avanza',
      'gambar' => '../img/car/toyota-avanza.png',
      'harga' => 300000
  ),
  18 => array(
      'namamobil' => 'Toyota Camry',
      'gambar' => '../img/car/toyota-camry.png',
      'harga' => 1200000
  ),
  19 => array(
      'namamobil' => 'Toyota Corolla',
      'gambar' => '../img/car/toyota-corolla.png',
      'harga' => 1200000
  ),
  20 => array(
      'namamobil' => 'Toyota Fortuner',
      'gambar' => '../img/car/toyota-fortuner.png',
      'harga' => 1600000
  ),
  21 => array(
      'namamobil' => 'Toyota Innova',
      'gambar' => '../img/car/toyota-innova.png',
      'harga' => 500000
  )
);

// isset (mengecek form apakah ada atau tidak)
// post (untuk memanggil data yg telah diinput)
if (isset($_POST['page']) && isset($_POST['nama']) && isset($_POST['alamat']) && $_POST['page'] == 'preview') {
    $pesan = 'Halo IDN Rent Car, Saya ingin menyewa :
    
[daftarsewa]

Dengan Identitas Sebagai Berikut :
Nama : '.$_POST['nama'].'
Alamat : '.$_POST['alamat'].'
Tanggal Pesan : '.$_POST['tgl_pesan'].'
Jaminan : '.$_POST['jaminan'].'

Terima kasih :)
';
  // session (variabel sementara yg diletakkan di server)
  $sewa = '';
  foreach ($_SESSION['chart'] as $key => $value) {
      $sewa .= '- '.$produk[$key]['namamobil'].' dengan lama sewa '.$value.' hari.';
      $jumlah = $jumlah + ($produk[$key]['harga']*$value);
  }
  $sewa .= ' Total Pembayaran : Rp '.number_format($jumlah);

  $pesan = str_replace('[daftarsewa]', $sewa, $pesan);
  $url = 'https://wa.me/6282233777084?text='.rawurlencode($pesan);
  unset($_SESSION['chart']);
  header('Location:'.$url);
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
      href="assets/img/logoutama.png"
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
      <div
        class="container-login100"
        style="background-image: url('img/img6.jpg')"
      >
        <div
          class="wrap-login102 p-l-55 p-r-55 p-t-65 p-b-54"
        >
          <form
            class="login100-form validate-form"
            action="pemesanan.php"
            method="POST"
          >
            <span class="login100-form-title"></span>
            <div class="car-item">
              <div class="car-caption space-text-car-bmw"></div>
              <span
                class="login100-form-title"
                style="
                  margin-top: -100px;
                  font-size: 28px;
                  padding-bottom: 30px;
                "
              >
                Form Pemesanan
              </span>
              <br />

              <!-- proses tombol tambah dan kurang lama sewa -->
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

              // hasil output tabel lama sewa
              echo '<table class="table" style="margin-top:-30px;">
              <thead>
              <tr>
              <th>Nama Mobil</th>
              <th style="padding-left:150px">Jumlah Hari</th>
              <th style="padding-left:83px;">Harga</th>
              </tr>
              </thead>
              </tbody>';
              
              // proses tombol tambah dan kurang lama sewa
              $jumlah = 0;
              foreach ($_SESSION['chart'] as $key => $value) {
                  echo '<tr><td>'.$produk[$key]['namamobil'].'</td><td style="padding-left:170px;padding-left:190px"> '.$value.' </td><td style="padding-left:60px;">'.number_format($produk[$key]['harga']*$value).'</td>
                  </tr>';
                  $jumlah = $jumlah + ($produk[$key]['harga']*$value);
              }

              // output total harga lama sewa
              echo '<tr><td colspan="2" style="padding-left:750px;"><b>Total</b></td><td style="padding-left:60px;"><b>'.number_format($jumlah).'</b></td></tr></tbody></table>';

              // output hasil input form penyewaan
              echo '
              <p style="color:black; font-size:20px; text-align:left;margin-top:50px;"><strong>Disewakan kepada :<br/></strong></p>
              <table class="table">
              <tr><td style="padding-left:0;border-top:none;">Nama : '. $_POST['nama_pemesan'].'<br/>
              <tr><td style="padding-left:0;">Alamat : '. $_POST['alamat'].'<br/>
              <tr><td style="padding-left:0;">Tanggal Pesan : '. $_POST['tgl_pesan'].'<br/>
              <tr><td style="padding-left:0;border-bottom:1px solid #e9ecef;">Jaminan : '. $_POST['jaminan'].'
              </table>
              ';
              ?>
            
            <!-- form sewa -->
            <form action="" method="post">
              <input
                type="hidden"
                name="nama"
                value="<?php echo $_POST['nama_pemesan'];?>"
              />
              <input
                type="hidden"
                name="alamat"
                value="<?php echo $_POST['alamat'];?>"
              />
              <input
                type="hidden"
                name="tgl_pesan"
                value="<?php echo $_POST['tgl_pesan'];?>"
              />
              <input
                type="hidden"
                name="jaminan"
                value="<?php echo $_POST['jaminan'];?>"
              />
              <input type="hidden" name="page" value="preview" />
              <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                  <div class="login100-form-bgbtn"></div>
                  <input
                    class="login100-form-btn input-submit"
                    type="submit"
                    name="submit"
                    value="SEWA SEKARANG"
                  />
                </div>
              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>