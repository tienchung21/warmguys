<?php session_start();
$idSua = 1;
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
            include_once('header.php');
            ?>
            <?php
include('../../Model/quanlihoadon.php');
include('../../Controller/c_quanlihoadon.php');
$obj=new hoadondd();

?>
            <div class="text-end mb-3">
                <a href="goitap.php" class="btn btn-primary">
                    <i class="bi bi-arrow-left-circle"></i> Quay lại
                </a>
            </div>
            <h3 class="text-center mb-4">Tạo hóa đơn</h3>
            <form method="post" class="shadow p-4 rounded bg-light">
                <div class="mb-3">
                    <label for="Manv" class="form-label">Mã Nhân Viên</label>
                    <input type="number" class="form-control" name="Manv" required />
                </div>
                <div class="mb-3">
                    <label for="MaGoi" class="form-label">Tên Thành Viên</label>
                    <input type="text" class="form-control" name="tenTV" required />
                </div>
                <div class="mb-3">
                    <label for="TenGoi" class="form-label">Số điện thoại</label>
                    <input type="Number" class="form-control" name="phoneNumber" required />
                </div>
                <div class="mb-3">
                    <label for="Mã Thành Viên" class="form-label">Mã Thành Viên(Nhập số điện thoại)</label>
                    <input type="Number" class="form-control" name="maTV" required />
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="Email" required />
                </div>
                <div class="mb-3">
                    <label for="Địa chỉ" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="diachi" required />
                </div>
                <div class="mb-3">
                    <label for="GioiTinh" class="form-label">Giới tính</label>
                    <select name="GioiTinh" class="form-control" required>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select><br><br>
                </div>
                <div class="mb-3">
                    <label for="GoiTap" class="form-label">Gói tập</label>
                    <select name="goiTap" class="form-control" required>
                        <option value="">-Chọn gói tập-</option>
                        <?php echo $obj->selectgoitap(); ?>
                    </select><br><br>
                </div>
                <div class="mb-3">
                    <label for="maKM" class="form-label">Mã Khuyến Mãi</label>
                    <select name="maKM" class="form-control" required>
                        <option value="">-Chọn Khuyến Mãi -</option>
                        <?php echo $obj->selectKM(); ?>
                    </select><br><br>
                </div>
                <div class="mb-3">
                    <label for="thanhTien" class="form-label">Thành Tiền</label>
                    <input type="number" class="form-control" name="thanhTien" required step="0.01" readonly />
                </div>
                <div class="mb-3">
                    <label for="ttThanhToan" class="form-label">Trạng thái thanh toán</label><br>
                    <div>
                        <input type="radio" id="chuaThanhToan" name="ttThanhToan" value="Chưa Thanh Toán" required>
                        <label for="chuaThanhToan">Chưa Thanh Toán</label>
                    </div>
                    <div>
                        <input type="radio" id="daThanhToan" name="ttThanhToan" value="Đã Thanh Toán" required>
                        <label for="daThanhToan">Đã Thanh Toán</label>
                    </div>
                    <br><br>
                </div>
                <div class="text-end">
                    <button type="submit" name="btTao" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Tạo hóa đơn
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
    <script>
    // Hàm tính thành tiền khi mã khuyến mãi được nhập
    // Hàm tính thành tiền khi gói tập hoặc mã khuyến mãi thay đổi
    function tinhThanhTien() {
        // Lấy giá của gói tập từ thuộc tính data-price
        var goiTapElement = document.getElementsByName("goiTap")[0];
        var giaGoi = parseFloat(goiTapElement.options[goiTapElement.selectedIndex].getAttribute("data-price"));

        // Lấy phần trăm giảm giá từ mã khuyến mãi
        var khuyenMaiElement = document.getElementsByName("maKM")[0];
        var discount = parseFloat(khuyenMaiElement.options[khuyenMaiElement.selectedIndex].getAttribute("data-price"));

        // Kiểm tra giá trị hợp lệ
        if (isNaN(giaGoi)) {
            giaGoi = 0; // Nếu không chọn gói tập, mặc định giá là 0
        }
        if (isNaN(discount)) {
            discount = 0; // Nếu không chọn khuyến mãi, mặc định giảm giá là 0%
        }

        // Tính thành tiền
        var thanhTien = giaGoi * (1 - discount);

        // Cập nhật thành tiền vào ô input
        document.getElementsByName("thanhTien")[0].value = thanhTien.toFixed(2);
    }

    // Lắng nghe sự kiện thay đổi của gói tập và mã khuyến mãi
    document.getElementsByName("goiTap")[0].addEventListener("change", tinhThanhTien);
    document.getElementsByName("maKM")[0].addEventListener("change", tinhThanhTien);
    </script>

</body>

</html>