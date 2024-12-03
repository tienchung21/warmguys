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
