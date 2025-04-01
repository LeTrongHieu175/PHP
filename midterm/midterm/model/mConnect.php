<?php
mysqli_report(MYSQLI_REPORT_OFF); 
class mConnect{
    public function connectDB(){
        $host= 'localhost';
        $username = 'kiet';
        $pass = '1';
        $db = 'qlbh'; // Loại bỏ khoảng trắng thừa
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