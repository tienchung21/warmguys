<?php
include('connect.php');

class hoadondd extends connect_database
{
    // Danh sách hóa đơn theo mã hóa đơn
    public function danhsachhoadon($mahd = '')
    {
        if ($mahd)
            $sql = "SELECT * FROM hoadon WHERE MaHD='$mahd'";
        else
            $sql = "SELECT * FROM hoadon"; // Lấy tất cả hóa đơn

        return $this->xuatdulieu($sql);
    }

    // Thêm hóa đơn mới vào bảng hoadon
    public function themhoadon($TrangThaiTT, $MaGoi, $MaKM, $MaTV, $Manv, $ThanhTien, $TenTV, $SDT, $Email, $GioiTinh, $DiaChi)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $NgayLap = date("Y-m-d"); // Ngày hiện tại
        $NgayBatDau = $NgayLap; // Ngày bắt đầu là ngày hiện tại
        $link = $this->connect();



        // Lấy thời hạn gói từ bảng goitap
        $sqlThoiHan = "SELECT ThoiHanGoi FROM goitap WHERE MaGoi = $MaGoi";
        $resultThoiHan = $link->query($sqlThoiHan);
        if ($resultThoiHan->num_rows > 0) {
            $rowThoiHan = $resultThoiHan->fetch_assoc();
            $ThoiHanGoi = $rowThoiHan['ThoiHanGoi'];
            $NgayKetThuc = date("Y-m-d", strtotime($NgayLap . " + $ThoiHanGoi months"));
        } else {
            echo "<script>alert('Không tìm thấy gói này!');</script>";
            return;
        }




        // Kiểm tra MaKM, nếu là NULL thì không có dấu nháy đơn
        $MaKM = ($MaKM == NULL) ? "NULL" : "'$MaKM'";

        // Câu lệnh SQL để thêm hóa đơn vào bảng hoadon
        $sql = "INSERT INTO hoadon (NgayLap, NgayBatDau, NgayKetThuc, TrangThaiTT, MaGoi, MaKM, MaTV, Manv, ThanhTien, TenTV, SDT, Email, GioiTinh, DiaChi)
                VALUES ('$NgayLap', '$NgayBatDau', '$NgayKetThuc', '$TrangThaiTT', $MaGoi, $MaKM, $MaTV, $Manv, $ThanhTien, '$TenTV', '$SDT', '$Email', '$GioiTinh', '$DiaChi')";

        return $this->tuychinh($sql); // Thực thi câu lệnh SQL
    }


    public function selectgoitap($value = '')
    {
        $str = '';
        $sql = "SELECT * FROM goitap";  // Truy vấn MySQL để lấy tất cả các gói tập
        $arr = $this->xuatdulieu($sql); // Lấy dữ liệu từ MySQL (hàm xuatdulieu có thể là một hàm để trả về kết quả truy vấn)

        // Lặp qua các kết quả và tạo các <option> trong <select>
        for ($i = 0; $i < count($arr); $i++) {
            // Chèn giá trị giaGoi vào thuộc tính data-price của từng option
            if ($arr[$i]["MaGoi"] == $value) {
                $str .= '<option selected value="' . $arr[$i]["MaGoi"] . '" data-price="' . $arr[$i]['GiaGoi'] . '">' . $arr[$i]["TenGoi"] . '</option>';
            } else {
                $str .= '<option value="' . $arr[$i]["MaGoi"] . '" data-price="' . $arr[$i]['GiaGoi'] . '">' . $arr[$i]["TenGoi"] . '</option>';
            }
        }
        return $str;
    }

    
    public function selectKM($value = '') {
        $str = '';
        $sql = "SELECT * FROM khuyenmai";  
        $arr = $this->xuatdulieu($sql);
    
        for ($i = 0; $i < count($arr); $i++) {
            $selected = ($arr[$i]["MaKM"] == $value) ? "selected" : "";
            $str .= '<option ' . $selected . ' value="' . $arr[$i]["MaKM"] . '" data-price="' . $arr[$i]['PhanTramDiscount'] . '">'
                    . $arr[$i]["TenKM"] . '</option>';
        }
        return $str;
    }
    

}