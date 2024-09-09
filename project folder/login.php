<?php
session_start();
if (isset($_SESSION['unique_id'])) {
   header("location: Home.php");
}
?>
<!DOCTYPE html>
<html lang="en, ar">

<!-- main setting of project -->

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>غيمة - تسجيل الدخول</title>
   <link rel="stylesheet" href="login-signup-us.css">
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

   <!-- start of login container -->
   <div class="container">
      <div class="box login">
         <h1>لديك حساب مسبق؟ تسجيل الدخول</h1>
         <span>سجل دخول للتواصل</span>
         <div class="error-text"></div>
         <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <input type="email" name="email" placeholder="البريد الإلكتروني">
            <input type="password" name="password" placeholder="كلمة المرور">
            <button id="submit" type="submit">تسجيل الدخول</button>
         </form>
      </div>
      <p>إنشاء حساب جديد؟ <a href="sign-up.php">أنشئ الآن</a></p>
   </div>

   <script src="chat/javascript/login.js"></script>
</body>