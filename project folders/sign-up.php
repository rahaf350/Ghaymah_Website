<?php
session_start();
if (isset($_SESSION['unique_id'])) {
   header("location: Home.php");
}
?>

<!DOCTYPE html>
<html lang="en, ar">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>غيمة - تسجيل</title>
   <link rel="stylesheet" href="login-signup-us.css">
   <meta charset="utf-8">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">
</head>

<!-- START WEBSITE BODY -->
<body>

   <!-- NAV BAR -->
   <?php
   include_once 'nav.php';

   ?>

   <!-- start of login container -->
   <div class="container ">
      <div class="box form signup">
         <h1>أهلاً بك في غيمة، إنضم إلينا</h1>
         <div class="error-text"></div>
         <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <input type="name" name="fname" placeholder="اسم المستخدم">
            <input type="email" name="email" placeholder="البريد الإلكتروني">
            <input type="password" name="password" placeholder="كلمة المرور">
            <button id="submit" name="submit">تسجيل</button>
         </form>
      </div>
   </div>

   <script src="chat/javascript/signup.js"></script>
</body>