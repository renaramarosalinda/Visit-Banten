<?php

require 'functions.php';
$id = $_GET["id"];
$data = query("SELECT * FROM umkm WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Visit Banten</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.html">UMKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Rencanakan Perjalanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Profil">Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <br /><br /><br />
    <!-- carousel -->
    <div class="container">
      <div class="container-lg my-3">
        <div id="image" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active c-item" class="img-fluid">
              <img src="source/img/content/<?= $data["content_satu"] ?>" class="d-block w-100 c-img" style="border-radius: 10px" alt="Slide 1" />
            </div>
            <div class="carousel-item c-item" class="img-fluid">
              <img src="source/img/content/<?= $data["content_dua"] ?>" class="d-block w-100 c-img" style="border-radius: 10px" alt="Slide 2" />
            </div>
            <div class="carousel-item c-item" class="img-fluid">
              <img src="source/img/content/<?= $data["content_tiga"] ?>" class="d-block w-100 c-img" style="border-radius: 10px" alt="Slide 3" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#image" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#image" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <!-- akhir carousel -->
      <h2 class="text-center my-4" style="color: #12294a"><?= $data["nama"] ?></h2>

      <div class="container my-5" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px">
        <div class="left-column">
          <!-- Konten kolom kiri -->
          <!-- table -->
          <table class="table">
            <tr>
              <td>Kategori</td>
              <td>:</td>
              <td><?= $data["kategori"] ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?= $data["alamat"] ?></td>
            </tr>
            <tr>
              <td>Jam Buka</td>
              <td>:</td>
              <td><?= $data["jam_buka"] ?></td>
            </tr>
            <tr>
              <td>Telepon</td>
              <td>:</td>
              <td><?= $data["telepon"] ?></td>
            </tr>
            <tr>
              <td>Deskripsi</td>
              <td>:</td>
              <td style="text-transform: capitalize;"><?= $data["deskripsi"] ?></td>
            </tr>
            <tr>
              <td>Website</td>
              <td>:</td>
              <td><?= $data["website"] ?></td>
            </tr>
          </table>
        </div>
        <div class="right-column">
          <iframe
            src="<?= $data["maps"] ?>"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-info" type="button"><a href="<?= $data["website"] ?>" style="text-decoration: none; color: white;">Go to Website</a></button>
        <button class="btn btn-primary" type="button"><a href="index.php" style="text-decoration: none; color: white;">Back</a></button>
      </div>
      <br>
    </div>

    <!-- footer -->
    <footer class="bg-primary text-white text-center p-1">
      <p>Created @ <a class="text-white">KELOMPOK 6 PEMROGRAMAN WEB</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
