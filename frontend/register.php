<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
$error = '';
session_start();
//check user đã đăng nhập
if(isset($_SESSION['login_user'])) {
    header("location: index.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    //check email trùng
    $query = $dbConnection->query("SELECT * FROM users WHERE email = '$email'");
    $row = $query->fetch_array();
   
   // If result matched $email, table row must be 1 row. If it's empty => register.
    if(empty($row)) {
        $error = '';
        $sqlInsert = "INSERT INTO users (username,email,password) VALUES ('$userName','$email','$password')";
        if($dbConnection->query($sqlInsert)) {
            $_SESSION['login_user'] = $userName;
            $_SESSION['register_success'] = 'success';
            header("location: index.php");
        }else {
            echo "Error: ".$sqlInsert.'<br>' . $dbConnection->error;die;
        }
    }else {
        $error = "<small class='text-danger'>Email này đã được sử dụng! Hãy nhập lại.</small>";
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
            <!-- register  -->
            <div class="modal-body p-3 p-md-4 mt-md-2 mt-5">
                <h3 class="title-w3 text-center text-primary font-weight-bold mb-3">Đăng kí ngay</h3>
                <form action="register.php" method="post" id='register_form'>
                    <div class="form-group">
                        <label class="text-danger">Họ và tên</label>
                        <input type="text" class="form-control border-bottom rounded-0" placeholder="Enter your name" name="username" required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger">Email</label>
                        <input type="email" class="form-control border-bottom rounded-0" placeholder="loremipsum@email.com" name="email"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger">Mật khẩu</label>
                        <input type="password" class="form-control border-bottom rounded-0" placeholder="Enter password" id='password'
                            name="password" required>
                        <small class="d-none text-danger" id="notify-pw">*Mật khẩu phải chứa ít nhất 8 ký
                            tự</small>
                    </div>
                    <div class="form-group">
                        <label class="text-danger">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control border-bottom rounded-0" placeholder="Confirm password" id='confirm-pass'
                            required>
                            <small class="d-none text-danger" id="notify-cpw">*Mật khẩu không trùng khớp</small>
                    </div>
                    <?= $error ?>
                    <button type="submit" class="btn btn-primary my-3 mt-md-4 rounded-0 w-100" id="btn-register">Đăng ký</button>
                </form>
            </div>
            <!-- //register -->
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
    <script>
    $('#register_form').submit(function (e){    
        if(!validatePass() || !confirmPass()) {
            e.preventDefault();
        }
    });
    
    //
    function validatePass() {
        if ($('#password').val().length < 8) {
            $('#notify-pw').removeClass('d-none');
            setTimeout(function() {
                $('#notify-pw').addClass('d-none');
            }, 3000);
            return false;
        }
        return true;
    };
    function confirmPass() {
        if ($('#confirm-pass').val() != $('#password').val()) {
            $('#notify-cpw').removeClass('d-none');
            setTimeout(function() {
                $('#notify-cpw').addClass('d-none');
            }, 3000);
            return false;
        }
        return true;
    };
    </script>
</body>

</html>