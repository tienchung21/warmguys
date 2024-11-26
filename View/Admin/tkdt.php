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

                <div class="row" style="margin-left: 10px;">
							<div class="col-12">
								<div class="card">
								<div class="formloc">
											<form action=""><br>
												<div class="form-group">
													Từ Ngày <input type="text" name="ngay" id="ngay" required pattern="^\d{10,2}$" title="Nhập sai ngày, xin mời nhập lại." style="width: 40px; margin-left: 20px;"> 
													Tháng <input type="text" name="thang" id="thang" style="width: 40px;"> 
													Năm <input type="text" name="nam" id="nam" style="width: 40px;"> <br> <br>
													Đến Ngày <input type="text" name="ngayd" id="ngayd" style="width: 40px; margin-left: 10px;"> 
													Tháng <input type="text" name="thangd" id="thangd" style="width: 40px;"> 
													Năm <input type="text" name="namd" id="namd" style="width: 40px;">
												</div>
												<div class="form-buttons"><br>
													<input type="button" class="btn-loc"  value="Lọc" Style="margin-left:110px">
												</div>
											</form>
										</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>STT</th>
														<th>Ngày lập</th>
														<th>Tên gói</th>
														<th>Giá gói</th>
														<th>Thời hạn gói</th>
                                                        <th>Ngày bắt đầu</th>
                                                        <th>Ngày kết thúc</th>
                                                        <th>Mã Khuyến mãi</th>
                                                        <th>Thành tiền</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>25/11/2024</td>
														<td>Classic</td>
														<td>22000000</td>
														<td>6 tháng</td>
														<td>01/11/2024</td>
                                                        <td>01/05/2025</td>
                                                        <td>1</td>
                                                        <td>16500000 đ</td>
													</tr>
													<tr>
														<td>2</td>
														<td>25/11/2024</td>
														<td>Classic</td>
														<td>21000000</td>
														<td>6 tháng</td>
														<td>01/11/2024</td>
                                                        <td>01/05/2025</td>
                                                        <td>1</td>
                                                        <td>16500000 đ</td>
													</tr>
                                                    <tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Tổng : 16500000 đ</td>
													</tr>
												</tbody>
											</table>
										
										</div>
									</div>
								</div>

							</div>
						</div>
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