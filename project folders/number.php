<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>غيمة</title>
    <link rel="stylesheet" href="number.css">
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
            <div class="text">تـعلم الارقام</div>
            <video id="screen" style='border:3px solid #020D4C; border-radius: 10px' width="600" controls>
                <source src="videonumber/1.mp4" type="video/mp4">
            </video>


            <div class="img_list">
                <div class="l_img" onclick="select_video('videonumber/1.MP4')"><img src="image/1.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/2.MP4')"><img src="image/2.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/3.MP4')"><img src="image/3.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/4.MP4')"><img src="image/4.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/5.MP4')"><img src="image/5.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/6.MP4')"><img src="image/6.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/7.MP4')"><img src="image/7.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/8.MP4')"><img src="image/8.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/9.MP4')"><img src="image/9.JPG"></div>
                <div class="l_img" onclick="select_video('videonumber/10.MP4')"><img src="image/10.JPG"></div>

                <script type="text/javascript">
                    function select_video(the_video) {
                        document.getElementById('screen').src = the_video;
                    }
                </script>
            </div>


            <!-- section2 (((Recognation))) -->

        </div>
    </div>

    <footer>
        <section>
        <div class="foot">
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
        </div>
        </section>

    </footer>

</body>

</html>