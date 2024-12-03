<?php
include('connect.php');

class hoadon extends connect_database{
    public function danhsachhoadon()
    {
        if (isset($_POST["subngay"])) {
            // Lấy dữ liệu từ form
            $TuNgay = $_POST["tungay"];
            $DenNgay = $_POST["denngay"];
            $sql = "select MaHD,NgayLap,TenGoi,MaTV,TenTV,GiaGoi,ThoiHanGoi,TenKhuyenMai,ThanhTien from hoadon 
            WHERE NgayLap BETWEEN '".$TuNgay."' AND '".$DenNgay."'";
        }
        else{
            $sql="select MaHD,NgayLap,TenGoi,MaTV,TenTV,GiaGoi,ThoiHanGoi,TenKhuyenMai,ThanhTien from hoadon ";
        }
        return $this->xuatdulieu($sql);
    }
}

?>