<?php
// isset (mengecek form apakah ada atau tidak)
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
    <!-- ICON WEBSITE -->
    <link rel="icon" type="image/x-icon" href="img/logo-utama.png" />
    <!-- FONT AWESOME ICONS (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- MATERIAL ICONS -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
    />
    <!-- CSS -->
    <link
      rel="stylesheet"
      href="css/styles.css"
    />
    <link
      rel="stylesheet"
      href="css/cobahover.css"
    />
  </head>
  <body>
    <!--/ CAR GARAGE /-->
    <section class="page-section2" id="car">
      <a href="afterlogin.php" class="btn btn-back">
        <!-- fa-angle-left -->
        <!-- fa-arrow-left -->
        <i class="fas fa-arrow-left"></i>&nbsp; Kembali
      </a>
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Car Garage</h2>
          <hr class="both-line2" />
          <h3 class="section-subheading text-muted">
            Berikut beberapa mobil yang tersedia saat ini
          </h3>
        </div>
        <div class="row">
          <!-- car 1 -->
          <div class="col-lg-4">
            <div class="car-item">
              <img class="img-fluid space-car" src="img/car/audi-rs7.png" />
              <div class="car-caption space-text-car-audi">
                <div class="car-caption-heading">AUDI A7</div>
                <h4 class="margin0">AD 1736 KO</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 22.000.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal1" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car1.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 2 -->
          <div class="col-lg-4">
            <div class="car-item">
              <img class="img-fluid" src="img/car/bmw-i8.png" />
              <div class="car-caption space-text-car-bmw-i8">
                <div class="car-caption-heading">BMW i8</div>
                <h4 class="margin0">AD 5576 FO</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 26.000.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal2" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car2.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 3 -->
          <div class="col-lg-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-bmw-m3"
                src="img/car/bmw-m3.png"
              />
              <div class="car-caption space-text-car-bmw-m3">
                <div class="car-caption-heading">BMW 6</div>
                <h4 class="margin0">AD 5184 FH</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 21.000.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal3" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car3.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 4 -->
          <div class="both-line-car"></div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car"
                src="img/car/daihatsu-terios.png"
                alt=""
              />
              <div class="car-caption space-text-car-terios">
                <div class="car-caption-heading">DAIHATSU TERIOS</div>
                <h4 class="margin0">AD 4586 JK</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 450.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal4" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car4.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 5 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car"
                src="img/car/honda-brio.png"
                alt=""
              />
              <div class="car-caption space-text-car-brio">
                <div class="car-caption-heading">HONDA BRIO</div>
                <h4 class="margin0">AD 1583 GA</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 300.000
                </div>
                <button href="#" class="btn-danger">Tidak Tersedia</button
                ><br />
                <a href="#portfolioModal5" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="#" class="btn no-stok">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 6 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car"
                src="img/car/honda-civic.png"
                alt=""
              />
              <div class="car-caption space-text-car-civic">
                <div class="car-caption-heading">HONDA CIVIC-R</div>
                <h4 class="margin0">AD 2581 XR</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 2.400.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal6" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car6.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 7 -->
          <div class="both-line-car"></div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-crv"
                src="img/car/honda-crv.png"
                alt=""
                style="padding-top: 46px"
              />
              <div class="car-caption space-text-car-crv">
                <div class="car-caption-heading">HONDA CRV</div>
                <h4 class="margin0">AD 1253 BC</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 1.500.000
                </div>
                <button href="#" class="btn-danger">Tidak Tersedia</button
                ><br />
                <a href="#portfolioModal7" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="#" class="btn no-stok">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 8 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-nissan"
                src="img/car/honda-nissan.png"
                alt=""
                style="padding-top: 7px"
              />
              <div class="car-caption space-text-car-bmw-m3">
                <div class="car-caption-heading">NISSAN LEAF</div>
                <h4 class="margin0">AD 2065 ER</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 600.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal8" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car8.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 9 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-lambo"
                src="img/car/lamborghini-huracan.png"
                alt=""
                style="padding-top: 37px"
              />
              <div
                class="car-caption"
                style="padding-bottom: 15px; margin-top: 21px"
              >
                <div class="car-caption-heading">LAMBO HURACAN</div>
                <h4 class="margin0">AD 7084 LH</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 36.000.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal9" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car9.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 10 -->
          <div class="both-line-car"></div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-crv"
                src="img/car/mazda-bt-50.png"
                alt=""
              />
              <div class="car-caption space-text-car-lambo">
                <div class="car-caption-heading">MAZDA BT-50</div>
                <h4 class="margin0">AD 5053 MD</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 500.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal10" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car10.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 11 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-nissan"
                src="img/car/mercedes-benz-e300.png"
                alt=""
              />
              <div class="car-caption space-text-car-mercy">
                <div class="car-caption-heading">MERCY E300</div>
                <h4 class="margin0">AD 2673 MC</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 5.000.000
                </div>
                <button href="#" class="btn-danger">Tidak Tersedia</button
                ><br />
                <a href="#portfolioModal11" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="#" class="btn no-stok">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 12 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-pajero"
                src="img/car/mitsubishi-pajero.png"
                alt=""
              />
              <div class="car-caption space-text-car-pajero">
                <div class="car-caption-heading">PAJERO SPORT</div>
                <h4 class="margin0">AD 1833 HQ</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 1.400.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal12" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car12.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 13 -->
          <div class="both-line-car"></div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-crv"
                src="img/car/mitsubishi-xpander.png"
                alt=""
              />
              <div class="car-caption space-text-car-brio">
                <div class="car-caption-heading">XPANDER</div>
                <h4 class="margin0">AD 5194 MA</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 500.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal13" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car13.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 14 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-porsche"
                src="img/car/porsche-cayman.png"
                alt=""
              />
              <div class="car-caption space-text-car-nissan">
                <div class="car-caption-heading">PORSCHE 718</div>
                <h4 class="margin0">AD 5398 PO</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 21.000.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal14" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car14.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 15 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-crv"
                src="img/car/suzuki-ertiga.png"
                alt=""
              />
              <div class="car-caption space-text-car-mercy">
                <div class="car-caption-heading">SUZUKI ERTIGA</div>
                <h4 class="margin0">AD 3842 YK</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 300.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal15" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car15.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 16 -->
          <div class="both-line-car"></div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-alphard"
                src="img/car/toyota-alphard.png"
                alt=""
              />
              <div class="car-caption space-text-car-alphard">
                <div class="car-caption-heading">TOYOTA ALPHARD</div>
                <h4 class="margin0">AD 6679 PI</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 2.300.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal16" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car16.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 17 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-alphard"
                src="img/car/toyota-avanza.png"
                alt=""
              />
              <div class="car-caption space-text-car-avanza">
                <div class="car-caption-heading">TOYOTA AVANZA</div>
                <h4 class="margin0">AD 4912 VA</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 300.000
                </div>
                <button href="#" class="btn-danger">Tidak Tersedia</button
                ><br />
                <a href="#portfolioModal17" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="#" class="btn no-stok">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 18 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-alphard"
                src="img/car/toyota-camry.png"
                alt=""
                style="margin-top: -33px"
              />
              <div
                class="car-caption space-text-car-camry"
                style="margin-top: 4px"
              >
                <div class="car-caption-heading">TOYOTA CAMRY</div>
                <h4 class="margin0">AD 3913 BT</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 1.200.000
                </div>
                <button href="#" class="btn-danger">Tidak Tersedia</button
                ><br />
                <a href="#portfolioModal18" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="#" class="btn no-stok">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 19 -->
          <div class="both-line-car"></div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-alphard"
                src="img/car/toyota-corolla.png"
                alt=""
              />
              <div class="car-caption space-text-car-camry">
                <div class="car-caption-heading">TOYOTA COROLLA</div>
                <h4 class="margin0">AD 1227 CA</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 1.200.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal19" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car19.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 20 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-alphard"
                src="img/car/toyota-fortuner.png"
                alt=""
              />
              <div class="car-caption space-text-car-camry">
                <div class="car-caption-heading">FORTUNER</div>
                <h4 class="margin0">AD 7124 PI</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 1.600.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal20" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car20.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
          <!-- car 21 -->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="car-item">
              <img
                class="img-fluid space-car-crv"
                src="img/car/toyota-innova.png"
                alt=""
              />
              <div class="car-caption space-text-car-innova">
                <div class="car-caption-heading">TOYOTA INNOVA</div>
                <h4 class="margin0">AD 8821 IA</h4>
                <div class="car-caption-subheading text-muted margin0">
                  RP 500.000
                </div>
                <button href="#" class="btn-success">Tersedia</button><br />
                <a href="#portfolioModal21" class="btn" data-toggle="modal">
                  <i class="fas fa-info-circle"></i>&nbsp; DETAIL
                </a>
                <br />
                <a href="car/car21.php" class="btn">
                  <i class="fas fa-car"></i>&nbsp; SEWA SEKARANG
                </a>
              </div>
            </div>
          </div>
        </div>
        <br />
      </div>
    </section>
    <!--/ CAR GARAGE END /-->

    <!--/ FOOTER /-->
    <?php
    include ("footer.php");
    ?>
    <!--/ FOOTER END /-->

    <!--/ POP UP MODALS /-->
    <!-- modal 1-21 -->
    <?php
    include ("modal/modal1.php");
    include ("modal/modal2.php");
    include ("modal/modal3.php");
    include ("modal/modal4.php");
    include ("modal/modal5.php");
    include ("modal/modal6.php");
    include ("modal/modal7.php");
    include ("modal/modal8.php");
    include ("modal/modal9.php");
    include ("modal/modal10.php");
    include ("modal/modal11.php");
    include ("modal/modal12.php");
    include ("modal/modal13.php");
    include ("modal/modal14.php");
    include ("modal/modal15.php");
    include ("modal/modal16.php");
    include ("modal/modal17.php");
    include ("modal/modal18.php");
    include ("modal/modal19.php");
    include ("modal/modal20.php");
    include ("modal/modal21.php");
    ?>
    <!--/ POP UP MODALS END /-->

    <!--/ BOOTSTRAP CORE JS /-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--/ SCRIPT JS /-->
    <script src="js/main.js"></script>
  </body>
</html>