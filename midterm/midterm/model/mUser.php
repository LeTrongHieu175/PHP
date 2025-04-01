<?php

    include_once 'mConnect.php';
    class mUser{
        public function ck_user($acc, $pwd){
            $pwd = md5($pwd);
            $sql = "select * from user where name = '$acc' and password = '$pwd'";
            $p = new mConnect();
            $conn = $p->connectDB();
            if($conn)
                return $conn->query($sql);
            else
                return false;

            $p->disconnectDB($conn);
        }

        public function insert_user($acc, $pwd){
            $pwd = md5($pwd);
            $sql = "insert into user (name, password, id_role) values ('$acc','$pwd', 2)";
            $p = new mConnect();
            $conn = $p->connectDB();
            if($conn)
                return $conn->query($sql);
            else
                return false;

            $p->disconnectDB($conn);
        }
    }
?>