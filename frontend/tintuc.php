<?php 
//tạo biến kết nối
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
//yêu cầu sesson
session_start();
//thực hiện truy xuất dữ liệu từ bảng post
$query = $dbConnection->query("SELECT * FROM `post`");
$dbConnection->close();
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Thuong Mai University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css'>
    <link href="css/tintuc.css" rel='stylesheet' type='text/css'>
    <link href="css/fontawesome/css/all.css" rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/main.js"></script>

    <style>
    #image {
        margin: 0px 250px;
    }

    #muc1 .tintuc {
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.363);
        padding: 10px;
        margin: 10px 0px;
        height: 160px;
    }

    #muc1 .tintuc a {
        text-decoration: none;
    }

    #muc3 .video1,
    #muc3 .video2,
    #muc3 .video3 {
        padding: 10px;
        margin: 25px 0px;
        width: 270px;
    }

    table {
        margin: 20px 0px;
    }

    td {
        padding: 10px;
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.363);
    }

    #muc4 {
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.363);
        margin: 10px 100px;
        padding: 15px;
        background-color: rgba(100, 148, 237, 0.027);
    }

    .img {
        background-color: rgba(189, 183, 107, 0.055);
        padding: 30px 0px;
    }
    </style>
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
                        <?php if(!isset($_SESSION['login_user'])): ?>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="login.php">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="register.php">Đăng kí</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button type="button" class="btn btn-transparent text-light dropdown-toggle"
                                    data-toggle="dropdown">
                                    Hi! <?= $_SESSION['login_user'] ?>.
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->
    <div class="container my-3">
        <p style="line-height: 40px; font-size: 20px; text-transform: uppercase; color:#1a3f5e; margin: 32px 0 0 0;">Tin
            nổi bật</p>
        <hr width="100%" size="3px" color="#428bca" />
        <div class="row px-0 mx-0">
            <!--use while loop to generate each post-->
            <?php while ($row = $query->fetch_array()) { ?>
                <a href="tintuc-detail.php?detail=<?= $row['id'] ?>" class="row px-0 mx-0 col-12 my-3 border">
                    <div class="col-3 px-0">
                        <img src="./img/<?= $row['avatar'] ?>" class="w-100">
                    </div>
                    <div class="col-9 px-3 d-flex align-items-center">
                        <div class="content">
                        <p><?= $row['title'] ?></p>
                        <i class="text-dark"><?= $row['updated_at'] ?></i>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
        <div id="muc2">
            <p
                style="line-height: 40px; font-size: 20px; text-transform: uppercase; color:#1a3f5e; margin: 32px 0 0 0;">
                SỰ KIỆN NHÀ TRƯỜNG</p>
            <hr width="100%" size="3px" color="#428bca" />
            <table>
                <tr>
                    <td>22-10-2021</td>
                    <td>Buổi lễ gặp mặt thân mật và trao Quyết định cho các đồng chí đến tuổi nghỉ hưu</td>
                </tr>
                <tr>
                    <td>18-10-2021</td>
                    <td>Hội nghị viên chức năm học 2021-2022</td>
                </tr>
                <tr>
                    <td>15-10-2021</td>
                    <td>Lễ khai giảng năm học mới 2021-2022</td>
                </tr>
                <tr>
                    <td>08-10-2021</td>
                    <td>Hội thảo Quốc tế "FDI TOÀN CẦU VÀ ỨNG BIẾN CỦA DOANH NGHIỆP FDI TẠI VIỆT NAM TRONG BỐI CẢNH MỚI"
                    </td>
                </tr>
                <tr>
                    <td>04-10-2021</td>
                    <td>Thông cáo báo chí Hội thảo Quốc tế "FDI TOÀN CẦU VÀ ỨNG BIẾN CỦA DOANH NGHIỆP FDI TẠI VIỆT NAM
                        TRONG BỐI CẢNH MỚI"</td>
                </tr>
                <tr>
                    <td>30-09-2021</td>
                    <td>Kế hoạch tổ chức các hoạt động tuyển truyền, giáo dục pháp luật về an toàn giao thông cho HSSV
                        năm 2021</td>
                </tr>
                <tr>
                    <td>28-09-2021</td>
                    <td>Hội thảo khoa học cấp trường: Đổi mới chương trình đào tạo ngành quản trị nhân lực trình độ giáo
                        dục đại học tại Trường đại học Thương Mại</td>
                </tr>
                <tr>
                    <td>19-09-2021</td>
                    <td>Thông tin xét tuyển hệ đại học VLVH Trường Đại học Thương mại</td>
                </tr>
                <tr>
                    <td>17-09-2021</td>
                    <td>Quyết định số 1353 /QĐ – ĐHTM-HĐTS v/v Điều chỉnh Đề án tuyển sinh trình độ đại học năm 2021
                    </td>
                </tr>
                <tr>
                    <td>15-09-2021</td>
                    <td>Thông báo v/v hỗ trợ truy cập nguồn học liệu số cho học trực tuyến</td>
                </tr>
                <tr>
                    <td>04-09-2021</td>
                    <td>Thông báo số 952/TB-ĐHTM v/v tăng cường thực hiện các biện pháp cấp bách phòng, chống dịch bệnh
                        COVID-19</td>
                </tr>
                <tr>
                    <td>01-09-2021</td>
                    <td>Thông báo v/v nhập học đối với thí sinh trúng tuyển theo phương thức xét tuyển kết hợp</td>
                </tr>
            </table>
        </div>
        <div id="muc3" class='row'>
            <p
                style="line-height: 40px; font-size: 20px; text-transform: uppercase; color:#1a3f5e; margin: 32px 0 0 0;">
                VIDEOS</p>
            <hr width="100%" size="3px" color="#428bca" />
            <div class="video1 col-6 col-sm-4">
                <a href="./img/video1.webm"><img src="./img/3.1.PNG" class="w-100 object-fit-cover"></a>
                <p>Lễ khai giảng 2021-2022 Trường đại học Thương Mại</p>
            </div>
            <div class="video2 col-6 col-sm-4">
                <a href="./img/video2.webm"><img src="./img/3.2.PNG" class="w-100 object-fit-cover"></a>
                <p>TMU - Thank you những chiến binh thầm nặng</p>
            </div>
            <div class="video3 col-6 col-sm-4">
                <a href="./img/video3.webm"><img src="./img/3.3.PNG" class="w-100 object-fit-cover"></a>
                <p>HTKHQT Phát triển & đồng bộ các giải pháp cho thách thức đương đại trong KDoanh & TMại QT </p>
            </div>
        </div>
        <p style="line-height: 40px; font-size: 20px; text-transform: uppercase; color:#1a3f5e; margin: 32px 0 0 0;">
            THÔNG BÁO</p>
        <hr width="100%" size="3px" color="#428bca" />
        <div id="muc4">
            <center>
                <img src="./img/4.1.PNG">
                <h4>THÔNG BÁO</h4>
                Danh sách trả bằng TN vào ngày 26/10/2021<br />
                <a
                    href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fdangky.tmu.edu.vn%2FDownload%2FDS%2520Nhan%2520bang%252026.10.2021%2520.xlsx&wdOrigin=BROWSELINK">Chi
                    tiết danh sách trả bằng tốt nghiệp ngày 26/10/2021</a>
            </center>
            Lưu ý:<br />
            - Sinh viên đến lấy bằng đúng thời gian được thông báo. Nếu sinh viên đến không đúng ngày, giờ trên lịch
            trường sẽ không trả bằng.<br />
            - Sinh viên chưa có tên trong danh sách trả bằng ngày 26/10/2021 theo dõi thông báo tiếp theo của Phòng
            QLĐT.<br />
            - Sinh viên tốt nghiệp vào tháng 10/2021 chưa có bằng tốt nghiệp. Sinh viên theo dõi thông báo mới của Phòng
            QLĐT. <br />
            <hr width="100%" /><br />
            <center>
                <h4>THÔNG BÁO</h4>
                Danh sách trả bằng TN vào ngày 21,22/10/2021<br />
                <a
                    href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fdangky.tmu.edu.vn%2FDownload%2FDS%2520Nhan%2520bang%252021.%252022.10.2021.xlsx&wdOrigin=BROWSELINK">Chi
                    tiết danh sách trả bằng tốt nghiệp ngày 21,22/10/2021</a>
            </center>
            Lưu ý:<br />
            - Sinh viên đến lấy bằng đúng thời gian được thông báo. Nếu sinh viên đến không đúng ngày, giờ trên lịch
            trường sẽ không trả bằng.<br />
            - Sinh viên chưa có tên trong danh sách trả bằng ngày 21, 22/10/2021 theo dõi thông báo tiếp theo của Phòng
            QLĐT.<br />
            - Sinh viên tốt nghiệp vào tháng 10/2021 chưa có bằng tốt nghiệp. Sinh viên theo dõi thông báo mới của Phòng
            QLĐT. <br />
            <hr width="100%" /><br />
            <center>
                <h4>THÔNG BÁO</h4>
                (V/v: xét miễn học các học phần Tiếng Anh và Tin học quản lý)<br />
                <a
                    href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fdangky.tmu.edu.vn%2FDownload%2FTB1122.14.10.2021%2520XET%2520MIEN%2520HOC%2520TA-TH.2021.doc&wdOrigin=BROWSELINK">Chi
                    tiết thông báo xét miễn các học phần tiếng anh và tin học quản lí</a>
            </center><br />
            <hr width="100%" /><br />
            <center>
                <h4>THÔNG BÁO</h4>
                Về việc giảng dạy học phần Giáo dục Quốc phòng - An ninh năm học 2020-2021<br />
                <a
                    href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fdangky.tmu.edu.vn%2FDownload%2FTHONG%2520BAO%2520GDQPAN%2520NAM%2520HOC%25202021_2022IN111021.docx&wdOrigin=BROWSELINK">Chi
                    tiết thông báo</a>
            </center>
        </div>
        <p style="line-height: 40px; font-size: 20px; text-transform: uppercase; color:#1a3f5e; margin: 30px 0 0 0;">Ảnh
            nổi bật</p>
        <hr width="100%" size="3px" color="#428bca" />
        <div class="img">
            <center>
                <img src="./img/11.PNG" height="200px" width="300px">
                <img src="./img/111.PNG" height="200px" width="300px">
                <img src="./img/1111.PNG" height="200px" width="300px">
                <img src="./img/222.PNG" height="200px" width="300px">
                <img src="./img/333.PNG" height="200px" width="300px">
                <img src="./img/2222.PNG" height="200px" width="300px">
                <img src="./img/4444.PNG" height="300px">
                <img src="./img/logodhtm.png" height="300px">
            </center>
        </div>
    </div>
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