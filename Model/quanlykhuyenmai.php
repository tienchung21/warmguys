<?php
include('connect.php');
class khuyenmai extends connect_database{
    public function danhsachkhuyenmai($MaKM='')
    {
        if($MaKM)
            $sql="select * from khuyenmai where MaKM='$MaKM'";
        else
            $sql="select * from khuyenmai";
        return $this->xuatdulieu($sql);
    }
    public function xoakhuyenmai($MaKM)
    {
        $sql="delete from khuyenmai where MaKM=$MaKM";
        return $this->tuychinh($sql);
    }
    public function themkhuyenmai($sql): int
    {
        return $this->tuychinh($sql);
    }
    public function suakhuyenmai($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>