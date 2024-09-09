<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project --> 
<html lang="en, ar">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>غيمة</title>   
   <link rel="stylesheet" href="Stories.css">
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
<div class="text">شـاهد القصص وتعلم</div>
<video id="screen"style='border:3px solid #020D4C; border-radius: 10px' width="600" controls>
<source src="videostories/SS1.MP4" type="video/mp4">
</video>
    
    
<div class="img_list">
			<div class="l_img" onclick="select_video('videostories/SS1.MP4')"><img  src="image/S1.png" ></div>
			<div class="l_img" onclick="select_video('videostories/SS2.MP4')"><img src="image/S2.png"></div>
            <div class="l_img" onclick="select_video('videostories/SS3.MP4')"><img src="image/S3.png"></div>
            <div class="l_img" onclick="select_video('videostories/SS4.MP4')"><img src="image/S4.png" ></div>
</div> 
 </div> 
  <script type="text/javascript">
   function select_video (the_video) {
   document.getElementById('screen').src=the_video;
    }
  </script>
</div>
    
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