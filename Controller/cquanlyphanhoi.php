<?php
include_once('../../model/quanlyphanhoi.php');
$obj = new phanhoi();
if (isset($_POST["btXoaPH"])) {
    $maph = $_POST["btXoaPH"];
    if ($obj->xoaphanhoi($maph)) {
        echo "<script>alert('Xóa phản hồi thành công!');</script>";
    } else {
        echo "<script>alert('Lỗi!');</script>";
    }
}

if (isset($_POST["btDuyetPH"])) {
    $MaPH = $_POST["btDuyetPH"];
    // Lấy dữ liệu từ form
    $sql = "UPDATE phanhoi SET 
            TrangThaiPH = 'Đã duyệt'
            WHERE MaPH='$MaPH'";

    // Thực hiện cập nhật
    if ($obj->duyetphanhoi($sql)) {
        echo "<script>alert('Đã duyệt!'); window.location='phanhoichoduyet.php';</script>";
    } else {
        echo "<script>alert('Lỗi!!');</script>";
    }
}