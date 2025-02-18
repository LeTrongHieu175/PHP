<?php
    $tk=$_REQUEST['tk'];
    $mk=$_REQUEST['mk'];
    if ($tk == "abc@gmail.com" && $mk == "123456"){
        echo "Đăng nhập thành công!";
    }else{
        echo "Đăng nhập thất bại!";
    }
?>