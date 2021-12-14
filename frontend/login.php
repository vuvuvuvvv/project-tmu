<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
$error = '';
session_start();
if(isset($_SESSION['login_user'])) {
    header("location: index.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // email and password sent from form 
   
   $email = $_POST['email'];
   $mypassword = $_POST['password']; 
   
   $sql = "SELECT * FROM users WHERE email = '$email' and password = '$mypassword'";
   $query = $dbConnection->query($sql);
   $row = $query->fetch_array();
   
   // If result matched $email and $password, table row must be 1 row
   if(!empty($row)) {
      $_SESSION['login_user'] = $row['username'];
      $error = '';
      header("location: index.php");
   }else {
      $error = "<small class='text-danger'>Email hoặc mật khẩu không đúng! Hãy thử lại.</small>";
   }
}
$dbConnection->close();
?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Thuong Mai University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome/css/all.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
    <!-- header -->
    <header class="sticky-top">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg text-light mx-0 px-0">
                <a class="navbar-brand" href="index.php">
                <h4 class='text-logo'>Thuong Mai university</h4>
                </a>
                <button class="navbar-toggler ml-auto p-0 text-light" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-lg-auto float-left">
                        <li class="nav-item">
                            <a class="nav-link m-0" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="tintuc.php">Tin Tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="CS2.php">Cơ sở 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="nghanhoc.php">Ngành học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="login.php">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="register.php">Đăng kí</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <div class="inner-banner-TMU py-5" id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- login  -->
            <div class="modal-body my-5 pt-4">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Đăng nhập</h3>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Nhập email của bạn" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" required>
                    </div>
                    <?= $error ?>
                    <button type="submit" class="btn button-style-w3">Đăng nhập</button>
                    <div class="row sub-w3l mt-3 mb-5">
                        <div class="col-sm-6 sub-w3layouts_hub">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-li text-style-TMU">
                                <span></span>Ghi nhớ mật khẩu?</label>
                        </div>
                        <div class="col-sm-6 forgot-w3l text-sm-right">
                            <a href="#" class="text-li text-style-TMU">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <p class="text-center dont-do text-style-TMU text-li"><a href="register.php" class="font-weight-bold text-li">Bạn chưa có tài khoản? Register Now</a>
                    </p>
                </form>
            </div>
            <!-- //login -->
        </div>
    </div>
    <!-- //inner banner -->

    <!-- footer -->
    <footer class="py-5">
        <div class="container py-xl-4 py-lg-3">
            <div class="row footer-grids">
                <div class="col-lg-2 col-6 footer-grid">
                    <h3 class="mb-sm-4 mb-3">Navigation</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.php">TMU</a>
                        </li>
                        <li>
                            <a href="#about">Giới Thiệu</a>
                        </li>
                        <li>
                            <a href="#what">Về chúng tôi</a>
                        </li>
                        <li>
                            <a href="#gallery">Tham quan</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-grid">
                    <h3 class="mb-sm-4 mb-3">Thông tin</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="http://dangky.tmu.edu.vn/">Đăng kí tín chỉ</a>
                        </li>
                        <li>
                            <a href="#events">Trang web trường</a>
                        </li>
                        <li>
                            <a href="#courses">Tham quan</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-grid footer-contact mt-lg-0 mt-4">
                    <h3 class="mb-sm-4 mb-3">Liên lạc</h3>
                    <ul class="list-unstyled">
                        <li>
                            +84 866 634 302
                        </li>
                        <li>
                            <a href="mailto:akukcutu@gmail.com">akukcutu@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-grid">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#stats">Thống kê</a>
                        </li>
                        <li>
                            <a href="login.php">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="register.php">Đăng kí</a>
                        </li>
                        <li>
                            <a href="#contact">Liên hệ chúng tôi</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 footer-grid mt-lg-0 mt-4">
                    <div class="footer-logo">
                        <h2 class="text-lg-center text-center">
                            <a class="logo text-wh font-weight-bold" href="index.php">
                                Thuong Mai University</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copyright-TMU py-4">
        <div class="container">
            <div class="row">
                <!-- copyright -->
                <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/thuongmaiuniversity" class="rounded-circle text-light">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="https://tmu.edu.vn/" class="rounded-circle text-light">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rounded-circle text-light">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="pl-2">
                            <a href="#" class="rounded-circle text-light">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //social icons -->
            </div>
        </div>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <button class="move-top text-center" id='back-to-top'>
        <span class="fa fa-angle-double-up" aria-hidden="true"></span>
    </button>
    <!-- //move top icon -->

</body>

</html>