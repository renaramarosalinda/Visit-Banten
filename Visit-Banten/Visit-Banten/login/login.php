   <?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
   header("location: ../index.html");
   exit;
}  

// Include config file
require_once "koneksi.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // Check if username is empty
   if (empty(trim($_POST["username"]))) {
      $username_err = "Please enter username.";
   } else {
      $username = trim($_POST["username"]);
   }

   // Check if password is empty
   if (empty(trim($_POST["password"]))) {
      $password_err = "Please enter your password.";
   } else {
      $password = trim($_POST["password"]);
   }

   // Validate credentials
   if (empty($username_err) && empty($password_err)) {
      // Prepare a select statement
      $sql = "SELECT id, username, password FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
         // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($stmt, "s", $param_username);

         // Set parameters
         $param_username = $username;

         // Attempt to execute the prepared statement
         if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) == 1) {
               // Bind result variables
               mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
               if (mysqli_stmt_fetch($stmt)) {
                  if (password_verify($password, $hashed_password)) {
                     // Password is correct, so start a new session
                     session_start();

                     // Store data in session variables
                     $_SESSION["loggedin"] = true;
                     $_SESSION["id"] = $id;
                     $_SESSION["username"] = $username;  

                     // Redirect user to welcome page
                     header("location: index.php");
                  } else {
                     // Password is not valid, display a generic error message
                     $login_err = "Invalid username or password.";
                  }
               }
            } else {
               // Username doesn't exist, display a generic error message
               $login_err = "Invalid username or password.";
            }
         } else {
            echo "Oops! Something went wrong. Please try again later.";
         }

         // Close statement
         mysqli_stmt_close($stmt);
      }
   }

   // Close connection
   mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
    

      .wrapper {
         width: auto;
         padding: 20px;
      }
   </style>
</head>

<body>
<link rel="stylesheet" href="style.css">

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
                <a class="nav-link" href="#"> Rencanakan Perjalanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#Artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


   <div class="jumbotron">
   <div class="card login" style="width: 30rem; height: 21rem; border-radius: 25px ;">
   <div class="wrapper">
      <h2>Login</h2>
      <p>Please fill in your credentials to login.</p>

      <?php
      if (!empty($login_err)) {
         echo '<div class="alert alert-danger">' . $login_err . '</div>';
      }
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
         </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
         </div>
         <div class="form-group" style="margin: 10px 0 10px 0;">
            <input type="submit" class="btn btn-primary" value="Login">
         </div>
         <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
      </form>
   </div>
   </div>
   </div>

   <footer class="bg-primary text-white text-center p-1">
      <p>
        Created @ <a class="text-white">KELOMPOK 6 PEMROGRAMAN WEB</a>
      </p>
    </footer>

</body>

</html>