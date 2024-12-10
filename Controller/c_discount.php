<?php
include_once('../../model/quanlykhuyenmai.php');
$obj = new khuyenmai();
if (isset($_POST["btXoa"])) {
    $MaKM = $_POST["btXoa"];
    
    if ($obj->xoakhuyenmai($MaKM)) {
        echo "<script>alert('Xóa thành công!');</script>";
    } else {
        echo "<script>alert('Xóa thất bại!');</script>";
    }
}

// Xử lý thêm khuyến mãi
if (isset($_POST["btThem"])) {
    // Lấy dữ liệu từ form
    $MaKM = $_POST["MaKM"];
    $TenKM = $_POST["TenKM"];
    $PhanTramDiscount= $_POST["PhanTramDiscount"];
    $NgayBatDauKM = $_POST["NgayBatDauKM"];
    $NgayKetThucKM = $_POST["NgayKetThucKM"];
    $trangthai = $_POST["trangthai"];

    // Chuẩn bị câu lệnh SQL để thêm vào cơ sở dữ liệu
    $sql = "INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `PhanTramDiscount`, `NgayBatDauKM`, `NgayKetThucKM`, `TrangThai`) 
    VALUES ('$MaKM', '$TenKM', '$PhanTramDiscount', '$NgayBatDauKM', '$NgayKetThucKM', '$trangthai');";

    // Thực thi câu lệnh SQL
    if ($obj->themkhuyenmai($sql)) {
        echo "<script>alert('Thêm thành công!'); window.location='discount.php';</script>";
    } else {
        echo "<script>alert('Thêm thất bại!');</script>";
    }
}

// Xử lý sửa khuyến mãi
if (isset($_POST["btSua"])) {
    // Lấy dữ liệu từ form
    $MaKM = $_POST["MaKM"];
    $TenKM = $_POST["TenKM"];
    $PhanTramDiscount= $_POST["PhanTramDiscount"];
    $NgayBatDauKM = $_POST["NgayBatDauKM"];
    $NgayKetThucKM = $_POST["NgayKetThucKM"];
    $trangthai = $_POST["trangthai"];
    
    // Cập nhật thông tin gói tập trong cơ sở dữ liệu
    $sql = "UPDATE khuyenmai SET 
            TenKM='$TenKM',
            PhanTramDiscount='$PhanTramDiscount',
            NgayBatDauKM='$NgayBatDauKM',
            NgayKetThucKM='$NgayKetThucKM',
            trangthai='$trangthai'
            WHERE MaKM='$MaKM'";

    // Thực hiện cập nhật
    if ($obj->suakhuyenmai($sql)) {
        echo "<script>alert('Sửa khuyến mãi thành công!'); window.location='discount.php';</script>";
    } else {
        echo "<script>alert('Sửa khuyến mãi thất bại!');</script>";
    }
}