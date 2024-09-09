<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>غيمة</title>
    <link rel="stylesheet" href="english.css">
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
        <div class="text1"> تعلم الحروف الانجليزية </div>
        <video id="screen" style='border:3px solid #020D4C; border-radius: 10px' width="600" controls>
            <source src="videoletter/a.mp4" type="video/mp4">
        </video>


        <div class="img_list">
            <div class="l_img" onclick="select_video('videoletter/d.MP4')"><img src="image/dd.png"></div>
            <div class="l_img" onclick="select_video('videoletter/c.MP4')"><img src="image/cc.png"></div>
            <div class="l_img" onclick="select_video('videoletter/b.MP4')"><img src="image/bb.png"></div>
            <div class="l_img" onclick="select_video('videoletter/a.MP4')"><img src="image/aa.png"></div>

        </div>
    </div>
    <script type="text/javascript">
        function select_video(the_video) {
            document.getElementById('screen').src = the_video;
        }
    </script>
    </div>

    <!--SpeechSynthesis -->
    <div class="section2">
        <div class="text1">ادخل الكلمة وتعرف على نطقها الصحيح</div>
        <label class="sec2">
            <br>
            <select class="chose-l" id="voices" class="form-select bg-secondary text-light"></select>

            <div>

                <div>
                    <input class="voice" type="range" min="0" max="1" value="1" step="0.1" id="volume" />

                </div>
                <div>
                    <input class="voice" type="range" min="0.1" max="1" value="0.7" id="rate" step="0.1" />

                </div>
            </div>
            <textarea placeholder="..اكتب الكلمة هنا لنساعدك على نطقها" rows="3" cols="29" style="border:3px solid #020D4C; border-radius:10px; font-size:30px"></textarea>

            <br>
        </label>
        <div>
            <br>
            <button id="start" style="color:white; font-size:20px;  cursor:pointer;">بدء</button>
            <button id="cancel" style="color:white; font-size:20px;  cursor:pointer;">الغاء</button>
        </div>
    </div>
    <script src="SpeechSynthesis.js"></script>


    <!--handwriting-->
    <div class="section3">
        <div class="text1">إختر حرفاً وتعلم طريقة كتابته</div>
        
        <img id="pic" class="imge" src="image/a.png">
        <canvas id="canvas" width='250' height='250' style='outline:3px solid #020D4C ; border-radius:5px;'></canvas>

        <br>
        <div class='buttons'>
            <button onclick="canvas.erase()" style="color:white; font-size:20px;  cursor:pointer;">إمسح</button>
            <button onclick="canvas.recognize()" style="color:white; font-size:20px; cursor:pointer;">النتيجة</button>
        </div>
      
        <div><span id='result'>..</div>
        <div class="img_list">
            <div class="l_img" onclick="select_pic('image/d.png')"><img src="image/dd.png"></div>
            <div class="l_img" onclick="select_pic('image/c.png')"><img src="image/cc.png"></div>
            <div class="l_img" onclick="select_pic('image/b.png')"><img src="image/bb.png"></div>
            <div class="l_img" onclick="select_pic('image/a.png')"><img src="image/aa.png"></div>
        </div>
    </div>
    <script type="text/javascript">
        function select_pic(the_pic) {
            document.getElementById('pic').src = the_pic;
        }
    </script>
    <script type="text/javascript" src="https://www.chenyuho.com/project/handwritingjs/handwriting.canvas.js"></script>
    <script type="text/javascript" src="handwriting.js"></script>


    <footer>
        <div class="foot">
            <div class="sec1">
                <a href="letters.php">
                    <img src="image/sec1 (2).png">
                </a>
            </div>

            <div class="sec22">
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

        </div>

    </footer>

</body>

</html>