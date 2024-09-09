<?php
    session_start();
    include_once "config.php";
    
    if(isset($_SESSION['unique_id'])){
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE users SET status = 'Offline now' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../../index.php");
            }
        }else{
            header("location: ../chat.php");
        }
    }else{  
        // header("location: ../../index.php");
    }
?>