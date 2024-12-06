<?php
include_once('connect.php');
class deviceQL extends connect_database{
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
        $sql = "SELECT Hinhanh FROM thietbi WHERE MaTB = $idtb";
        $result = $this->xuatdulieu($sql);
        if (!empty($result)) {
            $file_name = $result[0]['Hinhanh']; // Lấy tên ảnh
            // 2. Xóa file ảnh trên server
            $file_path = "./assets/img/device/". $file_name;
            if (file_exists($file_path)) {
                unlink($file_path); // Xóa ảnh nếu tồn tại
            }
        }
        // 3. Xóa bản ghi thiết bị trong cơ sở dữ liệu
        $sql_delete = "DELETE FROM thietbi WHERE MaTB = $idtb";
        return $this->tuychinh($sql_delete); // Thực hiện câu lệnh xóa
    }

    public function Capnhatthietbi($idtb, $tenTB, $loaiTB, $tinhtrang, $hinhanh = "")
{
    // Kiểm tra và xử lý hình ảnh nếu có
    $sql_update = "UPDATE thietbi SET TenTB = '$tenTB', LoaiTB = '$loaiTB', TinhTrangTB = '$tinhtrang'";

    // Nếu có hình ảnh mới, xử lý và cập nhật vào cơ sở dữ liệu
    if ($hinhanh['name'] != "") {
        $name = time() . '_' . $hinhanh['name'];
        $tmp_name = $hinhanh['tmp_name'];
        $folder = "./assets/img/device/";
        
        // Upload hình ảnh
        if ($this->uploadfile($name, $tmp_name, $folder)) {
            // Lấy tên hình ảnh cũ để xóa
            $sql = "SELECT Hinhanh FROM thietbi WHERE MaTB = $idtb";
            $result = $this->xuatdulieu($sql);
            if (!empty($result)) {
                $file_name = $result[0]['Hinhanh']; // Lấy tên ảnh cũ
                $file_path = "./assets/img/device/" . $file_name;
                if (file_exists($file_path)) {
                    unlink($file_path); // Xóa ảnh cũ nếu tồn tại
                }
            }
            // Cập nhật hình ảnh mới
            $sql_update .= ", Hinhanh = '$name'";
        }
    }

    // Hoàn tất câu lệnh SQL và thực thi
    $sql_update .= " WHERE MaTB = $idtb";
    return $this->tuychinh($sql_update); // Thực thi câu lệnh cập nhật
}
    public function chitietghinhan($sql){
        $sql = "";
    }
}
?>