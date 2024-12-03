<?php
require "../Admin/assets/PHPMailer-master/src/PHPMailer.php"; 
require "../Admin/assets/PHPMailer-master/src/SMTP.php"; 
require '../Admin/assets/PHPMailer-master/src/Exception.php'; 
include_once('../../Model/quanlytapthu.php');
$obj = new dkytapthu();


if (isset($_POST["dkytap"])) {
    $HoTen = $_POST["name"];
    $SDT = $_POST["phone"];
    $Email = trim(strtolower($_POST['email']));
    $CanCuoc = $_POST["idCard"];
    $Thoigianlienlac = $_POST["Thoigianlienlac"];
    $dsdkytap = $obj->dsdkytapthu();
    $ss=0;
    if ($dsdkytap){
        for ($i = 0; $i < count($dsdkytap); $i++) {
            if($dsdkytap[$i]["SDT"]==$SDT || $dsdkytap[$i]["Email"]==$Email || $dsdkytap[$i]["CanCuoc"]==$CanCuoc){
                $ss=1;
            }
            else{
                $ss=$ss;
            }
        }
    }
    if($ss==0){
                    // Chuẩn bị câu lệnh SQL để thêm vào cơ sở dữ liệu
    $sql = "INSERT INTO khtapthu (Hoten, SDT, Email, CanCuoc, Thoigianlienlac) 
            VALUES ('$HoTen', '$SDT', '$Email', '$CanCuoc', '$Thoigianlienlac')";

    // Thực thi câu lệnh SQL
    if ($obj->dkytapthu($sql)) {
        echo "<script>alert('Đăng ký tập thử thành công! Hãy kiểm tra lại email của bạn '); window.location='dkytapthu.php';</script>";
    include('../../Model/xuatdulieu.php');
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
        $mail->addAddress($Email); // Người nhận  

        // Nội dung email
        $mail->isHTML(true);  
        $mail->Subject = 'Phòng Gym WarmGuys';      
        $mail->Body = "Chúc mừng bạn đã đăng ký thành công buổi tập thử ở WarmGuys. 
                       Chúng tôi sẽ liên hệ vào số điện thoại của bạn vào thời gian bạn đã đăng ký.Thông tin tài khoản đã đăng ký là: <br> 
                       Họ và tên : ".$HoTen."<br>
                       Số điện thoại : ".$SDT."<br>
                       Email : ".$Email."<br>
                       CCCD : ".$CanCuoc."<br>
                       Thời gian gọi cho bạn : ".$Thoigianlienlac."<br>
                       ";

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
    }
    else{
        echo "<script>alert('Đăng ký tập thất bại!'); window.location='dkytapthu.php';</script>";
    }
        }
        else{
            echo "<script>alert('Đăng ký tập thất bại! Thông tin đăng ký đã có trên hệ thống'); window.location='dkytapthu.php';</script>";
        }
    }

