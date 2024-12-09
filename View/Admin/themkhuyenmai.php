<?php
include_once('../../model/quanlykhuyenmai.php');
include('../../Controller/c_discount.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Best Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- Title -->
    <title>Bootstrap Admin Dashboards</title>
    <!-- Animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

</head>

<body>

    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        <?php
        include('sidebar.php');
        ?>
        <!-- Sidebar wrapper end -->

        <div class="main-container">
            <?php
            include('header.php');
            ?>
            <div class="text-end mb-3">
                <a href="../Admin/discount.php" class="btn btn-primary">
                    <i class="bi bi-arrow-left-circle"></i> quay lại
                </a>
            </div>
            <h3 class="text-center mb-4">Thêm Khuyến Mãi</h3>
            <form method="post" class="shadow p-4 rounded bg-light">
                <div class="mb-3">
                    <label for="MaKM" class="form-label">Mã Khuyến Mãi</label>
                    <input type="text" class="form-control" name="MaKM" />
                </div>
                <div class="mb-3">
                    <label for="TenKM" class="form-label">Tên Khuyến Mãi</label>
                    <input type="text" class="form-control" name="TenKM" required />
                </div>
                <div class="mb-3">
                    <label for="PhanTramDiscount" class="form-label">Phần Trăm Discount</label>
                    <input type="number" class="form-control" name="PhanTramDiscount" required step="0.01" required />
                </div>
                <div class="mb-3">
                    <label for="NgayBatDauKM" class="form-label">Ngày Bắt Đầu</label>
                    <input type="Date" class="form-control" name="NgayBatDauKM" required />
                </div>
                <div class="mb-3">
                    <label for="NgayKetThucKM" class="form-label">Ngày Kết Thúc</label>
                    <input type="Date" class="form-control" name="NgayKetThucKM" required />
                </div>
                <div class="mb-3">
                    <label for="soluongnguoithamgia" class="form-label">Trạng Thái</label>
                    <select name="trangthai" id="">
                        <option value="Active">Active</option>
                        <option value="Not-Active">Not-Active</option>
                    </select>
                </div>
                <div class="text-end">
                    <button type="submit" name="btThem" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Thêm Gói Tập
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Page wrapper end -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- Vendor Js Files -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

</body>

</html>