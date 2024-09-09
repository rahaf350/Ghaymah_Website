<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>غيمة</title>
    <link rel="stylesheet" href="nature.css">
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
        <div class="text">مرر الفأرة واستمع </div>
        <div class="img">
            <img src="image/nutral.png" usemap="#image-map">
        </div>

        <map name="image-map">
            <area style="cursor: pointer" target="_blank" alt="tiger" title="نمر" coords="40,271,38,311,32,315,21,307,14,304,17,317,30,325,41,319,45,310,43,291,45,278,50,294,47,303,51,319,53,327,57,332,64,328,59,323,54,310,62,301,67,289,74,303,73,308,79,325,83,330,92,329,92,323,86,323,82,308,87,294,97,296,103,299,107,311,109,320,109,334,115,337,124,335,120,329,116,315,125,294,128,303,141,313,151,323,144,329,150,335,157,324,147,303,139,289,141,282,146,286,152,283,159,280,167,277,168,268,169,256,170,249,179,246,175,236,166,235,162,240,148,236,134,232,124,231,122,245,111,249,103,256,89,257,72,247,55,255" shape="poly" onmouseover="document.getElementById('audiotiger').play()" onmouseout="document.getElementById('audiotiger').pause()">
            <area style="cursor: pointer" target="_blank" alt="sheep" title="خروف" coords="204,240,196,259,202,261,202,274,204,298,216,300,213,284,218,285,223,296,235,296,228,282,235,279,238,304,250,304,247,283,253,282,252,296,256,300,266,299,263,278,266,258,276,253,279,248,271,237,276,224,267,223,254,221,247,224,232,223,233,231,242,236,238,241" shape="poly" onmouseover="document.getElementById('audiosheep').play()" onmouseout="document.getElementById('audiosheep').pause()">
            <area style="cursor: pointer" target="_blank" alt="elephant" title="فيل" coords="400,187,374,200,358,198,330,232,325,240,343,263,363,267,365,273,381,268,388,290,380,298,369,291,362,283,350,285,347,291,363,311,373,315,388,316,402,310,411,300,408,322,403,335,399,343,411,351,434,343,437,289,451,294,451,332,454,337,453,349,488,348,490,334,509,332,508,290,516,291,519,337,556,336,545,287,547,253,537,231,554,246,559,261,564,257,559,241,544,226,519,204,501,196,491,189,452,173,420,191" shape="poly" onmouseover="document.getElementById('audioelephant').play()" onmouseout="document.getElementById('audioelephant').pause()">
            <area style="cursor: pointer" target="_blank" alt="tree" title="شجرة" coords="513,3,484,51,481,87,499,116,531,143,565,147,576,129,591,123,595,214,666,216,665,137,671,117,697,126,711,131,728,129,745,119,746,101,748,73,747,39,750,0" shape="poly" onmouseover="document.getElementById('audiotree').play()" onmouseout="document.getElementById('audiotree').pause()">
            <area style="cursor: pointer" target="_blank" alt="rocks" title="صخور" coords="6,403,19,391,27,365,80,345,121,365,139,372,177,350,215,373,237,401,237,413,196,415,161,403,139,411,81,410,59,410" shape="poly" onmouseover="document.getElementById('audioroks').play()" onmouseout="document.getElementById('audioroks').pause()">
            <area style="cursor: pointer" target="_blank" alt="sun" title="شمس" coords="67,29,40,56,41,99,67,120,103,119,131,97,133,67,126,45,99,27" shape="poly" onmouseover="document.getElementById('audiosun').play()" onmouseout="document.getElementById('audiosun').pause()">
            <area style="cursor: pointer" target="_blank" alt="cloud" title="غيمة" coords="344,80,337,86,328,85,324,91,308,91,308,98,321,98,330,104,346,102,354,107,366,104,373,103,386,99,385,92,371,91,367,83,358,83" shape="poly" onmouseover="document.getElementById('audiocloud').play()" onmouseout="document.getElementById('audiocloud').pause()">
            <area style="cursor: pointer" target="_blank" alt="cloud1" title="غيمة" coords="274,21,266,21,250,15,240,22,233,27,221,32,224,38,235,38,238,43,248,47,260,44,269,48,280,46,297,49,305,45,315,47,322,43,327,35,312,31,299,30,291,20" shape="poly" onmouseover="document.getElementById('audiocloud').play()" onmouseout="document.getElementById('audiocloud').pause()">
            <area style="cursor: pointer" target="_blank" alt="donkey" title="حمار وحشي" coords="712,292,659,294,655,233,613,230,611,299,629,302,634,387,662,385,664,341,689,341,682,382,712,389,728,321" shape="poly" onmouseover="document.getElementById('audiodonkey').play()" onmouseout="document.getElementById('audiodonkey').pause()">
        </map>



        <audio id="audiosheep">
            <source src="audionatural/sheepA.mp3" type="audio/mp3">
        </audio>

        <audio id="audioelephant">
            <source src="audionatural/ElephantA.mp3" type="audio/mp3">
        </audio>

        <audio id="audiotiger">
            <source src="audionatural/tigerA.mp3" type="audio/mp3">
        </audio>

        <audio id="audiotree">
            <source src="audionatural/treeA.mp3" type="audio/mp3">
        </audio>

        <audio id="audioroks">
            <source src="audionatural/rocksA.mp3" type="audio/mp3">
        </audio>

        <audio id="audiosun">
            <source src="audionatural/sunA.mp3" type="audio/mp3">
        </audio>

        <audio id="audiocloud">
            <source src="audionatural/cloudA.mp3" type="audio/mp3">
        </audio>

        <audio id="audiodonkey">
            <source src="audionatural/donkeyA.mp3" type="audio/mp3">
        </audio>

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