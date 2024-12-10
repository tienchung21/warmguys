<?php
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
    <style>
    .btn-loc {
        background-color: green;
        width: 100px;
        color: white;
    }

    .date {
        float: left;
        padding-left: 50px
    }
    </style>

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


            include('../../model/quanlytapthu.php');
            $obj = new dkytapthu();
            $dstapthu = $obj->dsdkytapthu();
            if ($dstapthu) {
            echo ' <div class="row" style="margin-left: 10px;">
                <div class="col-12">
                    <h4>Danh sách khách hàng đăng ký tập thử</h4>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Mã KH đăng ký</th>
                                        <th>Họ và tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Số CCCD</th>
                                        <th>Thời gian gọi cho KH</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    for ($i = 0; $i < count($dstapthu); $i++) { echo '<tr>
														<td>' .$dstapthu[$i]["ID"].'</td>
                                        <td>'.$dstapthu[$i]["Hoten"].'</td>
                                        <td>'.$dstapthu[$i]["SDT"].'</td>
                                        <td>'.$dstapthu[$i]["Email"].'</td>
                                        <td>'.$dstapthu[$i]["CanCuoc"].'</td>
                                        <td>'.$dstapthu[$i]["Thoigianlienlac"].'</td>
                                        </tr>
                                        ';}
                                        echo '
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>'; }
            ?>
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