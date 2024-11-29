<?php
include('connect.php');
class dkytapthu extends connect_database{
    public function dkytapthu($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>