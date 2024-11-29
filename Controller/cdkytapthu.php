<?php
include_once('../../model/quanlytapthu.php');
$obj = new dkytapthu();


if (isset($_POST["dkytap"])) {
    $HoTen = $_POST["name"];
    $SDT = $_POST["phone"];
    $Email = $_POST["email"];
    $CanCuoc = $_POST["idCard"];
    $Thoigianlienlac = $_POST["Thoigianlienlac"];

    // Chuẩn bị câu lệnh SQL để thêm vào cơ sở dữ liệu
    $sql = "INSERT INTO khtapthu (Hoten, SDT, Email, CanCuoc, Thoigianlienlac) 
            VALUES ('$HoTen', '$SDT', '$Email', '$CanCuoc', '$Thoigianlienlac')";

    // Thực thi câu lệnh SQL
    if ($obj->dkytapthu($sql)) {
        echo "<script>alert('Đăng ký tập thử thành công!'); window.location='dkytapthu.php';</script>";
    } 
    else{
        echo "<script>alert('Đăng ký tập thất bại!'); window.location='dkytapthu.php';</script>";
    }
}
