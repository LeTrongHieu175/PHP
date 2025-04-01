<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="" method="post">
    <div class="form-group">
        <label for="username">Tên Tài Khoản</label>
        <input type="text" class="form-control" id="username" name="acc" required>
    </div>
    <div class="form-group">
        <label for="password">Mật Khẩu</label>
        <input type="password" class="form-control" id="password" name="pwd" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="oke">Đăng Nhập</button>
    <?php
        if(isset($_REQUEST['oke'])){
            include 'controller/cUser.php';
            $p = new cUser();
            $p->login($_POST['acc'], $_POST['pwd']);
            if(isset($_SESSION['role']) && $_SESSION['role']== 1){
                echo'admin';
            }
            else    
                header('refresh: 1; url=index.php');
        }
    ?>

</form>

</body>
</html>