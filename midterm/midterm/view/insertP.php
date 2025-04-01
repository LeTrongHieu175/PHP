<form action="" method="post" enctype="multipart/form-data">
    <p>Nhập tên sản phẩm</p>
    <input type="text" name = 'sp'>
    <p>Nhập giá sản phẩm</p>
    <input type="text" name = 'gia'>
    <p>Thêm hình</p>
    <input type="file" name="f" id="">
    <br>
    
    <select>
        <?php
            include 'controller/cTOP.php';
            $p = new cTOP();
            $result = $p->show_all();
            while($num = $result->fetch_assoc()){
                echo '<option value="'.$num['maloai'].'">'.$num['ten'].'</option>';
            }
        ?>

    </select>
</form>