<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PET FOOD SHOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Trụ sở</h6>
                        <span>123 Nguyễn Thiện Thành, P5, TPTV</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Liên hệ</h6>
                        <span>petshoptv@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Gọi cho chúng tôi</h6>
                        <span>033 7677 141</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
<<<<<<< HEAD
        <a href="index.html" class="navbar-brand ms-lg-5">
=======
        <a href="index.php" class="navbar-brand ms-lg-5">
>>>>>>> tien
            <h1 class="m-0 text-uppercase text-dark">
                <i class="bi bi-shop fs-1 text-primary me-3"></i>PET FOOD SHOP
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Trang Chủ</a>
<<<<<<< HEAD
                <a href="sanpham.php" class="nav-item nav-link">Sản phẩm</a>
=======

                <a href="sanpham.php" class="nav-item nav-link">Sản phẩm</a>&nbsp&nbsp&nbsp&nbsp

                <form id="searchForm" class="d-flex nav-item" action="sanphamtimkiem.php" method="POST">
                    <input id="searchInput" class="form-control form-control-sm me-2 small" type="text"
                        placeholder="Tìm kiếm..." aria-label="Search" name="search">
                    <button class="btn btn-outline-primary btn-sm small" type="button">Tìm kiếm</button>
                </form>

>>>>>>> tien
                <?php
                
                if (isset($_SESSION['khachhang'])) {
                    echo '<a href="ttcanhan.php" class="nav-item nav-link">Thông tin cá nhân</a>';
                    echo '<a href="giohang.php" class="nav-item nav-link">Giỏ hàng</a>';
                    echo '<a href="../thoat.php" class="nav-item nav-link">Thoát</a>';
                } else {
                    echo '<a href="../dangnhap.php" class="nav-item nav-link">Đăng nhập</a>';
                    echo '<a href="../dangky.php" class="nav-item nav-link">Đăng ký</a>';
                }
                ?>

                <a href="phanhoi.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Phản hồi
                    <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->