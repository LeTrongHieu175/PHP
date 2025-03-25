<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalePhone PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php session_start(); ?>
    
    <header class="bg-secondary text-white text-center py-4">
        <h1>CỬA HÀNG BUÔN BÁN ĐIỆN THOẠI DI ĐỘNG</h1>
    </header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Trang Chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <?php if(isset($_SESSION['role'])): ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=dx">Đăng Xuất</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=dn">Đăng Nhập</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=dk">Đăng Ký</a></li>
                    <?php endif; ?>
                </ul>
                <form class="d-flex" action="" method="get">
                    <input class="form-control me-2" type="search" name="tim" placeholder="Tìm kiếm">
                    <button class="btn btn-outline-light" type="submit" name="btntim">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <?php
                        if(isset($_SESSION['role'])) {
                            if($_SESSION['role'] == 1) {
                                echo '<a href="index.php?pages=show_all" class="list-group-item list-group-item-action">Tất cả sản phẩm</a>';
                            } else {
                                include 'view/ht_loai.php';
                            }
                        } else {
                            include 'view/ht_loai.php';
                        }
                    ?>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <?php
                            if (isset($_REQUEST['pages']) && !isset($_REQUEST['tim'])) {
                                switch($_REQUEST['pages']) {
                                    case 'dn':
                                        include 'view/dangNhap.php';
                                        break;
                                    case 'dk':
                                        include 'view/dangKi.php';
                                        break;
                                    case 'dx':
                                        include 'view/dangXuat.php';
                                        break;
                                    case 'show_all':
                                        include 'view/ht.php';
                                        break;
                                    default:
                                        echo '<p>Chào mừng bạn đến với trang web!</p>';
                                }
                            } else if (isset($_REQUEST['btntim'])) {
                                include 'view/ht.php';
                            } else {
                                include 'view/ht.php';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
