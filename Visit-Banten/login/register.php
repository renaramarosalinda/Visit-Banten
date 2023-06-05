<?php
// Include config file
require_once "koneksi.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // Validate username
   if (empty(trim($_POST["username"]))) {
      $username_err = "Please enter a username.";
   } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
      $username_err = "Username can only contain letters, numbers, and underscores.";
   } else {
      // Prepare a select statement
      $sql = "SELECT id FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
         // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($stmt, "s", $param_username);

         // Set parameters
         $param_username = trim($_POST["username"]);
         

         // Attempt to execute the prepared statement
         if (mysqli_stmt_execute($stmt)) {
            /* store result */
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
               $username_err = "This username is already taken.";
            } else {
               $username = trim($_POST["username"]);
            }
         } else {
            echo "Oops! Something went wrong. Please try again later.";
         }

         // Close statement
         mysqli_stmt_close($stmt);
      }
   }

   // Validate password
   if (empty(trim($_POST["password"]))) {
      $password_err = "Please enter a password.";
   } elseif (strlen(trim($_POST["password"])) < 6) {
      $password_err = "Password must have atleast 6 characters.";
   } else {
      $password = trim($_POST["password"]);
   }

   // Validate confirm password
   if (empty(trim($_POST["confirm_password"]))) {
      $confirm_password_err = "Please confirm password.";
   } else {
      $confirm_password = trim($_POST["confirm_password"]);
      if (empty($password_err) && ($password != $confirm_password)) {
         $confirm_password_err = "Password did not match.";
      }
   }

   // Check input errors before inserting in database
   if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

      // Prepare an insert statement
      $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

      if ($stmt = mysqli_prepare($link, $sql)) {
         // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

         // Set parameters
         $param_username = $username;
      
         $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

         // Attempt to execute the prepared statement
         if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page
            header("location: login.php");
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
   <title>Sign Up</title>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Visit Banten</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Wisata">Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">UMKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Rencanakan Perjalanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Artikel">Artikel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <div class="jumbotron">
   <div class="card login" style="width: 30rem; height: 25rem; border-radius: 25px ;">
   <div class="wrapper">
      <h2>Sign Up</h2>
      <p>Please fill this form to create an account.</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
         </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
         </div>
         <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
         </div>
         <div class="form-group" style="margin: 10px 0 10px 0;">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
         </div>
         <p>Already have an account? <a href="login.php">Login here</a>.</p>
      </form>
   </div>
   </div>
   </div>
</body>

</html>