<?php
include_once('../../Model/Modeldevice.php');
include_once('../../Controller/DeviceController.php');
include('../../Controller/DeviceQL.php');
$p = new device();
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
    <?php
        $layid = $_GET['id'];
        $layten = $p->xuatdulieu("SELECT TenTB FROM thietbi WHERE MaTB='$layid'");
        $layloaitb = $p->xuatdulieu("SELECT LoaiTB FROM thietbi WHERE MaTB='$layid' LIMIT 1");
        $laytingtrang = $p->xuatdulieu("SELECT TinhtrangTB FROM thietbi WHERE MaTB='$layid' LIMIT 1");
        $layhinhanh = $p->xuatdulieu("SELECT Hinhanh FROM thietbi WHERE MaTB='$layid' LIMIT 1");

        // Kiểm tra dữ liệu và gán giá trị
        $tenTB = !empty($layten) ? $layten[0]['TenTB'] : '';
        $loaiTB = !empty($layloaitb) ? $layloaitb[0]['LoaiTB'] : '';
        $tingtrang = !empty($laytingtrang) ? $laytingtrang[0]['TinhtrangTB'] : '';
        $hinhanh = !empty($layhinhanh) ? $layhinhanh[0]['Hinhanh'] : '';
    ?>
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
            <h3 class="text-center mb-4">Cập nhật thiết bị</h3>
            <form method="post" class="shadow p-4 rounded bg-light " enctype="multipart/form-data" style="margin-left: 20px;">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="tenTB" class="form-label">Tên thiết bị</label>
                            <input type="text" class="form-control" name="tenTB" value="<?php echo $tenTB; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-flex">Loại thiết bị</label>
                            <select name="loaiTB" class="select-single js-states form-control">
                                <option value="1" <?php if ($loaiTB == 1) echo 'selected'; ?>>Tập tay</option>
                                <option value="2" <?php if ($loaiTB == 2) echo 'selected'; ?>>Tập chân</option>
                                <option value="3" <?php if ($loaiTB == 3) echo 'selected'; ?>>Tập cơ bụng</option>
                                <option value="4" <?php if ($loaiTB == 4) echo 'selected'; ?>>Tập ngực</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label d-flex">Tình trạng thiết bị</label>
                            <select name="tinhtrang" class="select-single js-states form-control">
                                <option value="1" <?php if ($tingtrang == 1) echo 'selected'; ?>>Bảo trì</option>
                                <option value="2" <?php if ($tingtrang == 2) echo 'selected'; ?>>Chưa bảo trì</option>
                            </select>
                        </div>
    
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Hình ảnh thay thế</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="myfile">
                        </div>
                        
                    </div>
                    <div class="col-4">
                        <?php if ($hinhanh): ?>
                            <img class="pt-4" src="./assets/img/device/<?php echo $hinhanh; ?>" alt="Hình ảnh thiết bị" width="400" height="310"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-end">
                            <button type="submit" name="nutSua" class="btn btn-primary">
                                <i class="bi bi-arrow-repeat"></i>Cập nhật
                            </button>
                        </div>
                    </div>
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


