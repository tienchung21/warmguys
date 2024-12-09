<?php
include_once('../../Model/quanlihoadon.php');

// Kiểm tra xem form đã được submit chưa
if (isset($_POST["btTao"])) {
    // Lấy dữ liệu từ form và xử lý trước khi gọi hàm
    $TenTV = $_POST["tenTV"] ?? '';
    $SDT = $_POST["phoneNumber"] ?? '';
    $Email = $_POST["Email"] ?? '';
    $diaChi = $_POST["diachi"] ?? 'Địa chỉ chưa cập nhật';
    $GioiTinh = $_POST["GioiTinh"] ?? 'Không xác định';
    $MaGoi = intval($_POST["goiTap"] ?? 0);
    $MaKM = !empty($_POST["maKM"]) ? intval($_POST["maKM"]) : NULL;
    $ThanhTien = floatval($_POST["thanhTien"] ?? 0);
    $TrangThaiTT = $_POST["ttThanhToan"] ?? 'Chưa thanh toán';
    $Manv = intval($_POST["Manv"] ?? 0);
    $MaTV = intval($_POST["maTV"] ?? 0);

    // Khởi tạo đối tượng hoadondd để gọi phương thức thêm hóa đơn
    $hoadon = new hoadondd();

    // Gọi phương thức thêm hóa đơn
    $result = $hoadon->themhoadon($TrangThaiTT, $MaGoi, $MaKM, $MaTV, $Manv, $ThanhTien, $TenTV, $SDT, $Email, $GioiTinh, $diaChi);

    if ($result) {
        echo "<script>alert('Thêm hóa đơn thành công!'); window.location='hoadon.php';</script>";
    } else {
        echo "<script>alert('Thêm hóa đơn thất bại!');</script>";
    }
}
// Kiểm tra xem có yêu cầu mã khuyến mãi không
if (isset($_POST['maKM'])) {
    $maKM = $_POST['maKM']; // Lấy mã khuyến mãi từ yêu cầu POST

    // Khởi tạo đối tượng hoadondd để gọi phương thức getPhanTramDiscount
    $hoadon = new hoadondd();

   

    // Trả phần trăm giảm giá về cho AJAX (client)
    echo $phanTramDiscount;
}
?>