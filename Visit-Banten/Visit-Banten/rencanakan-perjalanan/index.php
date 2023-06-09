<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
   header("location: index.php");
   exit;
}
?>

<!DOCTYPE html>
<html lang="english">
  <head>
    <title>Visit Banten | Rencanakan Perjalanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <style data-tag="reset-style-sheet">
      html {
        line-height: 1.15;
      }
      body {
        margin: 0;
      }
      * {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
      }
      p,
      li,
      ul,
      pre,
      div,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      figure,
      blockquote,
      figcaption {
        margin: 0;
        padding: 0;
      }
      button {
        background-color: transparent;
      }
      button,
      input,
      optgroup,
      select,
      textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
      }
      button,
      select {
        text-transform: none;
      }
      button,
      [type="button"],
      [type="reset"],
      [type="submit"] {
        -webkit-appearance: button;
      }
      button::-moz-focus-inner,
      [type="button"]::-moz-focus-inner,
      [type="reset"]::-moz-focus-inner,
      [type="submit"]::-moz-focus-inner {
        border-style: none;
        padding: 0;
      }
      button:-moz-focus,
      [type="button"]:-moz-focus,
      [type="reset"]:-moz-focus,
      [type="submit"]:-moz-focus {
        outline: 1px dotted ButtonText;
      }
      a {
        color: inherit;
        text-decoration: inherit;
      }
      input {
        padding: 2px 4px;
      }
      img {
        display: block;
      }
      html {
        scroll-behavior: smooth;
      }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);
      }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./rencanakan-perjalanan.css" rel="stylesheet" />

      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../IMG/logo.png" alt="" width="120" height="40" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#Wisata">Wisata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../umkm/index.php">UMKM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> Rencanakan Perjalanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#Artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../login/profil.php">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="jumbotron"></section>

      <div class="rencanakan-perjalanan-container">
        <div class="rencanakan-perjalanan-rencanakan-perjalanan">
          <img src="public/external/background14-qhco-1600h.png" alt="Background14" class="rencanakan-perjalanan-background" />
          <div class="rencanakan-perjalanan-checkout">
            <span class="rencanakan-perjalanan-text">
              <span href="#" onclick="showPopup()">Checkout</span>
            </span>
            <script>
              function showPopup() {
                alert("Pembayaran berhasil!");
              }
            </script>
            <span class="rencanakan-perjalanan-text02"><span name="totalvalue">0</span></span>
            <span class="rencanakan-perjalanan-text04">
              <span>Total:</span>
            </span>
            <img src="public/external/line17027-538.svg" alt="Line17027" class="rencanakan-perjalanan-line1" />
          </div>
          <div class="rencanakan-perjalanan-button" name="input_data">
            <span class="rencanakan-perjalanan-text06">
              <input type="number" name="0" value="0" min="0" />
            </span>
            <span class="rencanakan-perjalanan-text08">
              <input type="number" name="1" value="0" min="0" />
            </span>
            <span class="rencanakan-perjalanan-text10">
              <input type="number" name="2" value="0" min="0" />
            </span>
            <span class="rencanakan-perjalanan-text12">
              <input type="number" name="3" value="0" min="0" />
            </span>
            <span class="rencanakan-perjalanan-text14">
              <input type="number" name="4" value="0" min="0" />
            </span>
            <span class="rencanakan-perjalanan-text16">
              <input type="number" name="5" value="0" min="0" />
            </span>
            <span class="rencanakan-perjalanan-text18">
              <input type="number" name="6" value="0" min="0" />
            </span>
          </div>
          <div class="rencanakan-perjalanan-hoteldan-penginapan" name="data_penginapan">
            <span class="rencanakan-perjalanan-text20">
              <span name="pricevalue">888,000</span>
            </span>
            <span class="rencanakan-perjalanan-text22">
              <span> Jl. Anyer Sirih KM 129, Anyer, Serang, Banten, Indonesia </span>
            </span>
            <span class="rencanakan-perjalanan-text24">
              <span>Grand Anyer Palazo Boutique Resort by NARAYA</span>
            </span>
            <img src="public/external/palazo4122-jhcm-200h.png" alt="Palazo4122" class="rencanakan-perjalanan-palazo" />
            <span class="rencanakan-perjalanan-text26">
              <span name="pricevalue">1,642,000</span>
            </span>
            <span class="rencanakan-perjalanan-text28">
              <span> Jl. Anyer Sirih No. 136, Anyer, Serang, Banten, Indonesia </span>
            </span>
            <span class="rencanakan-perjalanan-text30">
              <span>Kadena Glamping Dive Resort</span>
            </span>
            <img src="public/external/kadena4123-9kxm-200h.png" alt="Kadena4123" class="rencanakan-perjalanan-kadena" />
            <span class="rencanakan-perjalanan-text32">
              <span name="pricevalue">1,511,000</span>
            </span>
            <span class="rencanakan-perjalanan-text34">
              <span> Jl. Carita Labuan KM 7, Anyer, Serang, Banten, Indonesia </span>
            </span>
            <span class="rencanakan-perjalanan-text36">
              <span>Mutiara Carita Cottages</span>
            </span>
            <img src="public/external/mutiara4122-ayel-200h.png" alt="Mutiara4122" class="rencanakan-perjalanan-mutiara" />
            <span class="rencanakan-perjalanan-text38">
              <span name="pricevalue">953,000</span>
            </span>
            <span class="rencanakan-perjalanan-text40">
              <span> Jl. Karang Bolong KM 17 / 135, Anyer, Serang, Banten, Indonesia </span>
            </span>
            <span class="rencanakan-perjalanan-text42">
              <span>The Jayakarta Villas Anyer</span>
            </span>
            <img src="public/external/jayakarta4112-rm1a-200h.png" alt="Jayakarta4112" class="rencanakan-perjalanan-jayakarta" />
            <span class="rencanakan-perjalanan-text44">
              <span name="pricevalue">1,890,000</span>
            </span>
            <span class="rencanakan-perjalanan-text46">
              <span>Jl. Anyer KM 149, Anyer, Serang, Banten, Indonesia</span>
            </span>
            <span class="rencanakan-perjalanan-text48">
              <span>Novus Jiva Anyer Villa Resort and SPA</span>
            </span>
            <img src="public/external/novus4113-iqjr-200h.png" alt="Novus4113" class="rencanakan-perjalanan-novus" />
            <span class="rencanakan-perjalanan-text50">
              <span>Hotel dan Penginapan</span>
            </span>
            <div class="rencanakan-perjalanan-homeline">
              <img src="public/external/pathi412-2wi-200h.png" alt="PathI412" class="rencanakan-perjalanan-path" />
              <img src="public/external/vectori412-bzzf.svg" alt="VectorI412" class="rencanakan-perjalanan-vector" />
            </div>
          </div>
          <div class="rencanakan-perjalanan-transportasi" name="data_transportasi">
            <div class="rencanakan-perjalanan-jakarta">
              <span class="rencanakan-perjalanan-text52">
                <span name="pricevalue">68,000</span>
              </span>
              <span class="rencanakan-perjalanan-text54">
                <span class="rencanakan-perjalanan-text55">Estimasi:</span>
                <span>1j 48m (99 km)</span>
              </span>
              <div class="rencanakan-perjalanan-kampung-rambutan">
                <span class="rencanakan-perjalanan-text57">
                  <span>Terminal Kepandaian, Banten</span>
                </span>
                <img src="public/external/arrowleftrightline4107-vklf.svg" alt="arrowleftrightline4107" class="rencanakan-perjalanan-arrowleftrightline" />
                <span class="rencanakan-perjalanan-text59">
                  <span>Terminal Kampung Rambutan, Jakarta</span>
                </span>
              </div>
              <img src="public/external/jakarta4104-nj7-200h.png" alt="Jakarta4104" class="rencanakan-perjalanan-jakarta1" />
            </div>
            <div class="rencanakan-perjalanan-surabaya">
              <span class="rencanakan-perjalanan-text61">
                <span name="pricevalue">300,000</span>
              </span>
              <span class="rencanakan-perjalanan-text63">
                <span class="rencanakan-perjalanan-text64">Estimasi:</span>
                <span>10j 29m (855 km)</span>
              </span>
              <div class="rencanakan-perjalanan-purabaya">
                <span class="rencanakan-perjalanan-text66">
                  <span>Terminal Kepandaian, Banten</span>
                </span>
                <img src="public/external/arrowleftrightline4108-6f0q.svg" alt="arrowleftrightline4108" class="rencanakan-perjalanan-arrowleftrightline1" />
                <span class="rencanakan-perjalanan-text68">
                  <span>Terminal Purabaya, Surabaya</span>
                </span>
              </div>
              <img src="public/external/surabaya4108-kjlc-200h.png" alt="Surabaya4108" class="rencanakan-perjalanan-surabaya1" />
            </div>
            <span class="rencanakan-perjalanan-text70">
              <span>Transportasi</span>
            </span>
            <img src="public/external/carline4103-6mf.svg" alt="carline4103" class="rencanakan-perjalanan-carline" />
          </div>
          <div class="rencanakan-perjalanan-rencanakan-perjalanan1">
            <img src="public/external/travelicon4101-gjb-200h.png" alt="TravelIcon4101" class="rencanakan-perjalanan-travel-icon" />
            <span class="rencanakan-perjalanan-text72">
              <input type="date" id="date" />
            </span>
            <span class="rencanakan-perjalanan-text74">
              <span>Rencanakan Perjalanan</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-primary text-white text-center p-1">
      <p>Created @ <a class="text-white">KELOMPOK 6 PEMROGRAMAN WEB</a></p>
    </footer>
  </body>

  <script src="./script.js"></script>
</html>
