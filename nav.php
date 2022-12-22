<?php
include_once "chat/php/config.php";
if (isset($_SESSION['unique_id'])) {
    if ($_SESSION['unique_id'] == 1407379879) {
        $userId = 1407379879;
    } else {
        $userId = $_SESSION['unique_id'];
    }
}
?>

<!-- NAV BAR -->
<nav class="navbar">
    <div class="navbar-links">
        <?php if (isset($_SESSION['unique_id'])) {
            echo '<a href="Home.php" class="a">الرئيسية</a>';
        } else {
            echo '<a href="index.php" class="a">الرئيسية</a>';
        } ?>
        <a href="us.php" class="b">من نحن؟</a>


        <?php

        if (isset($_SESSION['unique_id'])) {
            if ($_SESSION['unique_id'] == 1407379879) {
                echo '<a href="chat/users.php" class="c">رسائل المستخدمين</a>';
                if (isset($_SESSION['unique_id'])) {
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row2 = mysqli_fetch_assoc($sql);
                        echo '<a> اهلاً' . $row2['fname'] . '</a>';
                    }
                }
            } else {
                echo '<a href="chat/chat.php" class="c">تواصل معنا</a>';
                if (isset($_SESSION['unique_id'])) {
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row2 = mysqli_fetch_assoc($sql);
                        echo '<a> اهلا ' . $row2['fname'] . '</a>';
                    }
                }
            }
            echo '<a href="chat/php/logout.php?logout_id=' . $userId . '" class="d">تسجيل خروج</a>';
        } else {
            echo '<a href="login.php" class="c">تواصل معنا</a>
                        <a href="login.php" class="d">تسجيل الدخول</a>';
        }

        ?>
    </div>
    <div class="logo">
        <img src="image/logo22.png">
    </div>
</nav>