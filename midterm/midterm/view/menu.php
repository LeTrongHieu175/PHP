

<?php
    if(isset($_SESSION['role'])){
        if($_SESSION['role']== 1){
            echo '<li class="nav-item"><a class="nav-link" href="index.php?pages=istop">Thêm loại sản phẩm</a></li>';
            echo '<li class="nav-item"><a class="nav-link" href="index.php?pages=isp">Thêm sản phẩm</a></li>';
            echo ' <li class="nav-item"><a class="nav-link" href="index.php?pages=dx">Đăng Xuất</a></li>';
        }else{

            echo ' <li class="nav-item"><a class="nav-link" href="index.php?pages=dx">Đăng Xuất</a></li>';
        }
    }
    else {
        echo '<li class="nav-item"><a class="nav-link" href="index.php?pages=dn">Đăng Nhập</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="index.php?pages=dk">Đăng Ký</a></li>';
    }
?>