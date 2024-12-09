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
		.date{
			float: left;
			padding-left:50px
		}
        .form-buttons {
            display: flex;
            justify-content: space-between;
        }
        .btn-submit:hover  {
            background-color: #4CAF50;
            color: white;
            width: 200px;
            height: 60px;
        }
        .btn-submit{
            background-color: #83a4d2;
            color: black;
            width: 200px;
            height: 60px;
        }
    </style>

	</head>

	<body>

		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<?php
				include_once('sidebar.php');
			?>
			<!-- Sidebar wrapper end -->

			<div class="main-container">
			<?php
				include_once('header.php');
			?>
			<?php
			
            include_once('../../Model/quanlygiahan.php');
			include_once('../../Controller/cgiahan.php');
			$obj = new giahan();
            $giahan = $obj->danhsachgiahan();
			if ($giahan) {
            echo '    <div class="row" style="margin-left: 10px;">
							<div class="col-12">
									<h4>Danh sách thành viên cần gia hạn</h4>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
											<form method="post">
												<thead>
													<tr>
														<th>Mã thành viên</th>
														<th>Tên thành viên</th>
														<th>Ngày kết thúc</th>
													</tr>
												</thead>
												<tbody>';
			for ($i = 0; $i < count($giahan); $i++) {
							echo                    '<tr>
														<td>'.$giahan[$i]["MaTV"].'</td>
                                                        <td>'.$giahan[$i]["TenTV"].'</td>
														<td>'.date('d/m/Y', strtotime($giahan[$i]["NgayKetThuc"])).'</td>
													</tr>
													
                                                    
													
                                                    ';}
                echo '
				</tbody>
				
					<tr>
                                                        <td></td>
                                                        <td><button type="submit" name="giahan" class="btn btn-submit" style="width: 190px;">Gửi yêu cầu gia hạn</button></td>
                                                        <td></td>
                                                    </tr>
					</form>
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