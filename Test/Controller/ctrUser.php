<?php
include 'Model/mUser.php';
class ctrUser{

    public function dangKi($email, $pwd){
        $p = new modelUser();
        $hashedPwd = md5($pwd);
        $result = $p->mRegister($email, $hashedPwd);
        if($result){
            echo 'Đăng ký thành công';
        } else {
            echo 'Đăng ký thất bại';
        }
    }

    public function dangNhap($email, $pwd){
        $p = new modelUser();
        $hashedPwd = md5($pwd);
        $user = $p->mLogin($email, $hashedPwd);
        if($user === false) {
            echo "Lỗi truy vấn!";
            return;
        }
        if($user && $user->num_rows > 0){
            echo "Đã đăng nhập thành công";
            // $_SESSION['email'] = $email;
            $_SESSION['login'] = true;
            // echo $_SESSION['login'];
        } else {
            echo "Đăng nhập thất bại";
            $_SESSION['login'] = false;
        }
    }

    public function dangXuat(){
        session_destroy();
        echo "Đã đăng xuất";
    }

    public function upFile($file){
        $name = $this->reName($file);
        $path = 'Img/'.$name;
        if(move_uploaded_file($file['tmp_name'], $path)){
            echo 'Up file thành công';
            echo '<div style="height: 300px; width: 300px; float: left;">
                <p>Tên file cũ: '.$file['name'].'</p>
                <p>Tên file mới: '.$name.'</p>
                <img style="width: 200px;" src="Img/'.$name.'" alt="">
            </div>';
        } else {
            echo 'Up file thất bại';
        }
    }

    private function reName($file){
        $name = pathinfo($file['name'], PATHINFO_FILENAME);
        $ex = pathinfo($file['name'], PATHINFO_EXTENSION);
        return $name .'_'. rand(100,999).'.'.$ex;
    }
}
?>