

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        <?php
        include('sidebar.php');
        ?>
        <!-- Sidebar wrapper end -->

        <div class="main-container">
           <!-- code từ đây -->
           <?php
include('../../Model/xuatdulieu.php'); // Bao gồm file xử lý dữ liệu
$obj = new database();
$taikhoan = $obj->danhsachtaikhoan(); // Lấy danh sách tài khoản
?>
 <?php if ($taikhoan): ?>
                    <?php foreach ($taikhoan as $tk): ?>
                        <tr>
                            <td><?= htmlspecialchars($tk['ID']); ?></td>
                            <td><?= htmlspecialchars($tk['Username']); ?></td>
                            <td><?= htmlspecialchars($tk['email']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">Không có tài khoản nào</td>
                    </tr>
                <?php endif; ?>
         
<form method="post" action="guimail_.php" class="col-6 m-auto border border-primary p-2">
<p>email
   <input name="guiden" class="form-control bg-info">
</p>
<!-- <p>Nội dung 
   <textarea name="noidung" hi class="form-control bg-info"></textarea> </p>
<p>  -->
  <button type="submit" class="btn btn-primary" >Gửi mật khẩu</button></p>
</form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>