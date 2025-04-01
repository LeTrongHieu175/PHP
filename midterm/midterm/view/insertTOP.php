<form action="" method="post">
    <p>Nhập loại sản phẩm muốn thêm</p>
    <input type="text" name="top">
    <br>
    <input type="submit" value="Thêm" name="oke">

</form>

<?php
    if(isset($_REQUEST['oke'])){
        include 'controller/cTOP.php';
        $p = new cTOP();
        $r = $p->add_top($_POST['top']);
        if($r)
            echo 'thêm loại sản phẩm thành công';
        else 
            echo 'thêm thất bại';
    }
?>