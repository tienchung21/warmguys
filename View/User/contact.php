<?php
include('../../Controller/cquanlyphanhoidd.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="about.html">Giới thiệu</a></li>
                                <li><a href="courses.html">Gói tập</a></li>
                                <li><a href="pricing.html">Thiết bị</a></li>
                                <li><a href="gallery.html">Khuyến mãi</a></li>
                                <li><a href="blog.html">Tin Tức</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Tin mới</a></li>
                                        <li><a href="blog_details.html">Thông tin chi tiết</a></li>
                                        <li><a href="elements.html">Yếu tố</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php
">Liên hệ</a></li>
                                <li><a href="../Admin/index.php">quản lý</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header-btn -->
                    <div class="header-btns d-none d-lg-block f-right">
                        <a href="dkytapthu.php" class="btn">Đăng Kí Tập Thử</a>

                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Hãy phản hồi để chúng tôi có thể phục vụ cho bạn thật tốt!! </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <div class="container">
        <div class="container">
            <h1>Hãy phản hồi để chúng tôi có thể phục vụ cho bạn thật tốt !!</h1>
            <!-- Thêm thẻ form -->
            <form action="" method="post">
                <div class="row">
                    <!-- SĐT -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Nhập số điện thoại" required>
                        </div>
                    </div>
                    <!-- Tên khách hàng -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Tên khách hàng</label>
                            <input type="text" class="form-control" id="customerName" name="customerName"
                                placeholder="Nhập tên khách hàng" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email"
                                required>
                        </div>
                    </div>
                    <!-- Mã thành viên -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="memberId" class="form-label">Mã thành viên(Bắt buộc)</label>
                            <input type="text" class="form-control" id="memberId" name="memberId"
                                placeholder="Nhập mã thành viên" required>
                        </div>
                    </div>
                </div>

                <!-- Nội dung phản hồi -->
                <div class="mb-3">
                    <label for="feedback" class="form-label">Nội dung phản hồi</label>
                    <textarea class="form-control" id="feedback" name="feedback" rows="4"
                        placeholder="Nhập nội dung phản hồi" required></textarea>
                </div>

                <!-- Nút gửi -->
                <button type="submit" class="btn btn-primary" name="btThem">Gửi Phản Hồi</button>
            </form>
        </div>


    </div>
    <!-- Contact Area End -->
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>12 Nguyen Van Bao streets </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <i class="ti-tablet"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>(84) 349 195 620</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>chung9atm@gmail.com</p>
                            <p>chung10atm@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area black-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-footer-caption mb-50 text-center">
                            <!-- logo -->
                            <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <!-- Menu -->
                            <!-- Header Start -->
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s"
                                data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="courses.html">Courses</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="contact.php
">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header End -->
                            <!-- social -->
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>