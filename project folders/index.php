<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>غيمة</title>
   <link rel="stylesheet" href="home.css">
   <meta charset="utf-8">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">

</head>

<!-- START WEBSITE BODY -->

<body>

   <!-- NAV BAR -->
   <header class="header">
      <?php include_once 'nav.php'; ?>
      <!-- MAIN HEADER -->
      <!-- HEADER CONTENT -->
      <div class="header-content">
         <h1>مرحبًـا بك في غَيمة</h1>
         <h3>هُـنا تستطيع أن تتعلم وتستمتع في آن واحد</h3>
         <div class="discover-div"><a class="dicover" href="#finish">إكتشف معنا</a></div>
      </div>
   </header>

   <!-- finish div for scrolling bage to butto-->
   <div id="finish"></div>
   <!--sections-->
   <section>

      <div class="sections">
         <div class="sec1">
            <a href="letters.php">
               <img src="image/sec1 (2).png">
            </a>
         </div>

         <div class="sec2">
            <a href="number.php">
               <img src="image/sec2.png">
            </a>
         </div>
      </div>

      <div class="sections2">
         <div class="sec3">
            <a href="religion.php">
               <img src="image/sec3.png">
            </a>
         </div>

         <div class="sec4">
            <a href="skill.php">
               <img src="image/sec4.png">
            </a>
         </div>
      </div>

      <div class="footer">
         <address>
            <div class="text">Taibah University , Almadinah Almunawwarah | <a href = "mailto: Ghaymahproj2@gmail.com">Ghaymahproj2@gmail.com</a></div>
            <div class="text">Made With Rahaf, Mii, Reem, Rana</div>
         </address>
      </div>

   </section>
S
</body>

</html>