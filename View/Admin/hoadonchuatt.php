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
            <?php
			
            include('../../model/quanlychuatt.php');
			include('../../Controller/cquanlytt.php');
			$obj = new hoadon();
            $hoadon = $obj->danhsachhoadon();
			$tong=0;
			if ($hoadon) {
            echo '    <div class="row" style="margin-left: 10px;">
							<div class="col-12">
							<h4>Thống kê doanh thu</h4>
								<div class="card">
								<form method="Post">
<div class="card col-8">
    <div class="card col-8 date" style="display: inline-block; margin-left:20px;">Từ ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đến ngày</div>
	<div class="card col-8 date" style="display: inline-block; margin-left:20px;">
	<input type="date" name="tungay" id="tungay" required style="display: flex; width: 150px; float:left;"> 
	<input type="date" name="denngay" id="denngay" required style="display: flex; width: 150px;margin-left:10px ;float:left;">
	<input type="submit" name="subngay" value="Thống kê" style="margin-left:10px ; width: 100px; background-color:#99999 ; border-color: green; border-radius: 2px;">
	</div>
</div>	
</form>
											</form method="post">
											
										</div>
										
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>Mã Hóa Đơn</th>
														<th>Ngày lập</th>
														<th>Trạng thái thanh toán</th>
														<th>Tên thành viên</th>
														<th>Tên gói</th>
														<th>Giá gói</th>
														<th>Thời hạn gói</th>
                                                        <th>Mã Khuyến mãi</th>
                                                        <th>Thành tiền</th>
													</tr>
												</thead>
												<tbody>';
			for ($i = 0; $i < count($hoadon); $i++) {
				$tong+=$hoadon[$i]["ThanhTien"];
							echo                       '<tr>
														<td>'.$hoadon[$i]["MaHD"].'</td>
														<td>'.date('d/m/Y', strtotime($hoadon[$i]["NgayLap"])).'</td>
														<td>'.$hoadon[$i]["TrangThaiTT"].'</td>
														<td>'.$hoadon[$i]["TenTV"].'</td>
														<td>'.$hoadon[$i]["TenGoi"].'</td>
														<td>'.number_format($hoadon[$i]["GiaGoi"]).' VND</td>
														<td>'.$hoadon[$i]["ThoiHanGoi"].' Tháng </td>
                                                        <td>'.$hoadon[$i]["MaKM"].'</td>
                                                        <td>'.number_format($hoadon[$i]["ThanhTien"]).' VND</td>
                                                        <td><form method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-outline-danger" name="btTT" value="' . $hoadon[$i]["MaHD"] . '">Cập nhật</button>
                                </form></td>
													</tr>

                                                    ';}
                echo '
				</tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>'; }
			else {
				echo '    <div class="row" style="margin-left: 10px;">
				<div class="col-12">
				<h4>Thống kê doanh thu</h4>
					<div class="card">
					<form method="Post">
<div class="card col-8">
<div class="card col-8 date" style="display: inline-block; margin-left:20px;">Từ ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đến ngày</div>
<div class="card col-8 date" style="display: inline-block; margin-left:20px;">
<input type="date" name="tungay" id="tungay" required style="display: flex; width: 150px; float:left;"> 
<input type="date" name="denngay" id="denngay" required style="display: flex; width: 150px;margin-left:10px ;float:left;">
<input type="submit" name="subngay" value="Thống kê" style="margin-left:10px ; width: 100px; background-color:#99999 ; border-color: green; border-radius: 2px;">
</div>
</div>	
</form>
								</form method="post">
								
							</div>
							
						<div class="card-body">
							<div class="table-responsive">
								<table class="table m-0">
									<thead>
										<tr>
											<th>Mã Hóa Đơn</th>
											<th>Ngày lập</th>
											<th>Mã thành viên</th>
											<th>Tên thành viên</th>
											<th>Tên gói</th>
											<th>Giá gói</th>
											<th>Thời hạn gói</th>
											<th>Loại Khuyến mãi</th>
											<th>Thành tiền</th>
										</tr>
									</thead>
									<tbody>';
	echo '
			<tr>
											<td>Không có hóa đơn được lập trong ngày thống kê</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
	</tbody>
			</table>
		</div>
	</div>
</div>
</div>'; 	}
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