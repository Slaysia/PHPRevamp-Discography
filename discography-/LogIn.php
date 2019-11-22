<?php 
$current = 'home';
include("./includes/header2.php");
?>



<body>

  <div class="wrapper">
    <!-- Navigation -->
    <nav class="main-nav">
      <ul>
        <li>
          <a href="http://site32.wdd.francistuttle.edu/PHPRevamp-Discography/index.php">Home</a>
        </li>
      </ul>
    </nav>

    <!-- Top Container -->
    <form>
      <p> INSERT ADMIN LOG IN FORM HERE </p>
    </form>

    <!-- Info Section -->


    <!-- Portfolio -->
     <div><p class="scrap-book">Album Covers</p></div> 
    <div class="portfolio">
        

      <img src="1994.jpg" alt="ace of base">
      <img src="1995.jpg" alt="ace of base">
      <img src="1997.jpg" alt="ace of base">
      <img src="1998.jpg" alt="ace of base">
      <img src="1999.jpg" alt="ace of base">
      <img src="2000.jpg" alt="ace of base">
      <img class="ipad1" src="2001.jpg" alt="ace of base">
      <img class="ipad1" src="2002.jpg" alt="ace of base">
      <img class="ipad" src="2003.jpg" alt="ace of base">
      <img class="ipad" src="aceofbaceforever.jpeg" alt="ace of base">
    </div>
       <section class="container-1">
           <div class="container">


                  


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