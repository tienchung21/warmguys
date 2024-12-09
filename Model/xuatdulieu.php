<?php
class database{
    private function connect()
    {
        $conn= new mysqli("localhost","root","","warmguys");
        if($conn->connect_errno)
        {
            echo"<script>Alert('Ket noi khong thanh cong')</script>";
            exit();
        }
        else
        return $conn;   
    }
    public function xuatdulieu($sql)
    {
        $arr=array();
        $link=$this->connect();
        $result=$link->query($sql);
        if($result->num_rows)
        {
            while($row=$result->fetch_assoc())
            $arr[]=$row;
            return $arr;
        }
        else
        return 0;
    }

    public function danhsachthanhvien()
    {
            $sql="select * from thanhvien ";
        return $this->xuatdulieu($sql);
    }
    public function danhsachdanhgia()
    {
            $sql="SELECT 
            phanhoi.*, thanhvien.* from phanhoi JOIN thanhvien ON phanhoi.MaTV = thanhvien.MaTV where TrangThaiPH='daduyet' ";
        return $this->xuatdulieu($sql);
    }
    public function danhsachtheodoi()
    {
        $sql = "SELECT theodoitapluyen.*, thanhvien.* 
        FROM theodoitapluyen 
        JOIN thanhvien ON theodoitapluyen.MaTV = thanhvien.MaTV";
        return $this->xuatdulieu($sql);
    }
    public function danhsachtaikhoan($sql = null)
    {
        if ($sql === null) {
            $sql = "SELECT * FROM taikhoan";
        }
        return $this->xuatdulieu($sql);
    }

    public function xuat1thanhvien(int $maTV)
{
    $sql = "SELECT * FROM thanhvien WHERE MaTV = $maTV";
    return $this->xuatdulieu($sql);
}

    public function xoadulieu($sql)
    {
        $link=$this->connect();
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
 
    public function suadulieu($sql)
    {
        $link=$this->connect();
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
    public function xoathanhvien($MaTV)
    {
        $sql="delete from thanhvien where MaTV='$MaTV'";
        return $this->xoadulieu($sql);
    }
    public function themsanpham($sql)
    {
        return $this->themdulieu($sql);
    }
    public function themdulieu($sql)
    {
        $link=$this->connect();
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
    public function suathanhvien($sql)
    {
        return $this->suadulieu($sql);
    }
}















?>