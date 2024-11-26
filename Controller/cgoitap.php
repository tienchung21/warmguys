<?php
include_once('../../model/quanlygoitap.php');
$obj = new goitap();
if (isset($_POST["btXoa"])) {
    $magoi = $_POST["btXoa"];
    if ($obj->xoagoitap($magoi)) {
        echo "<script>alert('Xóa thành công!');</script>";
    } else {
        echo "<script>alert('Xóa thất bại!');</script>";
    }
}

// Xử lý thêm gói tập
if (isset($_POST["btThem"])) {
    // Lấy dữ liệu từ form
    $MaGoi = $_POST["MaGoi"];
    $TenGoi = $_POST["TenGoi"];
    $GiaGoi = $_POST["GiaGoi"];
    $ThoiHanGoi = $_POST["ThoiHanGoi"];
    $Mota = $_POST["mota"];
    $Soluongnguoithamgia = $_POST["soluongnguoithamgia"];

    // Chuẩn bị câu lệnh SQL để thêm vào cơ sở dữ liệu
    $sql = "INSERT INTO goitap (MaGoi, TenGoi, GiaGoi, ThoiHanGoi, mota, soluongnguoithamgia) 
            VALUES ('$MaGoi', '$TenGoi', $GiaGoi, $ThoiHanGoi, '$Mota', $Soluongnguoithamgia)";

    // Thực thi câu lệnh SQL
    if ($obj->themgoitap($sql)) {
        echo "<script>alert('Thêm gói tập thành công!'); window.location='goitap.php';</script>";
    } else {
        echo "<script>alert('Thêm gói tập thất bại!');</script>";
    }
}

// Xử lý sửa gói tập
if (isset($_POST["btSua"])) {
    // Lấy dữ liệu từ form
    $maGoi = $_POST["MaGoi"];
    $tenGoi = $_POST["TenGoi"];
    $mota = $_POST["Mota"];
    $soLuong = $_POST["SoLuong"];
    $gia = $_POST["Gia"];
    $thoiHan = $_POST["ThoiHan"];
    
    // Cập nhật thông tin gói tập trong cơ sở dữ liệu
    $sql = "UPDATE goitap SET 
            TenGoi='$tenGoi',
            Mota='$mota',
            SoLuongNguoiThamGia=$soLuong,
            GiaGoi=$gia,
            ThoiHanGoi=$thoiHan
            WHERE MaGoi='$maGoi'";

    // Thực hiện cập nhật
    if ($obj->suagoitap($sql)) {
        echo "<script>alert('Sửa gói tập thành công!'); window.location='goitap.php';</script>";
    } else {
        echo "<script>alert('Sửa gói tập thất bại!');</script>";
    }
}