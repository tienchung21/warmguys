<?php
include('connect.php');
class phanhoidd extends connect_database{
    public function danhsachphanhoidd($maph='')
    {
        if($maph)
            $sql="select * from phanhoi where MaPH='$maph'";
        else
            $sql="select * from phanhoi where TrangThaiPH='Đã Duyệt'";
        return $this->xuatdulieu($sql);
    }
    public function xoaphanhoi($maph)
    {
        $sql="delete from phanhoi where MaPH=$maph";
        return $this->tuychinh($sql);
    }
    public function themphanhoi($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>