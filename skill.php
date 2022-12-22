<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>غيمة</title>
   <link rel="stylesheet" href="skill.css">
   <meta charset="utf-8">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">
   <script src="https:\\ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
   <!-- NAV BAR -->
   <header class="header">
      <?php include_once 'nav.php'; ?>
   </header>
   </header>
   <!-- sections -->
   <section>

      <div class="sections">
         <div class="sec1">
            <a href="english.php">
               <img src="image/sec11.png">
            </a>
         </div>

         <div class="sec2">
            <a href="shapes_colors.php">
               <img src="image/sec22.png">
            </a>
         </div>
      </div>

      <div class="sections2">
         <div class="sec3">
            <a href="Stories.php">
               <img src="image/sec33.png">
            </a>
         </div>

         <div class="sec4">
            <a href="nature.php">
               <img src="image/sec44.png">
            </a>
         </div>
      </div>

   </section>

   <footer>
      <div class="foot">
         <div class="sec111">
            <a href="letters.php">
               <img src="image/sec1 (2).png">
            </a>
         </div>

         <div class="sec222">
            <a href="number.php">
               <img src="image/sec2.png">
            </a>
         </div>

         <div class="sec444">
            <a href="skill.php">
               <img src="image/sec4.png">
            </a>
         </div>

         <div class="sec333">
            <a href="religion.php">
               <img src="image/sec3.png">
            </a>
         </div>

      </div>

   </footer>

</body>

</html>