<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
include('../../model/connect.php');


if (isset($_POST["btDangnhap"])) {
	$obj = new connect_database();
    $email = $_POST["username"];
    $password = $_POST["password"];

    $id_tk = $obj->dangnhaptaikhoan($email, $password);

    if ($id_tk) {
        echo "<script>alert('Đăng nhập thành công!');</script>";
        $_SESSION["dangnhap"] = $id_tk;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Đăng nhập không thành công! Vui lòng kiểm tra lại.');</script>";
        header("Location: login.php");
        exit();
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Best Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- Title -->
    <title>Bootstrap Admin Dashboards</title>


    <!-- *************
			************ Common Css Files *************
		************ -->

    <!-- Animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">


</head>

<body class="login-container">

    <!-- Loading wrapper start -->
    <!-- <div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div> -->
    <!-- Loading wrapper end -->

    <!-- Login box start -->
    <form action="#" method="post">
        <div class="login-box">
            <div class="login-form">
                <a href="index.php" class="login-logo">
                    <img src="assets/images/logo.svg" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    Welcome back, <br />Please login to your Arise admin account.
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label">Password</label>
                        <a href="forgot-password.html" class="btn-link ml-auto">Forgot password?</a>
                    </div>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="login-form-actions">
                    <input type="submit" value="Đăng nhập" id="btn-dangNhap" name="btDangnhap">
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <img src="assets/images/google.svg" class="login-icon"
                            alt="Login with Google">
                        Login with Google</button>
                    <button type="submit" class="btn"> <img src="assets/images/facebook.svg" class="login-icon"
                            alt="Login with Facebook">
                        Login with Facebook</button>
                </div>
                <div class="login-form-footer">
                    <div class="additional-link">
                        Don't have an account? <a href="signup.html"> Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Login box end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

</body>

</html>