<?php
session_start();

?>
<!DOCTYPE html>

<!-- main setting of project -->
<html lang="en, ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>غيمة</title>
    <link rel="stylesheet" href="religion.css">
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

    <section>
        <!--الصلاة والوضوء -->
        <div class="sec1">
            <br>
            <div class="text">وضـوئي وصلاتي</div>
            <div>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/y3Hd5srW_ak" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/edL3W38ODd4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!--الاذكار-->
            <div class="text"> اذكاري</div>
            <div class="sections">
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/RAdxPtu1TdY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/lAwXaTBDFaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!--القران الكريم -->
        <div class="sec2">
            <br>
            <div class="text">القرآن الكريم</div>
            <div>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/5BuO_HAIUhU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/sHMXzj0pbfU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/gnF4h6Wb2aA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/zSXLU9RXBB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/-h8IDzXSKb8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/qmZfis5NHUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/NpuLmZhJxf4?t=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="330" height="180" style="margin:10px; outline:3px solid #020D4C; border-radius:5px" src="https://www.youtube.com/embed/s2YcZ-rgTPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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