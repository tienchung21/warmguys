<?php
include_once('../../model/quanlygoitap.php');
include('../../Controller/cgoitap.php');
if (isset($_GET['magoi'])) {
    $magoi = $_GET['magoi'];
    $obj = new goitap();
    $goitap = $obj->danhsachgoitap($magoi); // Giả sử bạn có phương thức này để lấy gói
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Chỉnh sửa gói tập</title>
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
                <a href="goitap.php" class="btn btn-primary">
                    <i class="bi bi-arrow-left-circle"></i> Quay lại
                </a>
            </div>
            <h3 class="text-center mb-4">Sửa Gói Tập</h3>
            <form method="post" class="shadow p-4 rounded bg-light">
                <div class="mb-3">
                    <label for="MaGoi" class="form-label">Mã Gói</label>
                    <input type="text" class="form-control" name="MaGoi" value="<?=$goitap[0]['MaGoi']?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="TenGoi" class="form-label">Tên Gói</label>
                    <input type="text" class="form-control" name="TenGoi" value="<?=$goitap[0]['TenGoi']?>" required />
                </div>
                <div class="mb-3">
                    <label for="GiaGoi" class="form-label">Giá Gói</label>
                    <input type="number" class="form-control" name="Gia" value="<?=$goitap[0]['GiaGoi']?>" required />
                </div>
                <div class="mb-3">
                    <label for="ThoiHanGoi" class="form-label">Thời Hạn Gói (Tháng)</label>
                    <input type="number" class="form-control" name="ThoiHan" value="<?=$goitap[0]['ThoiHanGoi']?>"
                        required />
                </div>
                <div class="mb-3">
                    <label for="mota" class="form-label">Mô Tả</label>
                    <textarea class="form-control" name="Mota" rows="3" required><?=$goitap[0]['mota']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="SoLuong" class="form-label">Số Lượng Người</label>
                    <input type="number" class="form-control" name="SoLuong"
                        value="<?=$goitap[0]['soluongnguoithamgia']?>" required />
                </div>
                <div class="text-end">
                    <button type="submit" name="btSua" class="btn btn-primary">
                        <i class="bi bi-pencil"></i> Cập Nhật Gói Tập
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>