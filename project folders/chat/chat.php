<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}

$userId = isset($_GET['user_id'])?$_GET['user_id']:1407379879;

$sql = "UPDATE `messages` SET `read_sms`=1 WHERE `outgoing_msg_id`={$userId}";
mysqli_query($conn,$sql);
?>
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="../login-signup-us.css">

<body>
  <!-- NAV BAR -->
  <nav class="navbar">
    <div class="navbar-links">
      <a class="a" href="../Home.php">الرئيسية</a>
      <a class="b" href="../us.php">من نحن؟</a>
      <?php
            if ($_SESSION['unique_id'] == 1407379879) {
              echo '<a class="c" href="#">رسائل المستخدمين</a>';
            }
        ?>
      <a class="d" href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>">تسجيل خروج</a>
    </div>
    <div class="logo">
      <img src="../image/logo22.png">
    </div>
  </nav>

  <!-- start of login container -->
  <div>
    <br>
    <br>
    <header class="header">
      <!-- HEADER CONTENT -->
      <div class="header-content" style="display: flex;justify-content: center;align-items: flex-start;height: 75vh;">


        <div class="wrapper">
          <section class="chat-area" >
            <header  style="display: block;">
              <?php
              $user_id = mysqli_real_escape_string($conn, $userId);
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
              if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
              } else {
                header("location: users.php");
              }
              
              if ($_SESSION['unique_id'] == 1407379879) {
                  echo '<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>';
                }
              ?>
              
              <div class="details" >
                <h2 style="text-align: center;">
                <?php
                if ($_SESSION['unique_id'] == 1407379879) {
                  echo $row['fname'];
                }else{
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row2 = mysqli_fetch_assoc($sql);
                      }
                  echo 'تواصل معنا 
                  <p>مرحباً بك '.$row2['fname'].' في غَيمة</p>';
                }
                ?>
                
              </h2>
              </div>
            </header>
            <div class="chat-box">

            </div >
            <form action="#" class="typing-area" >
              <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
              <input type="text" name="message" class="input-field" placeholder="...اكتب رسالة هنا" autocomplete="off">
              <button><i class="fab fa-telegram-plane"></i></button>
            </form>
          </section>
        </div>
      </div>
    </header>
  </div>
  <br>
  <br>
  <script src="javascript/chat.js"></script>
</body>

</html>