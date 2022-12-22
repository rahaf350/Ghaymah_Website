<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - هذا البريد مستخدم من قبل";
            }else{$ran_id = rand(time(), 100000000);
                $status = "Active now";
                $encrypt_pass = md5($password);
                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, password, status)
                VALUES ({$ran_id}, '{$fname}', '{$email}', '{$encrypt_pass}', '{$status}')");
                if($insert_query){
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($select_sql2) > 0){
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['unique_id'] = $result['unique_id'];
                        echo "success";
                    }else{
                        echo "عنوان البريد الإلكتروني هذا غير موجود!";
                    }
                }else{
                    echo "حدث خطأ ما. أرجوك حاول مرة أخرى!";
                }
                
            }
        }else{
            echo "$email - ليس بريد إلكتروني صالح!";
        }
    }else{
        echo "جميع الحقول مطلوبة!";
    }
?>