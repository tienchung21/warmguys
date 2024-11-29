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
                1 => "Bảo trì",
                2 => "Chưa bảo trì"
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
            //kiểm tra chưa chọn loại thiết bị
        }


        if (isset($_POST["Xóa"])) {
            $idTB = $_GET["MaTB"]; // Lấy ID thiết bị từ URL
        
            // Gọi hàm xóa thiết bị từ Model
            if ($p->xoathietbi($idTB)) {
                echo "<script>alert('Xóa thiết bị thành công!'); window.location='device.php';</script>";
            } else {
                echo "<script>alert('Xóa thiết bị thất bại!');</script>";
            }
        }
// if (isset($_POST["btXoa"])) {
//     $magoi = $_POST["btXoa"];
//     if ($obj->xoagoitap($magoi)) {
//         echo "<script>alert('Xóa thành công!');</script>";
//     } else {
//         echo "<script>alert('Xóa thất bại!');</script>";
//     }
// }

// Xử lý thêm gói tập


// Xử lý sửa gói tập
// if (isset($_POST["btSua"])) {
//     // Lấy dữ liệu từ form
//     $maGoi = $_POST["MaGoi"];
//     $tenGoi = $_POST["TenGoi"];
//     $mota = $_POST["Mota"];
//     $soLuong = $_POST["SoLuong"];
//     $gia = $_POST["Gia"];
//     $thoiHan = $_POST["ThoiHan"];
    
//     // Cập nhật thông tin gói tập trong cơ sở dữ liệu
//     $sql = "UPDATE goitap SET 
//             TenGoi='$tenGoi',
//             Mota='$mota',
//             SoLuongNguoiThamGia=$soLuong,
//             GiaGoi=$gia,
//             ThoiHanGoi=$thoiHan
//             WHERE MaGoi='$maGoi'";

//     // Thực hiện cập nhật
//     if ($obj->suagoitap($sql)) {
//         echo "<script>alert('Sửa gói tập thành công!'); window.location='goitap.php';</script>";
//     } else {
//         echo "<script>alert('Sửa gói tập thất bại!');</script>";
//     }
// }