<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="لا توجد رسائل";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = ""  ;
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";
        
            
        if($row2 == null){
            $output .= '<a style="padding:15px 5px;border-radius:10px" href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="images/user.png" alt="">
                    <div class="details">
                        <span>'. $row['fname']. '</span>
                        <p id="sms">'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '.$offline .' "><i class="fas fa-circle"></i></div>
                </a>';
        }elseif($row2['read_sms'] == 0 && $result !="لا توجد رسائل"){
            $color_read = '#a4d6f0';
            $output .= '<a style="background: '.$color_read.';padding:15px 5px;border-radius:10px" href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="images/user.png" alt="">
                    <div class="details">
                        <span>'. $row['fname']. '</span>
                        <p id="sms">'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '.$offline.' "><i class="fas fa-circle"></i></div>
                </a>';
        }else{
            $color_read = '';
            $output .= '<a style="background: '.$color_read.';padding:15px 5px;border-radius:10px" href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="images/user.png" alt="">
                    <div class="details">
                        <span>'. $row['fname'].'</span>
                        <p id="sms">'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
                </a>';
        }
        
        }
        
    
?>