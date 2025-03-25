<?php
include 'connect.php';

class modelUser {
    public function mLogin($email, $pwd) {
        $s_login = "SELECT * FROM user WHERE email = '$email' AND pwd = '$pwd'";
        $p = new connect();
        $conn = $p->connect_db();
        
        if (!$conn) return false;
    
        $result = $conn->query($s_login);
        
        $p->disconnect_db($conn);
        return $result;
    }

    public function mRegister($email, $pwd) {
        $s_register = "INSERT INTO user (email, pwd ) VALUES ('$email', '$pwd')";
        $p = new connect();
        $conn = $p->connect_db();
        if ($conn) {
            $result = $conn->query($s_register);
            $p->disconnect_db($conn);
            return $result;
        } else {
            return false;
        }
    }
}
?>