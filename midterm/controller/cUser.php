<?php
    include 'model/mUser.php';
    class cUser{
        public function login($acc, $pwd){
            $p = new mUser();
            $result = $p->ck_user($acc, $pwd);
            if($result->num_rows >0){
                echo 'dang nhap thanh cong';
                while($num = $result->fetch_assoc()){
                    $_SESSION['role'] = $num['id_role'];
                }
            }
               
            else if ($result === false)
                echo 'lỗi kết nối';
            else 
                echo'that bai';
        }

        public function regis($acc, $pwd){
            $p = new mUser();
            $result = $p->insert_user($acc, $pwd);
            if($result)
                echo 'dang ki thanh cong';
            // else if ($result == -1)
            //     echo 'lỗi kết nối';
            else 
                echo'Tên tài khoản đã tồn tại';
        }

    }   
?>