<?php
session_start();
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

    <!-- banner -->
    <div id="carousel-slider" class="carousel slide w-100 m-0 p-0 overflow-hidden" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active overflow-hidden">
                <img src="./img/slider1.jpg" alt="Cổng trường ĐHTM" class="object-fit-cover w-100">
            </div>
            <div class="carousel-item overflow-hidden">
                <img src="./img/slider2.jpg" alt="Tòa H" class="object-fit-cover w-100">
            </div>
            <div class="carousel-item overflow-hidden">
                <img src="./img/slider3.jpg" alt="Tòa V" class="object-fit-cover w-100">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#carousel-slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carousel-slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <!-- //banner -->

    <!-- banner bottom -->
    <section class="TMU-bnrbtm py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-md-5 mb-sm-4 mb-2 text-center font-weight-bold">Giới Thiệu</h3>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="./img/cong-dhtm.jpg" alt="about" class="img-fluid mt-4" />
                </div>
                <div class="col-lg-6 pr-xl-5 mt-4">
                    <h3 class="title-sub mb-4"> Đại Học Thương Mại nằm trong top những trường đào tạo kinh tế hàng đầu
                        tại miền Bắc. </h3>
                    <p class="sub-para">Thương Mại là một trong những trường đào tạo kinh tế tốt nhất ở Hà Nội. Các
                        ngành đào tạo Hót
                        nhất của trường trong những năm qua là: Marketing, Quản trị kinh doanh, Kế toán, Thương mại điện
                        tử….</p>
                    <p class="sub-para pt-4 mt-4 border-top">Khi nói về sự hoàn hảo của trường, một điểm sáng cần nói
                        đến là về các
                        hoạt động liên kết quốc tế của nhà trường..</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom -->

    <!-- services -->
    <div class="services py-5 position-relative" id="what">
        <div class="style-banner"></div>
        <div class="container py-xl-5 py-lg-3 position-relative" style="z-index: 2;">
            <h3 class="title-w3 mb-xl-5 mb-sm-4 mb-2 text-center text-wh font-weight-bold">Về chúng tôi?</h3>
            <div class="row w3pvtits-services-row text-center">
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fab fa-leanpub ser-icon"></span>
                        <h4 class="text-bl my-4">Quy mô đào tạo</h4>
                        <p class="text-left">Trường Đại học Thương mại là trường đại học đa ngành, hàng đầu trong các
                            lĩnh vực kinh tế thương mại tại Việt Nam.
                            Hiện nay, nhà trường đang đào tạo 26 chuyên ngành trình độ đại học, 7 chuyên ngành trình độ
                            thạc sĩ và 5 chuyên ngành trình độ tiến sĩ.</p>
                        <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read<span
                                class="fa fa-long-arrow-right ml-2"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-graduation-cap ser-icon"></span>
                        <h4 class="text-bl my-4">Chất lượng đào tạo </h4>
                        <p class="text-left">Ngày 30/03/2018, Trung tâm kiểm định chất lượng giáo dục (Đại học Quốc gia
                            Hà Nội) chứng nhận
                            Trường Đại học Thương mại đạt tiêu chuẩn chất lượng giáo dục do Bộ trưởng Bộ Giáo dục và Đào
                            tạo ban hành với tỷ lệ các tiêu chí đạt yêu cầu là 85,2%.</p>
                        <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read <span
                                class="fa fa-long-arrow-right ml-2"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-users ser-icon"></span>
                        <h4 class="text-bl my-4">Cơ sở đào tạo </h4>
                        <p class="text-left">Gồm 2 cơ sở: cơ sở chính đóng tại số 79 đường Hồ Tùng Mậu, phường Mai Dịch,
                            quận Cầu Giấy, thành phố Hà Nội.
                            Là một trong những đại học có cảnh quan và khuôn viên đẹp nhất trong các trường đóng tại Hà
                            Nội. Cơ sở 2 tại Lý Thường Kiệt (Hà Nam).</p>
                        <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read<span
                                class="fa fa-long-arrow-right ml-2"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- courses -->
    <section class="branches py-5" id="courses">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-center font-weight-bold">Tham quan</h3>
            <div class="row branches-position pt-lg-4">
                <div class="col-lg-3 col-sm-6 place-w3 mt-sm-0 mt-4 position-relative">
                    <!-- branch-img -->
                    <div class="team-img team-img-1 position-relative">
                        <div class="style-banner"></div>
                        <div class="team-content position-relative" style="z-index: 2;">
                            <h4 class="text-wh">Khuôn viên</h4>
                            <p class="team-meta">Thư viện và tòa nhà H</p>
                        </div>
                    </div>
                </div>
                <!-- / branch-img -->
                <div class="col-lg-3 col-sm-6 place-w3 mt-sm-0 mt-4 position-relative">
                    <!-- team-img -->
                    <div class="team-img team-img-2 position-relative">
                        <div class="style-banner"></div>
                        <div class="team-content position-relative" style="z-index: 2;">
                            <h4 class="text-wh">Canteen</h4>
                            <p class="team-meta">Rất thơ mộng</p>
                        </div>
                    </div>
                </div>
                <!-- /.branch-img -->
                <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4 position-relative">
                    <!-- team-img -->
                    <div class="team-img team-img-3 position-relative">
                        <div class="style-banner"></div>
                        <div class="team-content position-relative" style="z-index: 2;">
                            <h4 class="text-wh">Canteen</h4>
                            <p class="team-meta">ở 2 bên</p>
                        </div>
                    </div>
                </div>
                <!-- /.branch-img -->
                <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4 position-relative">
                    <!-- team-img -->
                    <div class="team-img team-img-4 position-relative">
                        <div class="style-banner"></div>
                        <div class="team-content position-relative" style="z-index: 2;">
                            <h4 class="text-wh">Canteen trên tầng 7</h4>
                            <p class="team-meta">View đẹp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //places -->

    <!-- stats section -->
    <div class="middlesection-TMU" id="stats">
        <div class="style-banner"></div>
        <div class="container py-xl-5 py-lg-3 position-relative" style="z-index: 2;">
            <h3 class="title-w3 font-weight-bolder w-100 text-center text-light">Thống kê</h3>
            <div class="row">
                <div class="col-12 row py-3">
                    <h4 class="counter col-2">440+</h4>
                    <p class="para-text-TMU text-light col-10 let">Số lượng giản viên,Đội ngũ giảng viên đến 31/12/2019
                        gồm 610 người trong đó giảng viên cơ hữu của nhà trường hiện nay là 440 người và giảng viên
                        thỉnh giảng gồm 170 người. Phần lớn cán bộ, giảng viên nhà trường đã và đang học tập,
                        nghiên cứu tại các nước và vùng lãnh thổ: Nga, Anh, Ấn Độ, Nhật Bản, Pháp, Hoa Kỳ, Đức, Thuỵ
                        Điển, Úc, Thái Lan, Indonesia, Đài Loan.</p>
                </div>
                <div class="col-12 row py-3 border-top border-bottom border-light">
                    <h4 class="counter col-2">20+</h4>
                    <p class="para-text-TMU text-light col-10 let">Số lượng gỉang đường,
                        Tòa nhà C , Tòa nhà D ,
                        Tòa nhà H (2 giảng đường 150 chỗ phục vụ học tập và hội thảo, 1 giảng đường hai tầng với 1.000
                        chỗ ngồi, phục vụ học tập và các chương trình, sự kiện), Tòa nhà G (5 tầng, các giảng đường từ
                        120-150 chỗ ngồi,
                        tầng 5 là các phòng máy tính),
                        Tòa nhà V (7 tầng, từ 60-120 chỗ ngồi). Ngoài các giảng đường, sinh viên có thể tự học, học nhóm
                        tại các phòng thảo luận (nhà C, nhà D và nhà V), mỗi phòng có 15-20 chỗ ngồi.</p>
                </div>
                <div class="col-12 row py-3">
                    <h4 class="counter col-2">12+</h4>
                    <p class="para-text-TMU text-light col-10 let">Tòa nhà</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //stats section -->

    <!-- events -->
    <section class="blog_TMU py-5" id="events">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-center font-weight-bold">Những Trang chính thức của nhà trường</h3>
            <div class="row mt-4">
                <div class="col-12 col-sm-6 col-lg-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header m-0">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.php">Facebook chính</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Mọi thông tin hay tin tức chi tiết sẽ được nhà trường đăng lên.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn"
                                href="https://www.facebook.com/thuongmaiuniversity">Thuong Mai university<span
                                    class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: TMUer</b>
                            </small>
                            <span>
                                March 26,2021
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.php">Website Chính.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Mọi thông tin về tuyển sinh, hay mọi thông tin sẽ được nhà trường cập
                                nhật</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="https://tmu.edu.vn/">Thuong Mai edu<span
                                    class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: TMUer</b>
                            </small>
                            <span>
                                March 26,2021
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header m-0">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.php">TikTok.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Những điều bổ ích sẽ được đăng lên và cập nhật liên tục</p>
                            <a class="service-btn mt-xl-5 mt-4 btn"
                                href="https://www.tiktok.com/@thuongmai.university?fbclid=IwAR3fCCeuG3tm-LAUBW2TiFbiWl8pwYpjsVQ89EvnrnPCflu1QfJ4nop6_eY">thuongmai.university<span
                                    class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: TMUer</b>
                            </small>
                            <span>
                                March 26,2021
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.php">instagram</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Kênh truyền thông và review về nhà trường.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn"
                                href="https://www.instagram.com/thuongmaiuniversity/?fbclid=IwAR0FW3uZp-qJB2wu2H1K7ILphblVrk9h5gYWs84GqIS2Rka3K66d5tcPlus">thuongmaiuniversity<span
                                    class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: TMUer</b>
                            </small>
                            <span>
                                March 26,2021
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.php">Youtube</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Kênh truyền thông và các sự kiện diễn ra.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn"
                                href="https://www.youtube.com/c/ThuongmaiUniversityOfficial">Thuongmai University
                                Official<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: TMUer</b>
                            </small>
                            <span>
                                March 26,2021
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //events -->

    <!-- gallery -->
    <div class="gallery-cont text-center pb-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-bl font-weight-bold">Những hình ảnh đẹp</h3>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="./img/cong-dhtm.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="./img/hoctap.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="./img/khuon-vien-tiep.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal4"><img src="./img/thoiluon.jpeg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="./img/thoiluon1.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal6"><img src="./img/thoiluon2.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal7"><img src="./img/thoiluon3.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal8"><img src="./img/thoiluon4.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal9"><img src="./img/thoiluon5.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <!-- gallery popups -->
            <!-- popup-->
            <div id="gal1" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/cong-dhtm.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/hoctap.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/khuon-vien-tiep.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/thoiluon.jpeg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/thoiluon1.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/thoiluon2.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal7" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/thoiluon3.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal8" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/thoiluon4.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal9" class="pop-overlay animate">
                <div class="popup">
                    <img src="./img/thoiluon5.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- //gallery popups -->
        </div>
    </div>
    <!-- //gallery -->

    <!-- testimonials -->
    <section class="clients py-5 position-relative" id="testi">
        <div class="style-banner"></div>
        <div class="container py-xl-5 py-lg-3 position-relative" style="z-index: 2;">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">TMUer sẽ được học gì</h3>
            <div class="feedback-info text-center">
                <p>Trường Đại học Thương mại là trường đại học đa ngành, hàng đầu trong các lĩnh vực kinh tế thương mại
                    tại Việt Nam.
                    Hiện nay, nhà trường đang đào tạo 26 chuyên ngành trình độ đại học, 7 chuyên ngành trình độ thạc sĩ
                    và 5 chuyên ngành trình độ tiến sĩ.</p>
                <img src="./img/logodhtm.png" alt=" " class="img-fluid w-50 mt-5">
                <h4 class="mt-4 text-wh font-weight-bold mb-4">Thuong Mai</h4>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

    <!-- contact-->
    <section class="contact py-5 position-relative" id="contact">
        <div class="style-banner"></div>
        <div class="container py-xl-5 py-lg-3 position-relative" style="z-index: 2;">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">Liên hệ chúng tôi</h3>
            <div class="contact_grid_right pt-4">
                <form action="contact.php" method="POST">
                    <div class="row contact_left_grid">
                        <div class="col-lg-6 con-left" data-aos="fade-up">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="subject" placeholder="Subject"
                                    required="">
                            </div>
                        </div>
                        <div class="col-lg-6 con-right" data-aos="fade-up">
                            <div class="form-group">
                                <textarea id="textarea" name='content' placeholder="Message" required=""></textarea>
                            </div>
                            <div class="sub-honey">
                                <button class="btn w-100" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->

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
    <?php if(isset($_SESSION['register_success'])) { ?>
        <script>
            alert('Đăng ký thành công!');
            <?php
                unset($_SESSION['register_success']);
            ?>
        </script>
    <?php } ?>
    <?php if(isset($_SESSION['add_contact'])) { ?>
        <script>
            alert('Gửi liên hệ thành công!');
            <?php
                unset($_SESSION['add_contact']);
            ?>
        </script>
    <?php } ?>
</body>

</html>