<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Ace of Base - Songlist</title>
</head>



<body>


  <div class="wrapper">
    <!-- Navigation -->
    <nav class="main-nav">

          <h1><a href="http://site32.wdd.francistuttle.edu/PHPRevamp-Discography/index.php">Home</a></h1>

    </nav>

    <!-- Top Container -->
    <section  class="top-container">
      <div>
        <form action="../db_connection/dc_connection.php" method="post">
                
          <div class="container">
              <h2 class="subscribe">Admin Log In</h2>
              <p class="subscribe">Ace of Base SQL Database</p>
          </div>
          <br>
          <div class="container">
            <input  type="text" placeholder="Username" name="Username" required>
            <input  type="text" placeholder="Password" name="Password" required>
          </div>
          <br>
          <div class="container btn">
            <input type="submit" value="Log In">
          </div>
    
        </form>
      </div>

    </section>

    <!-- Boxes Section -->
    <section class="boxes">

    </section>


<?php
include '../db_connection/db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>


<!-- Footer -->
      <footer id="main-footer" class="grid">
         <div>&copy;
         <?php
         // echo date('Y');
      $startYear = 2018;
      $thisYear = date('Y');
      if ($startYear == $thisYear) {
        echo $startYear;
      } else {
        echo "{$startYear}&ndash;{$thisYear}"; 
      }
       ?>
       ACE OF BASE</div>
         <!---end footer-->
      </footer>
   </body>
</html>