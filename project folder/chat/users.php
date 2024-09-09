<?php
session_start();
include_once "php/config.php";
if(isset($_SESSION['unique_id'])){
  if($_SESSION['unique_id'] == 1407379879){
      $userId = 1407379879;
  }else{
      $userId = $_SESSION['unique_id'];
  }
  
}
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}

if ($_SESSION['unique_id'] != 1407379879) {
  header("location: chat.php");
}

                
?>
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="../login-signup-us.css">

<body >
  <!-- NAV BAR -->
  <nav class="navbar">
    <div class="navbar-links">
      <a class="a" href="../Home.php">الرئيسية</a>
      <a class="b" href="../us.php">من نحن؟</a>
      <a class="c" href="#">رسائل المستخدمين</a>
     <a class="d" href="<?php echo 'php/logout.php?logout_id='.$userId.'' ?>">تسجيل خروج</a>
       </div>
    <div class="logo">
    <img src="../image/logo22.png">
    </div>
  </nav>

  <!-- start of login container -->
  <div dir="rtl">
    <header class="header">
      <!-- HEADER CONTENT -->
      <div class="header-content" style="display: flex;justify-content: center;align-items: center;height: 100vh;">



        <div class="wrapper" >
          <section class="users">
            <div class="search">
              <button><i class="fas fa-search"></i></button>
              <span class="text">حدد مستخدمًا لبدء الدردشة</span>
              <input type="text" placeholder="أدخل الاسم للبحث...">
            </div>
            <div class="users-list">

            </div>
          </section>
        </div>
      </div>
    </header>
  </div>

  <script src="javascript/users.js"></script>
  <script src="javascript/chat.js"></script>
</body>

</html>