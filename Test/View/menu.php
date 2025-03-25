<?php
        echo'<a href=""> Trang Chủ</a>';
       
    if  ($_SESSION['login'] == true){
        echo'<br>';
        echo'<a href="index.php?pages=upLoad">Upload</a>';
        echo '<br>';
        echo'<a href="index.php?pages=dangXuat">Dang Xuat</a>';
         echo '<br>';
        
    }
    // else if (isset($_SESSION['email'])){
    //     echo'<a href="index.php?pages=dangNhap">Đăng Nhập</a>';

       
    //     echo '<br>';
    // }
    else {
        echo '<br>';
        echo'<a href="index.php?pages=dangNhap">Đăng Nhập</a>';
        echo '<br>';
        echo'<a href="index.php?pages=dangKi">Đăng Kí</a>';
    }

?>