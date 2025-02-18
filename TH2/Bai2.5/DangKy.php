<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Đơn Giản với Bootstrap</title>
    <!-- Liên kết đến CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Thêm một số style tùy chỉnh */
        body {
            padding-top: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="bg-success text-white text-center py-3">
        <h1>BANNER WEBSITE</h1>
    </header>

    <!-- Main content area -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (Aside) -->
            <aside class="col-md-2 bg-light p-3 text-justify">
                <h2>Menu</h2>
                <ul class="list-unstyled">
                    <li><a href="view/Menu.php?page=index">Trang chủ</a></li>
                    <li><a href="view/Menu.php?page=dky">Đăng Ký</a></li>
                    <li><a href="view/Menu.php?page=dky">Đăng Nhập</a></li>
                </ul>
            </aside>

            <!-- Content -->
            <div class="col-md-10 p-3">
    
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <p>Footer website</p>
    </footer>

    <!-- Liên kết đến JS của Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
