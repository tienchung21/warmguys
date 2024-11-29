<?php
include('connect.php');
class deviceQL extends connect_database{
    
    // public function xoagoitap($idTB)
    // {
    //     $sql="delete from goitap where magoi=$magoi";
    //     return $this->tuychinh($sql);
    // }
    public function themthietbi($sql)
    {
        return $this->tuychinh($sql);
    }
    public function uploadfile($name, $tmp_name, $folder){
        // Đảm bảo thư mục đích tồn tại, nếu không thì tạo
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true); // Tạo thư mục và cấp quyền ghi
        }
    
        // Loại bỏ dấu gạch chéo thừa ở cuối thư mục
        $folder = rtrim($folder, '/');
        $name = $folder . "/" . $name; // Kết hợp tên file và đường dẫn
    
        // Kiểm tra và di chuyển file
        if (move_uploaded_file($tmp_name, $name)) {
            return 1; // Upload thành công
        } else {
            return 0; // Upload thất bại
        }
    }
    public function xoathietbi($idtb){
        $sql = "SELECT Hinhanh FROM thietbi WHERE idTB = $idtb";
        $result = $this->tuychinh($sql);
        if ($result) {
            $file_name = $result[0]['Hinhanh']; // Lấy tên ảnh

            // 2. Xóa file ảnh trên server
            $file_path = "./assets/img/device/". $file_name;
            if (file_exists($file_path)) {
                unlink($file_path); // Xóa ảnh nếu tồn tại
            }
        }

        // 3. Xóa bản ghi thiết bị trong cơ sở dữ liệu
        $sql_delete = "DELETE FROM thietbi WHERE idTB = $idtb";
        return $this->tuychinh($sql_delete); // Thực hiện câu lệnh xóa
    }
}


    // public function suathietbi($sql)
    // {
    //     return $this->tuychinh($sql);
    // }

?>