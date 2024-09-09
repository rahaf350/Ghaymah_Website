<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>غيمة</title>
  <link rel="stylesheet" href="shapes_colors.css">
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">
</head>

<!-- START WEBSITE BODY -->

<body>
  <header class="header">
    <!-- NAV BAR -->
    <?php include_once 'nav.php'; ?>
  </header>

  <!-- 1بداية الالوان-->
  <div class="sec1">
    <div class="text">إسحب المربعات وضعها في لونها المناسب</div>
    <div class="colours_div s1">
      <section class="draggable-elements">
        <i class="fas fa-square draggable0" draggable="true" style="color: #009a14" id="green0"></i>
        <i class="fas fa-square draggable0" draggable="true" style="color: #000000" id="black0"></i>
        <i class="fas fa-square draggable0" draggable="true" style="color: #ff00bb" id="pink0"></i>
        <i class="fas fa-square draggable0" draggable="true" style="color: #ffb700" id="yellow0"></i>
        <i class="fas fa-square draggable0" draggable="true" style="color: #0c00e9" id="blue0"></i>
        <i class="fas fa-square draggable0" draggable="true" style="color: #ff0000" id="red0"></i>
      </section>
      <section class="droppable-elements">
        <div class="droppable0" style="border:10px solid #ffb700; border-radius: 15px; width:70px; height:70px;" data-draggable-id0="yellow0"><span>اصفر</span></div>
        <div class="droppable0" style="border:10px solid #000000; border-radius: 15px; width:70px; height:70px;" data-draggable-id0="black0"><span>اسود</span></div>
        <div class="droppable0" style="border:10px solid #ff0000; border-radius: 15px; width:70px; height:70px;" data-draggable-id0="red0"><span>احمر</span></div>
        <div class="droppable0" style="border:10px solid #009a14; border-radius: 15px; width:70px; height:70px;" data-draggable-id0="green0"><span>اخضر</span></div>
        <div class="droppable0" style="border:10px solid #ff00bb; border-radius: 15px; width:70px; height:70px;" data-draggable-id0="pink0"><span>وردي</span></div>
        <div class="droppable0" style="border:10px solid #0c00e9; border-radius: 15px; width:70px; height:70px;" data-draggable-id0="blue0"><span>ازرق</span></div>
      </section>
    </div>
    <br>
    <!--1نهاية الالوان-->

    <!-- 2بداية الالوان-->
    <div class="text">إسحب الالوان وضعها عند اسمها</div>
    <div class="colours_div s2">
      <section class="draggable-elements">
        <i class="fas fa-palette draggable" draggable="true" style="color: #ff0000" id="red"></i>
        <i class="fas fa-palette draggable" draggable="true" style="color: #0c00e9" id="blue"></i>
        <i class="fas fa-palette draggable" draggable="true" style="color: #ffb700" id="yellow"></i>
        <i class="fas fa-palette draggable" draggable="true" style="color: #009a14" id="green"></i>
        <i class="fas fa-palette draggable" draggable="true" style="color: #000000" id="black"></i>
        <i class="fas fa-palette draggable" draggable="true" style="color: #ff00bb" id="pink"></i>
      </section>
      <section class="droppable-elements">
        <div class="droppable" data-draggable-id="black"><span>اسود</span></div>
        <div class="droppable" data-draggable-id="yellow"><span>اصفر</span></div>
        <div class="droppable" data-draggable-id="red"><span>احمر</span></div>
        <div class="droppable" data-draggable-id="green"><span>اخضر</span></div>
        <div class="droppable" data-draggable-id="blue"><span>ازرق</span></div>
        <div class="droppable" data-draggable-id="pink"><span>وردي</span></div>
      </section>
    </div>
  </div>
  <!--2نهاية الالوان-->

  <!--بداية الاشكال1-->
  <div class="sec2">
    <div class="text">إسحب الاشكال وضعها في مكانها المناسب</div>
    <div class="colours_div s3">
      <section class="draggable-elements">
        <i class="fas fa-moon draggable1" draggable="true" style="color: #ff4603" id="moon"></i>
        <i class="fas fa-circle draggable1" draggable="true" style="color: #25a502" id="circle"></i>
        <i class="fas fa-dice-d6 draggable1" draggable="true" style="color: #ff4603" id="dice-d6"></i>
        <i class="fas fa-square draggable1" draggable="true" style="color: #25a502" id="square"></i>
        <i class="fas fa-star draggable1" draggable="true" style="color: #ff4603" id="star"></i>
        <i class="fas fa-heart draggable1" draggable="true" style="color: #25a502" id="heart"></i>
      </section>
      <section class="droppable-elements">
        <div class="droppable1" data-draggable-id1="dice-d6"><span><i class="fas fa-dice-d6" style="color: #000000"></i><i class="fas fa-dice-d6" style="color: #000000"></i><i class="fas fa-dice-d6" style="color: #000000"></i></span></div>
        <div class="droppable1" data-draggable-id1="square"><span><i class="fas fa-square" style="color: #000000"></i><i class="fas fa-square" style="color: #000000"></i><i class="fas fa-square" style="color: #000000"></i></span></div>
        <div class="droppable1" data-draggable-id1="star"><span><i class="fas fa-star" style="color: #000000"></i><i class="fas fa-star" style="color: #000000"></i><i class="fas fa-star" style="color: #000000"></i></span></div>
        <div class="droppable1" data-draggable-id1="heart"><span><i class="fas fa-heart" style="color: #000000"></i><i class="fas fa-heart" style="color: #000000"></i><i class="fas fa-heart" style="color: #000000"></i></span></div>
        <div class="droppable1" data-draggable-id1="moon"><span><i class="fas fa-moon" style="color: #000000"></i><i class="fas fa-moon" style="color: #000000"></i><i class="fas fa-moon" style="color: #000000"></i></span></div>
        <div class="droppable1" data-draggable-id1="circle"><span><i class="fas fa-circle" style="color: #000000"></i><i class="fas fa-circle" style="color: #000000"></i><i class="fas fa-circle" style="color: #000000"></i></span></div>

      </section>
    </div>
    <br>
    <!--نهاية الاشكال1-->

    <!-- 2بداية الاشكال-->
    <div class="text">إسحب الاشكال وضعها عند اسمها</div>
    <div class="colours_div s4">
      <section class="draggable-elements">
        <i class="fas fa-heart draggable2" draggable="true" style="color: #36017a" id="heart2"></i>
        <i class="fas fa-moon draggable2" draggable="true" style="color: #d400b8" id="moon2"></i>
        <i class="fas fa-star draggable2" draggable="true" style="color: #36017a" id="star2"></i>
        <i class="fas fa-dice-d6 draggable2" draggable="true" style="color: #d400b8" id="dice-d62"></i>
        <i class="fas fa-circle draggable2" draggable="true" style="color: #36017a" id="circle2"></i>
        <i class="fas fa-square draggable2" draggable="true" style="color: #d400b8" id="square2"></i>
      </section>
      <section class="droppable-elements">
        <div class="droppable2" data-draggable-id2="dice-d62"><span>مكعب<br><i class="fas fa-dice-d6" style="color: #ffffff"></i></span></div>
        <div class="droppable2" data-draggable-id2="moon2"><span>هلال<br><i class="fas fa-moon" style="color: #ffffff"></i></span></div>
        <div class="droppable2" data-draggable-id2="star2"><span>نجمة<br><i class="fas fa-star" style="color: #ffffff"></i></span></div>
        <div class="droppable2" data-draggable-id2="circle2"><span>دائرة<br><i class="fas fa-circle" style="color: #ffffff"></i></span></div>
        <div class="droppable2" data-draggable-id2="heart2"><span>قلب<br><i class="fas fa-heart" style="color: #ffffff"></i></span></div>
        <div class="droppable2" data-draggable-id2="square2"><span>مربع<br><i class="fas fa-square" style="color: #ffffff"></i></span></div>
      </section>
    </div>
  </div>
  <!--2نهاية الاشكال-->

  <div class="sec3">
    <div class="text">اختر لوحة ولونها</div>
    <div class="canva">
      <img id="pic" class="imge" src="image/c1.jpg">
      <canvas id="canvas" width="500" height="500"></canvas>
      <div class="toolbox">
        <button id="increase">+</button>
        <span id="size">10</span>
        <button id="decrease">-</button>
        <input type="color" id="color">
        <button id="clear">مسح</button>
      </div>
    </div>
    <div class="img_list">
      <div class="l_img" onclick="select_pic('image/c1.jpg')"><img src="image/c1.jpg"></div>
      <div class="l_img" onclick="select_pic('image/c2.jpg')"><img src="image/c2.jpg"></div>
      <div class="l_img" onclick="select_pic('image/c3.jpg')"><img src="image/c3.jpg"></div>
      <div class="l_img" onclick="select_pic('image/c4.jpg')"><img src="image/c4.jpg"></div>
      <div class="l_img" onclick="select_pic('image/c5.jpg')"><img src="image/c5.jpg"></div>
    </div>
  </div>
  <script type="text/javascript">
    function select_pic(the_pic) {
      document.getElementById('pic').src = the_pic;
    }
  </script>
  </div>

  <!--روابط الجافا والتنسيق والايقونات-->
  <script src="color_canvas.js"></script>
  <link rel="stylesheet" href="dd.css" />
  <script src="https://kit.fontawesome.com/5567b4c04e.js" crossorigin="anonymous"></script>
  <script src="Drag+Drop.js"></script>



  <footer>
    <div class="foot">
      <div class="sec11">
        <a href="letters.php">
          <img src="image/sec1 (2).png">
        </a>
      </div>

      <div class="sec22">
        <a href="number.php">
          <img src="image/sec2.png">
        </a>
      </div>

      <div class="sec44">
        <a href="skill.php">
          <img src="image/sec4.png">
        </a>
      </div>

      <div class="sec33">
        <a href="religion.php">
          <img src="image/sec3.png">
        </a>
      </div>

    </div>
  </footer>
</body>

</html>