<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="F">
    <br>
    <input type="submit" value="upload" name='oke'>
</form>

<?php
    if(isset($_REQUEST['oke'])){
        include "Controller/ctrUser.php";
        $f = $_FILES['F'];
        $p = new ctrUser();
        $p->upFile($f);
    }
?>