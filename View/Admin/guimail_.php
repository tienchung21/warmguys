<?php 
require "../Admin/assets/PHPMailer-master/src/PHPMailer.php"; 
require "../Admin/assets/PHPMailer-master/src/SMTP.php"; 
require '../Admin/assets/PHPMailer-master/src/Exception.php'; 

include('../../Model/xuatdulieu.php');
$obj = new database();

$emaill = trim(strtolower($_POST['guiden'])); // Loại bỏ khoảng trắng và chuyển thành  // Lấy email từ form
echo $emaill;
$taikhoan = $obj->danhsachtaikhoan(); // Lấy danh sách tài khoản
var_dump($taikhoan); // In ra danh sách tài khoản

// Tìm tài khoản tương ứng với email
$user = null;
foreach ($taikhoan as $tk) {
    $tk_email = trim(strtolower($tk['email']));
    if ($tk['email'] === $emaill) {
        $user = $tk;
        echo 'email là ' ; // Sửa ở đây
        break;
    }
}

if ($user) {
    // Gửi email nếu email tồn tại
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->SMTPDebug = 2; // 0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com'; //địa chỉ server
        $mail->SMTPAuth = true; 
        $tennguoigui = 'Hệ thống quản lý'; //Nhập tên người gửi
        $mail->Username = 'chung9atm@gmail.com'; // Tài khoản Gmail
        $mail->Password = 'jbxz vatl yfot cstk'; // Mật khẩu ứng dụng
        $mail->SMTPSecure = 'ssl';   
        $mail->Port = 465;              
        $mail->setFrom('chung9atm@gmail.com', $tennguoigui); 
        $mail->addAddress($emaill); // Người nhận  

        // Nội dung email
        $mail->isHTML(true);  
        $mail->Subject = 'Thông tin tài khoản của bạn';      
        $mail->Body = "Tài khoản của bạn là: <br>
                       Username: {$user['Username']}<br>
                       Password: {$user['Password']}";

        $mail->smtpConnect([
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true,
            ],
        ]);
        $mail->send();
        echo 'Đã gửi thông tin tài khoản qua email.';
    } catch (Exception $e) {
        echo 'Không thể gửi email. Lỗi: ', $mail->ErrorInfo;
    }
} else {
    // Nếu email không tồn tại
    echo 'Email không tồn tại trong hệ thống.';
}
