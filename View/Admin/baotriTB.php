<?php
    error_reporting(0);
    session_start();
	include_once("../../Controller/DeviceController.php");
	include_once('../../Controller/DeviceQL.php');
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

                <div class="row" style="margin-left: 10px;">
								<div class="text-center mb-3">
                					<h3>Danh sách theo dõi thiết bị</h3>
            					</div>
								<div class="col-12">
								<div class="card">
									
									<?php
										$sql= "SELECT 
											t.TenTB,
                                            n.TenNV,
                                            b.Motabaotri,
                                            b.GiaiPhap,
                                            b.KetQua,
                                            b.Ngaybaotri
                                            FROM 
                                                baotri b
                                            JOIN 
                                                thietbi t ON b.thietBiMaTB = t.MaTB
                                            JOIN 
                                                nhanvien n ON b.nhanVienManv = n.MaNV;
                                            ";
										$p->selectDsBaotriTB($sql);	
									?>

								</div>

							</div>
						</div>
			    </div>
		    </div>
		<!-- Page wrapper end -->
<?php

 ?>




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