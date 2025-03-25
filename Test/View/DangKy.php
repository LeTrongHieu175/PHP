<form action="" method="post" name="Dky">
    <label for="">Email</label>
    <input type="text" name="email" id="">
    <br>

    <label for="">Password</label>
    <input type="password" name="pwd" id="">
    <br>
    <input type="submit" value="Đăng Ký" name="oke">
</form>

<?php
    if(isset($_REQUEST['oke'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        include "Controller/ctrUser.php";
        $p = new ctrUser();
        $p->dangKi($email, $pwd);
        header("refresh: 0.5; url = index.php");
    }
?>