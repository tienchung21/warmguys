<!doctype html>
<html lang="en">
<?php session_start();
$idSua = 1;
?>

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
    <link rel="stylesheet" href="../Admin/assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
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

</head>

<body>

    <!-- Loading wrapper start -->
    <!-- <div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div> -->
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
            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- <style>
					/*	.content-wrapper {
							position: relative;

						}*/

						table {
							width: 60vw;
							background-color: aliceblue;

						}

						.table-modal {
							position: relative;
						}

						.modal-them {
							width: 100vw;
							height: 100vh;
							height: auto;
							position: fixed;
							top: 0;
							left: 0;
							right: 0;
							bottom: 0;
							background-color: rgba(0, 0, 0, 0.6);
							z-index: 1000;
							display: flex;
							justify-content: center;
							align-items: center;
							display: none;

						}

						.card-body>table,
						th,
						td {
							border: 1px solid black;
							border-width: 1px;

						}

						td>button {
							margin-left: 2px;
							background-color: greenyellow;
							border-radius: 10%;

						}

						.modal-them>table>tbody {
							border: none;
						}

						.modal-them>table>tbody>tr {
							border: none;
						}

						.modal-them>table>tbody>tr>td {
							border: none;
						}

						.bi {

							position: absolute;
							right: 0;
							top: 0;

						}
					</style> -->
                    <?php

