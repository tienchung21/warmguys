<?php

include_once('../../Model/Modeldevice.php');


include('../../Controller/DeviceQL.php');
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
            <h3 class="text-center mb-4">Thêm thiết bị</h3>
            <form method="post" class="shadow p-4 rounded bg-light" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Tên thiết bi</label>
                    <input type="text" class="form-control" name="tenTB"/>
                </div>
                <div class="mb-3">
					<label class="form-label d-flex">Loại thiết bị</label>
					<select name="loaiTB" class="select-single js-states form-control" title="Select Product Category" data-live-search="true">
						<option value="">--Chọn loại thiết bị--</option>
						<option value="1">Tập tay</option>
						<option value="2">Tập chân</option>
						<option value="3">Tập cơ bụng</option>
						<option value="4">Tập ngực</option>
					</select>
				</div>
                <div class="mb-4">
                <label class="form-label d-flex">Tình trạng thiết bị</label>
					<select name="tinhtrang" class="select-single js-states form-control" title="Select Product Category" data-live-search="true">
						<option value="">--Chọn tình trạng--</option>
						<option value="1">Bảo trì</option>
						<option value="2">Chưa bảo trì</option>
					</select >
                </div>
                <div class="input-group mb-3">
					<label class="input-group-text" for="inputGroupFile01">Hình ảnh</label>
					<input type="file" class="form-control" id="inputGroupFile01" name="myfile">
				</div>
                <div class="text-end">
                    <button type="submit" name="Thêm" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>Thêm
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

