<?php
include('connect.php');
class dkytapthu extends connect_database{
    public function dkytapthu($sql)
    {
        return $this->tuychinh($sql);
    }
    public function dsdkytapthu()
    {
        $sql="select * from khtapthu";
        return $this->xuatdulieu($sql);
    }
}

?>