<?php
include_once('connect.php');

class nhacnho extends connect_database{
    public function danhsachnhacnho()
    {
            $sql = "select t.MaTV,t.TenTV,NgayTap,t.EmailTV FROM thanhvien t inner join theodoitapluyen th on th.MaTV = t.MaTV
                    WHERE NOT EXISTS (
                        SELECT 1
                        FROM theodoitapluyen th
                        WHERE th.MaTV = t.MaTV
                        AND th.NgayTap > CURDATE() - INTERVAL 5 DAY)";
        return $this->xuatdulieu($sql);
    }
}

?>