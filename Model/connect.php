<?php
class connect_database{
    public function connect()
    {
        $conn= mysqli_connect("localhost","root","","warmguyss");
        if(!$conn)
        {
            echo"<script>Alert('Ket noi khong thanh cong')</script>";
            exit();
        }
        else{
            return $conn;
        }
    }
    public function dangnhaptaikhoan($username, $password)
    {
        //$password=md5($password);
        $sql = "SELECT ID FROM taikhoan WHERE Username = '$username' AND Password = '$password'";
        $link = $this->connect();
        $result = $link->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            return $row["ID"];
        } else
            return 0;
    }
}
?>