<?php
include_once('../../model/quanlychuatt.php');
$obj = new hoadon();
if (isset($_POST["btTT"])) {
    $MaHD = $_POST["btTT"];
    // Lấy dữ liệu từ form
    $sql = "UPDATE hoadon SET 
            TrangThaiTT = 'Đã Thanh Toán'
            WHERE MaHD='$MaHD'";

    // Thực hiện cập nhật
    if ($obj->capnhatthanhtoan($sql)) {
        echo "<script>alert('Trạng thái thanh toán đã được cập nhật!'); window.location='hoadonchuatt.php';</script>";
    } else {
        echo "<script>alert('Lỗi!!');</script>";
    }
}