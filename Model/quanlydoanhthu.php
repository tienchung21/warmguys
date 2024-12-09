<?php
include('connect.php');

class hoadon extends connect_database
{
    public function danhsachhoadon()
    {
        if (isset($_POST["subngay"])) {
            // Lấy dữ liệu từ form
            $TuNgay = $_POST["tungay"];
            $DenNgay = $_POST["denngay"];
            $sql = "select MaHD,NgayLap,TrangThaiTT,TenTV,g.TenGoi,g.GiaGoi,g.ThoiHanGoi,MaKM,ThanhTien from 
            hoadon h inner join goitap g  on g.MaGoi=h.MaGoi
            WHERE TrangThaiTT='Đã Thanh Toán' AND NgayLap BETWEEN '" . $TuNgay . "' AND '" . $DenNgay . "'";
        } else {
            $sql = "select MaHD,NgayLap,TrangThaiTT,TenTV,g.TenGoi,g.GiaGoi,g.ThoiHanGoi,MaKM,ThanhTien from 
            hoadon h inner join goitap g  on g.MaGoi=h.MaGoi
            WHERE TrangThaiTT='Đã Thanh Toán'";
        }
        return $this->xuatdulieu($sql);
    }
}
