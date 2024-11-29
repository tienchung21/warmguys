<?php
include('connect.php');

class hoadon extends connect_database{
    public function danhsachhoadon()
    {
            $sql="select MaHD,NgayLap,TenGoi,GiaGoi,ThoiHanGoi,TenKhuyenMai,ThanhTien from hoadon ";
        return $this->xuatdulieu($sql);
    }
}

?>