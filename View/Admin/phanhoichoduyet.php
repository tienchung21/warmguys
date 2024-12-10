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
			error_reporting(0);
				include('sidebar.php');
			?>
        <!-- Sidebar wrapper end -->

        <div class="main-container">
            <?php
				include('header.php');
			?>
            <?php
			
            include('../../model/quanlyphanhoi.php');
            include('../../Controller/cquanlyphanhoi.php');
			$obj = new phanhoi();
            $phanhoi = $obj->danhsachphanhoi();
			if ($phanhoi) {
            echo '    <div class="row" style="margin-left: 10px;">
							<div class="col-12">
							<h4>Quản lý phản hồi</h4>
										
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>Mã Phản Hồi</th>
														<th>Nội Dung</th>
														<th>Trạng Thái</th>
														<th>Thành Viên Phản Hồi</th>
														<th>Ngày Phản Hồi</th>
													</tr>
												</thead>
												<tbody>';
			for ($i = 0; $i < count($phanhoi); $i++) {
							echo                       '<tr>
														<td>'.$phanhoi[$i]["MaPH"].'</td>
														<td>'.$phanhoi[$i]["NoiDung"].'</td>
														<td>'.$phanhoi[$i]["TrangThaiPH"].'</td>
														<td>'.$phanhoi[$i]["TenTV"].'</td>
														<td>'.date('d/m/Y', strtotime($phanhoi[$i]["Date"])).'</td>
								<td>					
                                <form method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-outline-danger" name="btDuyetPH" value="' . $phanhoi[$i]["MaPH"] . '">Duyệt</button>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm(\'Bạn có chắc muốn xóa phản hồi không?\')" name="btXoaPH" value="' . $phanhoi[$i]["MaPH"] . '">Xóa</button>
                                </form>
								</td>
								
								</tr>
                                '
                    ;}
                    echo'
                
				</tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>'; }
			else {
                echo '    <div class="row" style="margin-left: 10px;">
                                <div class="col-12">
                                    <h4>Quản lý phản hồi</h4>
                                            
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Mã Phản Hồi</th>
                                                            <th>Nội Dung</th>
                                                            <th>Trạng Thái</th>
                                                            <th>Thành Viên Phản Hồi</th>
                                                            <th>Ngày Phản Hồi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
														<tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Nội dung đang được cập nhật</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
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