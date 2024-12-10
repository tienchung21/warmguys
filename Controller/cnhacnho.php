<?php
require "../Admin/assets/PHPMailer-master/src/PHPMailer.php"; 
require "../Admin/assets/PHPMailer-master/src/SMTP.php"; 
require '../Admin/assets/PHPMailer-master/src/Exception.php'; 
include_once('../../Model/quanlynhacnho.php');
include_once('../../Model/xuatdulieu.php');
    $obj = new nhacnho();
    $danhsachnhacnho = $obj->danhsachnhacnho();
if (isset($_POST["nhacnho"])) {
    if($danhsachnhacnho){
        for ($i = 0; $i < count($danhsachnhacnho); $i++) {
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
            $mail->addAddress($danhsachnhacnho[$i]["EmailTV"]); // Người nhận  

            // Nội dung email
            $mail->isHTML(true);  
            $mail->Subject = 'Phòng Gym WarmGuys';      
            $mail->Body = 'Thông báo: Gần đây phòng tập không thấy thành viên này đi tập, thông tin của thành viên như sau:<br>
                        Mã thành viên : '.$danhsachnhacnho[$i]["MaTV"].'<br>               
                        Họ và tên : '.$danhsachnhacnho[$i]["TenTV"].'<br>
                        Ngày tập gần nhất : '.$danhsachnhacnho[$i]["NgayTap"].'<br>
                        ';

            $mail->smtpConnect([
                "ssl" => [
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true,
                ],
        ]);
            $mail->send();
            echo "<script>alert('Đã gửi nhắc nhở qua email cho thành viên.'); window.location='nhacnhoditap.php';</script>" ;
    } catch (Exception $e) {
            echo 'Không thể gửi email. Lỗi: ', $mail->ErrorInfo;
    }
    }
}
}
?>

