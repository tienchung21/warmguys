<?php
include_once('connect.php');

class giahan extends connect_database{
    public function danhsachgiahan()
    {
            $sql = "select * from hoadon h inner join thanhvien t on t.MaTV = h.MaTV
            WHERE DATEDIFF(NgayKetThuc, CURRENT_DATE) <= 5";
        return $this->xuatdulieu($sql);
    }
}

?>