<?php
mysqli_report(MYSQLI_REPORT_OFF); 
class mConnect{
    public function connectDB(){
        $host= 'sql301.infinityfree.com';
        $username = 'if0_38580501';
        $pass = '0815431949Hieu';
        $db = 'if0_38580501_php_midterm'; // Loại bỏ khoảng trắng thừa
        $conn = mysqli_connect($host, $username, $pass, $db, 3306);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function disconnectDB($conn){
        return $conn->close();
    }
}
?>