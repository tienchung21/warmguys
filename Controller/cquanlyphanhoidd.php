<?php
include_once('../../model/quanlyphanhoidd.php');
$obj = new phanhoidd();
if (isset($_POST["btXoaPHdd"])) {
    $maph = $_POST["btXoaPHdd"];
    if ($obj->xoaphanhoi($maph)) {
        echo "<script>alert('Xóa phản hồi thành công!');</script>";
    } else {
        echo "<script>alert('Lỗi!');</script>";
    }
}
// Xử lý thêm phản hồi
if (isset($_POST["btThem"])) {
    // Đặt múi giờ Việt Nam
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    // Lấy dữ liệu từ form
    $tenTV=$_POST["customerName"];
    $NoiDungPhanHoi = $_POST["feedback"];
    $MaTV = !empty($_POST["memberId"]) ? $_POST["memberId"] : "NULL"; // Cho phép NULL nếu không có thành viên
    $SoDienThoai = $_POST["phone"];
    $Email = $_POST["email"];
    $NgayPhanHoi = date("Y-m-d H:i:s"); // Chuyển timestamp thành định dạng DATETIME
    $TrangThaiPH = "Chờ duyệt"; // Mặc định trạng thái

    // Chuẩn bị câu lệnh SQL để thêm vào bảng phanhoi
    $sql = "INSERT INTO phanhoi (NoiDung, TrangThaiPH, MaTV, Date, sdt, email,TenTV) 
            VALUES ('$NoiDungPhanHoi', '$TrangThaiPH', $MaTV, '$NgayPhanHoi', '$SoDienThoai', '$Email','$tenTV')";

    // Thực thi câu lệnh SQL
    if ($obj->themphanhoi($sql)) { // Hàm executeQuery để thực thi SQL
        echo "<script>alert('Thêm phản hồi thành công!'); window.location='contact.php';</script>";
    } else {
        echo "<script>alert('Thêm phản hồi thất bại!');</script>";
    }
}

?>