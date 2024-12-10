<?php
error_reporting(0);

session_start();
if (!$_SESSION["dangnhap"])
 	header("Location:login.php");

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
                <a href="../Admin/themkhuyenmai.php" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Thêm mới
                </a>
            </div>
            <?php
            include('../../model/quanlykhuyenmai.php');
            include('../../Controller/c_discount.php');
           
            
            $obj = new khuyenmai();
            $km = $obj->danhsachkhuyenmai();
            if ($km) {
                
                echo '<div class="row" style="margin-left: 10px;">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã KM</th>
                                                    <th>Tên KM</th>
                                                    <th>Phần trăm discount</th>
                                                    <th>Ngày bắt đầu KM</th>
                                                    <th>Ngày kết thúc khuyến mãi</th>
                                                    <th>Trạng thái</th>
                                                    <th>Tùy Chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                for ($i = 0; $i < count($km); $i++) {
                    echo '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $km[$i]["MaKM"] . '</td>
                            <td>' . $km[$i]["TenKM"] . '</td>
                            <td>' . $km[$i]["PhanTramDiscount"] . '</td>
                            <td>' . $km[$i]["NgayBatDauKM"] . '</td>
                           <td>' . $km[$i]["NgayKetThucKM"] . '</td>
                           <td>' . $km[$i]["TrangThai"] . '</td>
                            <td>
                            
                            <a href="suakhuyenmai.php?MaKM=' . $km[$i]["MaKM"] . '" class="btn btn-outline-success">Sửa</a>
                                <form method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm(\'Bạn có chắc muốn xóa không?\')" name="btXoa" value="' . $km[$i]["MaKM"] . '">Xóa</button>
                                </form>
                                
                            </td>
                        </tr>';
                }
                echo '</tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>';
            } else {
                // Nếu không có dữ liệu, vẫn hiển thị table trống
                echo '<div class="row" style="margin-left: 10px;">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã gói</th>
                                                    <th>Tên gói</th>
                                                    <th>Mô tả</th>
                                                    <th>Số lượng người tham gia</th>
                                                    <th>Giá</th>
                                                    <th>Thời Hạn gói</th>
                                                    <th>Tùy Chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7" class="text-center">Không có dữ liệu</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </div>
    <!-- Page wrapper end -->






    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/sales/salesGraph.js"></script>
    <script src="assets/vendor/apex/custom/sales/revenueGraph.js"></script>
    <script src="assets/vendor/apex/custom/sales/taskGraph.js"></script>

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>


</body>

</html>