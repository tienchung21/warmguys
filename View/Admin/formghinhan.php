
<?php
session_start();
if (!$_SESSION["dangnhap"])
 	header("Location:login.php");
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


		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Animated css -->
		<link rel="stylesheet" href="assets/css/animate.css">

		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

		<!-- Main css -->
		<link rel="stylesheet" href="assets/css/main.min.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

		<!-- Date Range CSS -->
		<link rel="stylesheet" href="assets/vendor/daterange/daterange.css">

	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
            <?php
            include('sidebar.php');
            ?>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
                <?php
                include('header.php');
                ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">
                        <h3 class="text-center mb-4">Form ghi nhận</h3>
						
                        <form method="post" class="shadow p-4 rounded bg-light " enctype="multipart/form-data" style="margin-left: 20px;">
                            <div class="row">
                                <div class="card">
									<div class="card-body">
										<div class="was-validated">
											<label for="validationTextarea" class="form-label">Mô tả</label>
											<textarea class="form-control is-invalid" id="validationTextarea"  required="" name="mota"></textarea>

										</div>
									</div>
								</div>
                            </div>
                            
                            <div class="row">
                                <div class="card">
									<div class="card-body">
										<div class="m-0">
											<div class="form-label">Thời gian ghi nhận</div>
											<div class="input-group">
												<span class="input-group-text">
													<i class="bi bi-calendar4"></i>
												</span>
												<input type="text" class="form-control datepicker-time" name="thoigianghinhan">
											</div>
										</div>
									</div>
								</div>
						</div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-end">
                                    <input type="hidden" value="<?php echo $_GET['id'];?>" class="form-control" name="idtb"/>
									
                                    <input 
											type="hidden" 
											value="<?php echo ($_SESSION['dangnhap']['nhanVienManv'] ?? ''); ?>" 
											class="form-control" 
											name="idnv"
										/>

                                        <button type="submit" name="nutGhinhan" class="btn btn-primary">
                                            <i class="bi bi-arrow-repeat"></i>Ghi nhận
                                        </button>
                                </div>
                            </div>
                        </div>
                        </form>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">
						<span>© Arise admin 2023</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
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

		<!-- Date Range JS -->
		<script src="assets/vendor/daterange/daterange.js"></script>
		<script src="assets/vendor/daterange/custom-daterange.js"></script>

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

	</body>

</html>