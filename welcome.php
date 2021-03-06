

    <?php

    // Initialize the session

    session_start();

     

    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

      header("location: login.php");

      exit;

    }

    ?>

     

    <!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<div class="container">
        <br>
            <br>

            <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>

        

        <p><a href="logout.php" class="button">Sign Out of Your Account</a></p>

    </body>

    </html>