include_once('../../Model/xuatdulieu.php');
					$obj = new database();

					$thanhvien = $obj->danhsachthanhvien();

					// xử lý
					// thêm
					if (isset($_POST["btThem"])) {
						$TenTV1 = $_POST["TenTV1"];
						$SoDTTV1 = $_POST["SoDTTV1"];
						$EmailTV1 = $_POST["EmailTV1"];
						$DiaChiTV1 = $_POST["DiaChiTV1"];
						$GioiTinh1 = $_POST["GioiTinh1"];
						$sql = "insert into thanhvien(TenTV,SoDTTV,EmailTV,DiaChiTV,GioiTinh) values ('$TenTV1','$SoDTTV1','$EmailTV1','$DiaChiTV1','$GioiTinh1')";
						if ($obj->themsanpham($sql))
							echo "<script>alert('Thêm thành công');window.location.href = 'quanlithanhvien.php';</script>";
						else
							echo "Thêm thất bại";
					}
					// xóa
					if (isset($_POST["btXoa"])) {
						$MaTV = $_POST["btXoa"];
						if ($obj->xoathanhvien($MaTV))
							echo "<script>alert('Xóa thành công');window.location.href = 'quanlithanhvien.php';</script>";
						else
							echo "xoa that bai";
					}
					if (isset($_POST["btSua"])) {

						$MaTV = $_POST["MaTV"];
						$TenTV = $_POST["TenTV"];
						$SoDTTV = $_POST["SoDTTV"];
						$EmailTV = $_POST["EmailTV"];
						$DiaChiTV = $_POST["DiaChiTV"];
						$GioiTinh = $_POST["GioiTinh"];
						$sql = "update thanhvien set TenTV='$TenTV',SoDTTV='$SoDTTV',EmailTV='$EmailTV',DiaChiTV='$DiaChiTV',GioiTinh='$GioiTinh' where MaTV=$MaTV";
						if ($obj->suathanhvien($sql)) {
							echo "<script>alert('Sửa thành công');window.location.href = 'quanlithanhvien.php';</script>";
						} else
							echo "Sua that bai";
					}






					?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post">
                                <table class="table m-0">
                                    <thead>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#momodalthem">thêm thành viên</button>
                                        <tr>
                                            <th>Mã Thành Viên</th>
                                            <th>Tên Thành Viên</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Email</th>
                                            <th>Địa Chỉ</th>
                                            <th>Giới Tính </th>
                                            <th>tùy chỉnh</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($thanhvien as $item): ?>
                                        <tr>
                                            <td><?= $item["MaTV"] ?></td>
                                            <td><?= $item["TenTV"] ?></td>
                                            <td><?= $item["SoDTTV"] ?></td>
                                            <td><?= $item["EmailTV"] ?></td>
                                            <td><?= $item["DiaChiTV"] ?></td>
                                            <td><?= $item["GioiTinh"] ?></td>
                                            <td>
                                                <button
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')"
                                                    type="submit" name="btXoa" value="<?= $item["MaTV"] ?>"
                                                    class="btn btn-outline-danger">Xóa</button>
                                                <!-- sửa -->
                                                <button type="button" class="btn btn-outline-success"
                                                    data-toggle="modal" data-target="#editCategoryModal" onclick="document.getElementById('editMaTV').value='<?= $item['MaTV'] ?>'; 
                                                              document.getElementById('editTenTV').value='<?= $item['TenTV'] ?>'; 
                                                              document.getElementById('editSoDTTV').value='<?= $item['SoDTTV'] ?>';
															  document.getElementById('editEmailTV').value='<?= $item['EmailTV'] ?>';
															  document.getElementById('editDiaChiTV').value='<?= $item['DiaChiTV'] ?>';
															  document.getElementById('editGioiTinh').value='<?= $item['GioiTinh'] ?>';">
                                                    Sửa
                                                </button>
                                            </td>

                                            <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>

                    <!-- Modal Sửa Danh Mục -->
                    <div id="editCategoryModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="POST" id="editCategoryForm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-center">SỬA THÀNH VIÊN</h3>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="MaTV" id="editMaTV">
                                        <div class="mb-3">
                                            <label for="editTenTV" class="form-label">Tên Thành viên</label>
                                            <input type="text" class="form-control" name="TenTV" id="editTenTV"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editSoDTTV" class="form-label">SDT</label>
                                            <textarea class="form-control" name="SoDTTV" id="editSoDTTV"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editEmailTV" class="form-label">Email</label>
                                            <textarea class="form-control" name="EmailTV" id="editEmailTV"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editDiaChiTV" class="form-label">Địa chỉ</label>
                                            <textarea class="form-control" name="DiaChiTV" id="editDiaChiTV"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editGioiTinh" class="form-label">Giới tính</label>
                                            <textarea class="form-control" name="GioiTinh" id="editGioiTinh"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                        <button type="submit" name="btSua" class="btn btn-primary">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>














                <!-- modal -->
                <div class="modal fade" role="dialog" id="momodalthem">
                    <div class="modal-dialog">
                        <form method="POST" id="editCategoryForm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-center">THÊM THÀNH VIÊN</h3>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="MaTV" id="editMaTV">
                                    <div class="mb-3">
                                        <label for="editTenTV" class="form-label">Tên Thành viên</label>
                                        <input type="text" class="form-control" name="TenTV1" id="editTenTV" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editSoDTTV" class="form-label">SDT</label>
                                        <textarea class="form-control" name="SoDTTV1" id="editSoDTTV"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editEmailTV" class="form-label">Email</label>
                                        <textarea class="form-control" name="EmailTV1" id="editEmailTV"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editDiaChiTV" class="form-label">Địa chỉ</label>
                                        <textarea class="form-control" name="DiaChiTV1" id="editDiaChiTV"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editGioiTinh" class="form-label">Giới tính</label>
                                        <textarea class="form-control" name="GioiTinh1" id="editGioiTinh"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                    <button type="submit" name="btThem" class="btn btn-primary">Cập Nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <form method="post" enctype="multipart/form-data">
					<div class="modal-them" id="modal-sua">
						<table class="table-modal">
							<?php

							$thanhviensua = $obj->xuat1thanhvien($idSua);
							?>
							<tbody>
								<td class="bi bi-x" onclick="off1()"></td>

								<tr>
									<td>tên thành viên</td>
									<td><input name="TenTV" type="text" value="<?= $idSua ?>"></td>
								</tr>
								<tr>
									<td>số điện thoại</td>
									<td><input name="SoDTTV" type="text" value="<?= $thanhviensua[0]['SoDTTV'] ?>"></td>
								</tr>
								<tr>
									<td>email</td>
									<td><input name="EmailTV" type="text" value="<?= $thanhviensua[0]['EmailTV'] ?>">
									</td>
								</tr>
								<tr>
									<td>địa chỉ</td>
									<td><input name="DiaChiTV" type="text" value="<?= $thanhviensua[0]['DiaChiTV'] ?>">
									</td>
								</tr>
								<tr>
									<td>giới tính</td>
									<td><input name="GioiTinh" type="text" value="<?= $thanhviensua[0]['GioiTinh'] ?>">
									</td>
								</tr>
								<td><button type="submit" name="btSua">Sửa</button></td>
							</tbody>
						</table>
					</div>
				</form> -->
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
    </form>
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

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>
    <!-- <script>
		function off() {
			document.getElementById("modal-them").style.display = "none";
		}

		function on() {
			document.getElementById("modal-them").style.display = "flex";
		}

		function off1() {
			document.getElementById("modal-sua").style.display = "none";
		}

		function on1() {
			document.getElementById("modal-sua").style.display = "flex";
		}
	</script> -->

</body>

</html>