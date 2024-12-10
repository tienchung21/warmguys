<!-- Page header starts -->
<div class="page-header">
<?php
            
            include_once('../../Model/xuatdulieu.php');
            $objjj = new database();
            
            
            if (isset($_SESSION['ten'])) {
                $emailll = $_SESSION['ten']; // Lấy giá trị từ session
                $emailll = trim($emailll);
            
                // Câu truy vấn với giá trị từ session
              $sql = "SELECT taikhoan.Username, nhanvien.TenNV 
        FROM taikhoan 
        JOIN nhanvien ON taikhoan.Manv = nhanvien.Manv 
        WHERE taikhoan.Username = '$emailll'";

                $taikhoan = $objjj->danhsachtaikhoan($sql);
            
            }
            ?>
    <div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-house"></i>
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item breadcrumb-active" aria-current="page">Sales</li>
 


    </ol>
    <!-- Breadcrumb end -->

    <!-- Header actions ccontainer start -->
    <div class="header-actions-container">
  

        <!-- Search container start -->
        <div class="search-container">

            <!-- Search input group start -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search anything">
                <button class="btn" type="button">
                    <i class="bi bi-search"></i>

                </button>
                
            </div>
            <!-- Search input group end -->

        </div>
        <!-- Search container end -->



        <!-- Header actions start -->

        <ul class="header-actions">

            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name d-none d-md-block">       <?php
    echo htmlspecialchars($taikhoan[0]["TenNV"], ENT_QUOTES, 'UTF-8');
?>  </span>
                    <span class="avatar">
                        <img src="assets/images/user.png" alt="Admin Templates">
                        <span class="status online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <a href="profile.html">Profile</a>
                        <a href="account-settings.html">Settings</a>
                        <a href="#" onclick="confirmLogout()">Logout</a>

                        <script>
                        function confirmLogout() {
                            if (confirm("Bạn có chắc chắn muốn đăng xuất không?")) {
                                window.location.href =
                                    "logout.php"; // Điều hướng tới trang logout.php nếu người dùng xác nhận
                            }
                        }
                        </script>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>