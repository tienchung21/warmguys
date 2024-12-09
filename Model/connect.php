<?php
class connect_database
{
    public function connect()
    {
        $conn= new mysqli("localhost","root","","warmguyss");
        if($conn->connect_errno)
        {
            echo"<script>Alert('Ket noi khong thanh cong')</script>";
            exit();
        }
        else
        return $conn;
    }
    public function dangnhaptaikhoan($username, $password)
    {
        //$password=md5($password);
        $sql = "SELECT * FROM taikhoan WHERE Username = '$username' AND Password = '$password'";
        $link = $this->connect();
        $result = $link->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            return $row;
        } else
            return 0;
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
    public function tuychinh($sql)
    {
        $link=$this->connect();     
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
}
?>