<?php

require 'functions.php';

$data = query ("SELECT * FROM umkm ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>UMKM</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../IMG/logo.png" alt="" width="120" height="40">
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
              <a class="nav-link active" aria-current="page" href="#">UMKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../rencanakan-perjalanan/index.php"> Rencanakan Perjalanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.html#Artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login/profil.php">Profile</a>
          </ul>
        </div>
      </div>
    </nav>

    <br /><br /><br />
    <!-- card -->
    <div class="container my-4">
      <!-- search button -->

    <form class="d-flex" role="search" method="" action="">
      <input class="form-control" type="text" id="searchInput" name="keyword" placeholder="Search" aria-label="Search" />
      <button class="btn btn-outline-success mr-2" type="submit" name="cari">Search</button>
    </form>
      <ul id="searchResults"></ul>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end my-3">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Sort by </a>
        <ul class="dropdown-menu" id="sort-menu">
          <li><a class="dropdown-item" href="#">UMKM</a></li>
          <li><a class="dropdown-item" href="#">Kuliner</a></li>
          <!-- make dropdown divider -->
          <li><hr class="dropdown-divider" /></li>
          <li><a class="dropdown-item" href="index.html">Show all</a></li>
        </ul>
      </div>
      <!-- end search button -->

      <!-- start card -->
      <!-- content row 1 -->
      <div class="row row-cols-1 row-cols-md-4 g-4" id="cardContainer">
      <?php $no = 1;?>
      <?php foreach($data as $row): ?>
        <div class="col">
          <div class="card h-80">
            <img src="source/img/thumbnails/<?= $row["thumbnail"] ?>" class="card-img-top" alt="Gambar <?= $no; ?>" />
            <div class="card-body">
              <h5 class="card-title" style="height: 50px; text-align: center"><?= $row["nama"] ?></h5>
              <p class="card-text" style="height: 100px; text-align: justify"><span class="card-category"><?= $row["kategori"] ?></span> <?= $row["deskripsi"] ?></p>
              <td class="card-footer"><a href="page.php?id=<?= $row["id"] ?>" style="text-decoration: none; color: black">See More</a></td>
            </div>
          </div>
        </div>
        <?php $no++;?>
        <?php endforeach;?>  
      </div>
      <!-- end card -->
    </div>

    <!-- footer -->
    <footer class="bg-primary text-white text-center p-1">
      <p>Created @ <a class="text-white">KELOMPOK 6 PEMROGRAMAN WEB</a></p>
    </footer>
    <script>
      // sort
      const cardContainer = document.querySelector(".row-cols-1");
      const sortMenu = document.getElementById("sort-menu");

      sortMenu.addEventListener("click", function (event) {
        event.preventDefault();
        const selectedCategory = event.target.textContent;
        const cards = cardContainer.querySelectorAll(".col");

        cards.forEach(function (card) {
          const cardCategory = card.querySelector(".card-category").textContent;
          if (selectedCategory === "Sort by" || selectedCategory === cardCategory) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
          if (selectedCategory === "Show all") {
            card.style.display = "block";
          }
        });
      });

      //search
      const searchInput = document.getElementById('searchInput');
      const cards = cardContainer.getElementsByClassName('col');

      searchInput.addEventListener('input', function(event) {
        const keyword = event.target.value.toLowerCase();

        for (let i = 0; i < cards.length; i++) {
          const card = cards[i];
          const title = card.getElementsByClassName('card-title')[0].textContent.toLowerCase();
          const category = card.getElementsByClassName('card-category')[0].textContent.toLowerCase();
          const description = card.getElementsByClassName('card-text')[0].textContent.toLowerCase();
          
          if (title.includes(keyword) || category.includes(keyword) || description.includes(keyword)) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        }
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
