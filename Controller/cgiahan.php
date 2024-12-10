<?php
require "../Admin/assets/PHPMailer-master/src/PHPMailer.php"; 
require "../Admin/assets/PHPMailer-master/src/SMTP.php"; 
require '../Admin/assets/PHPMailer-master/src/Exception.php'; 
include_once('../../Model/quanlygiahan.php');
include_once('../../Model/xuatdulieu.php');
    $obj = new giahan();
    $danhsachgiahan = $obj->danhsachgiahan();
if (isset($_POST["giahan"])) {
    if($danhsachgiahan){
        for ($i = 0; $i < count($danhsachgiahan); $i++) {
            $objj = new database();
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            try {
            $mail->SMTPDebug = 2; // 0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com'; //địa chỉ server
            $mail->SMTPAuth = true; 
            $tennguoigui = 'Phòng Gym WarmGuys'; //Nhập tên người gửi
            $mail->Username = 'chung9atm@gmail.com'; // Tài khoản Gmail
            $mail->Password = 'jbxz vatl yfot cstk'; // Mật khẩu ứng dụng
            $mail->SMTPSecure = 'ssl';   
            $mail->Port = 465;              
            $mail->setFrom('chung9atm@gmail.com', $tennguoigui); 
            $mail->addAddress($danhsachgiahan[$i]["EmailTV"]); // Người nhận  

            // Nội dung email
            $mail->isHTML(true);  
            $mail->Subject = 'Phòng Gym WarmGuys';      
            $mail->Body = 'Thông báO: Gói tập của quý khách sắp hết hạn, thông tin của gói như sau:<br>
                        Mã thành viên : '.$danhsachgiahan[$i]["MaTV"].'<br>               
                        Họ và tên : '.$danhsachgiahan[$i]["TenTV"].'<br>
                        Thời gian gọi cho bạn : '.$danhsachgiahan[$i]["NgayKetThuc"].'<br>
                        ';

            $mail->smtpConnect([
                "ssl" => [
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true,
                ],
        ]);
            $mail->send();
            echo "<script>alert('Đã gửi thông tin tài khoản qua email.'); window.location='giahanthanhvien.php';</script>" ;
    } catch (Exception $e) {
            echo 'Không thể gửi email. Lỗi: ', $mail->ErrorInfo;
    }
    }
}
}
?>

