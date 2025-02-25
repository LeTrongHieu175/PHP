<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host="localhost";
        $user="admin";
        $pass="123456";
        $db="quanlitintuc";
        $conn=mysqli_connect($host,$user,$pass,$db,3307);
        if($conn){
            SelectTinTuc($conn);
            echo "<hr>";
            //InsertTinTuc($conn);
            //DeleteTinTuc($conn);
            //UpdateTinTuc($conn);
            echo "<hr>";
            SelectTinTuc($conn);
        }else{
            echo "Kết nối thất bại";
        }
        $conn->close();
        function SelectTinTuc($conn){
                $selection="SELECT * FROM tintuc";
                $result=$conn->query($selection);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "<td>".$row["tieude"]."<br></td>";
                    }
                }else{
                    echo "Không có tin tức";
                }
        }
        function InsertTinTuc($conn){
            $insertion="INSERT INTO tintuc(tieude) VALUES('tin tức 5')";
            $kq=$conn->query($insertion);
            if($kq){
                echo "Thêm tin tức thành công";
            }else{
                echo "Thêm tin tức thất bại";
            }
        }
        function DeleteTinTuc($conn){
            $deletion="DELETE FROM tintuc WHERE tieude='tin tức 3'";
            $kq=$conn->query($deletion);
            if($kq){
                echo "Xóa tin tức thành công";
            }else{
                echo "Xóa tin tức thất bại";
            }
        }
        function UpdateTinTuc($conn){
            $update="UPDATE tintuc SET tieude='tin tức 4' WHERE tieude='tin tức 5'";
            $kq=$conn->query($update);
            if($kq){
                echo "Cập nhật tin tức thành công";
            }else{
                echo "Cập nhật tin tức thất bại";
            }
        }
    ?>

</body>
</html>