<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <title>Visit Banten</title>
  </head>
  <body id="Home">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    
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
              <a class="nav-link" href="../umkm/index.php">UMKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../rencanakan-perjalanan/index.php"> Rencanakan Perjalanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.html#Artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Profile</a>
          </ul>
        </div>
      </div>
    </nav>

 <!-- jumbotron -->
 <section class="jumbotron text-center">
      <!-- <div class="Judul"><h1 class="display-4">Welcome to Banten</h1>
        <p class="lead">Banten is one of the provinces in Indonesia with a variety of natural attractions. starting from Flora, Fauna, to beautiful beaches</p> -->
      </div>

    <div class="jumbotron">
   <div class="card login" style="width: 30rem; height: 21rem; border-radius: 25px ;">
   <div class="wrapper">
      <h2>Detail Profile</h2>
      

      <?php
      if (!empty($login_err)) {
         echo '<div class="alert alert-danger">' . $login_err . '</div>';
      }
      ?>

      <form style="text-align:left; padding: 10px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <div class="form-group">
            <label>Username : </label>
            <span>admin</span>
         </div>
         <div class="form-group">
            <label>Password : </label>
            <span>admin12345</span>
         </div>
         <form method="post">
    <input type="submit" name="logoutButton" value="Logout" style="background: red;
    color: white;
    padding: 4;
    cursor: pointer;
    position:absolute;
    bottom:50px;
    right: 50px;
    ">
</form>
              <?php
// Initialize the session   
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (isset($_POST['logoutButton'])) { 
  session_destroy();
 header("Location: ./login.php");
     exit();
 }
?>
         </div>
         
      </form>
   </div>
   </div>
   </div>