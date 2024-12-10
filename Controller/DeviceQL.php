<?php
include_once("../../Model/Modeldevice.php");
$p = new deviceQL();
        if (isset($_POST["Thêm"])) {
            // Lấy dữ liệu từ form
            $tenTB = $_POST["tenTB"];
            $loaiTB = $_POST["loaiTB"];
            $tinhtrang = $_POST["tinhtrang"];

            $name = $_FILES['myfile']['name'];
            $tmp_name = $_FILES['myfile']['tmp_name'];

            $folder = "./assets/img/device/";
            //gán giá trị bằng tên
            $loaiTB_names = [
                1 => "Tập tay",
                2 => "Tập chân",
                3 => "Tập cơ bụng",
                4 => "Tập ngực"
            ];

            $tingtrang_names=[
                1 => "Bình thường",
                2 => "Bảo trì",
            ];

            $loaiTB_names= $loaiTB_names[$loaiTB];
            $tingtrang_names = $tingtrang_names[$tinhtrang];


            if($name!=""){
                $name= time().'_'.$name;
                if($p->uploadfile($name, $tmp_name, $folder)){
                    if(!$loaiTB_names || !$tenTB || !$tingtrang_names){
                        echo "<script>alert('Vui lòng nhập đầy đủ thông tin');</script>";
                    }
                    else{
                        // Chuẩn bị câu lệnh SQL để thêm vào cơ sở dữ liệu
                        $sql = "INSERT INTO thietbi (TenTB, LoaiTB, TinhTrangTB, Hinhanh ) 
                                VALUES ('$tenTB', '$loaiTB_names', '$tingtrang_names', '$name')";
                    
                        // Thực thi câu lệnh SQL
                        if ($p->themthietbi($sql)) {
                            echo "<script>alert('Thêm gói tập thành công!'); window.location='device.php';</script>";
                        } else {
                            echo "<script>alert('Thêm gói tập thất bại!');</script>";
                        }
                    }
                }else{
                    echo "upload không thành công";
                }
            }
        }


        if (isset($_POST["nutXoa"])) {
            $idTB = $_POST['nutXoa'];
            if($idTB){
                if ($p->xoathietbi($idTB)) {
                    echo "<script>alert('Xóa thiết bị thành công!'); </script>";
                } else {
                    echo "<script>alert('Xóa thiết bị thất bại!');</script>";
                }
            }else{
                echo "<script>alert('không có id thiết bị');</script>";
            }
        }


        if (isset($_POST["nutSua"])) {
            // Lấy dữ liệu từ form
            $idTB = $_GET["id"];
            $tenTB = $_POST["tenTB"];
            $loaiTB = $_POST["loaiTB"];
            $tinhtrang = $_POST["tinhtrang"];
            $hinhanh = $_FILES['myfile']; // Hình ảnh (nếu có)
        
            // Chuyển đổi giá trị của Loại thiết bị và Tình trạng
            $loaiTB_names = [
                1 => "Tập tay",
                2 => "Tập chân",
                3 => "Tập cơ bụng",
                4 => "Tập ngực"
            ];
        
            $tingtrang_names = [
                1 => "Bình thường",
                2 => "Bảo trì"
            ];
        
            $loaiTB_names = $loaiTB_names[$loaiTB];
            $tingtrang_names = $tingtrang_names[$tinhtrang];
            if ($p->Capnhatthietbi($idTB, $tenTB, $loaiTB_names, $tingtrang_names, $hinhanh)==1) {
                echo "<script>alert('Cập nhật thiết bị thành công!'); window.location='device.php';</script>";
            } else {
                echo "<script>alert('Cập nhật thiết bị thất bại!');</script>";
            }
        }
        

        if(isset($_POST['nutGhinhan'])){
            $idTB = $_POST['idtb'];
            // $id = $_POST['id'];
            $Manv = $_POST['idnv'];
            $mota = $_POST['mota'];
            $thoigian = $_POST['thoigianghinhan'];

            if($mota!=""){
                $parts = explode(' ', $thoigian); // Tách chuỗi theo khoảng trắng
                $ngaythangnam = $parts[0]; // Lấy phần ngày tháng năm
                $time = $parts[1] . ' ' . $parts[2]; // Lấy phần giờ (bao gồm cả AM/PM)
                
                // Định dạng ngày tháng năm sang dạng chuẩn MySQL (YYYY-MM-DD)
                $ngaythangnamFormatted = date("Y-m-d", strtotime($ngaythangnam));


                $sql = "INSERT INTO chitietghinhantinhtrang (Motatinhtrang, Ngayghinhan, thietBiMaTB, nhanVienManv, time)
                    VALUES ('$mota', '$ngaythangnamFormatted', '$idTB', '$Manv', '$time');";


                $sqltrangthaiTB = "UPDATE thietbi
                SET TinhTrangTB = 'Bảo trì'
                WHERE MaTB = '$idTB';"; 
                $sqltrangthaighinhan = "UPDATE chitietghinhantinhtrang
                SET trangthai = 'Đã bảo trì'
                WHERE ID = '$id';"; 


                echo $sqltrangthaighinhan;
                if ($p->chitietghinhan($sql)) {
                    if($p->chitietghinhan($sqltrangthaiTB)&&$p->chitietghinhan($sqltrangthaighinhan)){
                        echo "<script>alert('Ghi nhận tình trạng thành công'); window.location='DStinhtrangTB.php';</script>";
                    }
                } else {
                    echo "<script>alert('Ghi nhận tình trạng không thành công');</script>";
                }

            }
        }

        if(isset($_POST['nutBaotri'])){
            $id = $_POST['id'];
            $idTB = $_POST['idtb'];
            $Manv = $_POST['idnv'];
            $mota = $_POST['mota'];
            $thoigian = $_POST['thoigianghinhan'];
            $giaiphap = $_POST['giaiphap'];
            $ketqua = $_POST['ketqua'];

            if($mota!=""){
                $parts = explode(' ', $thoigian); // Tách chuỗi theo khoảng trắng
                $ngaythangnam = $parts[0]; // Lấy phần ngày tháng năm
                $time = $parts[1] . ' ' . $parts[2]; // Lấy phần giờ (bao gồm cả AM/PM)
                
                // Định dạng ngày tháng năm sang dạng chuẩn MySQL (YYYY-MM-DD)
                $ngaythangnamFormatted = date("Y-m-d", strtotime($ngaythangnam));
                $sqltrangthai = "UPDATE chitietghinhantinhtrang
                                    SET trangthai = 'Đã bảo trì'
                                    WHERE ID = '$id';
                                    ";  
                
                $sqltrangthaiTB = "UPDATE thietbi
                SET TinhTrangTB = 'Bình thường'
                WHERE MaTB = '$idTB';"; 
                $sql = "INSERT INTO baotri (Motabaotri, Ngaybaotri, KetQua, GiaiPhap, thietBiMaTB, nhanVienManv) VALUES ('$mota', '$ngaythangnamFormatted', '$ketqua', '$giaiphap', '$idTB', '$Manv');";
                if ($p->baotriTB($sql)) {
                    if($p->baotriTB($sqltrangthai)){ 
                        if($p->baotriTB($sqltrangthaiTB)) {
                            echo "<script>alert('Cập nhật tình trạng thành công'); window.location='DStinhtrangTB.php';</script>"; 
                        }
                    }
                } else {
                    echo "<script>alert('Cập nhật tình trạng không thành công');</script>";
                }
            }
        }
?>