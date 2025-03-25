<?php
    class connect{
        public function connect_db(){
            $host = 'localhost';
            $user_name = 'hieu';
            $password = '1';
            $db = 'qlbh';
            return mysqli_connect($host, $user_name, $password, $db);
        }

        public function disconnect_db($conn){
            $conn->close();
        }
    }
?>