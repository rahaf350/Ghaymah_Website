<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>غيمة</title>
  <link rel="stylesheet" href="letters.css">
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
  </header>
  <!-- section1 (((LETTERS,VIDEOS))) -->
  <div class="section1">
    <div class="videos">
      <div class="text">تـعلم الحروف والكلمات</div>

      <video id="screen" style='border:3px solid #020D4C; border-radius: 10px' width="600" controls>
        <source src="videoletter/1.mp4" type="video/mp4">
      </video>


      <div class="img_list">
        <div class="l_img" onclick="select_video('videoletter/1.MP4')"><img src="image/ا.png"></div>
        <div class="l_img" onclick="select_video('videoletter/2.MP4')"><img src="image/ب.png"></div>
        <div class="l_img" onclick="select_video('videoletter/3.MP4')"><img src="image/ت.png"></div>
        <div class="l_img" onclick="select_video('videoletter/4.MP4')"><img src="image/ث.png"></div>
        <div class="l_img" onclick="select_video('videoletter/5.MP4')"><img src="image/ج.png"></div>
        <div class="l_img" onclick="select_video('videoletter/6.MP4')"><img src="image/ح.png"></div>
        <div class="l_img" onclick="select_video('videoletter/7.MP4')"><img src="image/خ.png"></div>
        <div class="l_img" onclick="select_video('videoletter/8.MP4')"><img src="image/د.png"></div>
        <div class="l_img" onclick="select_video('videoletter/9.MP4')"><img src="image/ذ.png"></div>
        <div class="l_img" onclick="select_video('videoletter/10.MP4')"><img src="image/ر.png"></div>
        <div class="l_img" onclick="select_video('videoletter/11.MP4')"><img src="image/ز.png"></div>
        <div class="l_img" onclick="select_video('videoletter/12.MP4')"><img src="image/س.png"></div>
        <div class="l_img" onclick="select_video('videoletter/13.MP4')"><img src="image/ش.png"></div>
        <div class="l_img" onclick="select_video('videoletter/14.MP4')"><img src="image/ص.png"></div>
        <div class="l_img" onclick="select_video('videoletter/15.MP4')"><img src="image/ض.png"></div>
        <div class="l_img" onclick="select_video('videoletter/16.MP4')"><img src="image/ط.png"></div>
        <div class="l_img" onclick="select_video('videoletter/17.MP4')"><img src="image/ظ.png"></div>
        <div class="l_img" onclick="select_video('videoletter/18.MP4')"><img src="image/ع.png"></div>
        <div class="l_img" onclick="select_video('videoletter/19.MP4')"><img src="image/غ.png"></div>
        <div class="l_img" onclick="select_video('videoletter/20.MP4')"><img src="image/ف.png"></div>
        <div class="l_img" onclick="select_video('videoletter/21.MP4')"><img src="image/ق.png"></div>
        <div class="l_img" onclick="select_video('videoletter/22.MP4')"><img src="image/ك.png"></div>
        <div class="l_img" onclick="select_video('videoletter/23.MP4')"><img src="image/ل.png"></div>
        <div class="l_img" onclick="select_video('videoletter/24.MP4')"><img src="image/م.png"></div>
        <div class="l_img" onclick="select_video('videoletter/25.MP4')"><img src="image/ن.png"></div>
        <div class="l_img" onclick="select_video('videoletter/26.MP4')"><img src="image/ه.png"></div>
        <div class="l_img" onclick="select_video('videoletter/27.MP4')"><img src="image/و.png"></div>
        <div class="l_img" onclick="select_video('videoletter/28.MP4')"><img src="image/ي.png"></div>
      </div>
    </div>
    <script type="text/javascript">
      function select_video(the_video) {
        document.getElementById('screen').src = the_video;
      }
    </script>
  </div>


  <!-- section2 (((Recognation))) -->
  <div class="section2">
    <div class="text">تهجأ حروف الكلمة، وإختبر صحة قراءتك</div>
    <br>
    <div class="box0">
      <div Class="box1">
        <p class="phrase">الكلمة</p>
      </div>
      <br>
      <div class="box2">
        <p class="result"></p>
        <p class="output"></p>
        <button style="border:3px solid #184534; color:white; font-size:20px;">إبدأ</button>
      </div>
    </div>
  </div>

  <footer>
    <section>
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

      <div class="sec4">
        <a href="skill.php">
          <img src="image/sec4.png">
        </a>
      </div>

      <div class="sec3">
        <a href="religion.php">
          <img src="image/sec3.png">
        </a>
      </div>

    </section>

  </footer>

  <script src="SpeechRecognation.js"></script>
</body>

</html>