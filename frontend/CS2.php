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
    <link href="css/csscoso2.css" rel='stylesheet' type='text/css' />
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
    <div class='container my-3 my-md-5'>
        <!-- ----------------------Course---------------- -->
        <section class="courses">
            <h1 style=" color:#719cfe;
                        text-align: center;
                         margin: 30px;"><strong>Những thông tin chính</strong></h1>
            <div class="course-items container row">
                <div class="course-item">
                    <h2>Thời gian</h2>
                    <p>Vào năm 2015,trường Đại học Thương Mại quyết định thành lập cơ sở 2 ở Hà Nam.</p>
                </div>
                <div class="course-item">
                    <h2>Địa chỉ</h2>
                    <p><b>Đại học Thương Mại cơ sở Hà Nam</b> có địa chỉ tại đường Lý Thường Kiệt, phường Lê Hồng Phong,
                        thành phố Phủ Lý, Hà Nam.</p>
                </div>
                <div class="course-item">
                    <h2>Diện tích</h2>
                    <p>Trường có tổng diện tích là 500.000m² bao gồm đầy đủ các cơ sở vật chất cho sinh viên học tập tại
                        đây.</p>
                </div>
            </div>
        </section>
        <!-- ----------------------Brand---------------- -->
        <section class="brand">
            <h1 style=" color:#719cfe;
            text-align: center;
            margin: 30px;"><strong>Hệ thống trường học</strong></h1>
            <div class="brand-items container row">
                <div class="brand-item">
                    <img src="./img/9.jpg" alt="">
                </div>
                <div class="brand-item">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="brand-item">
                    <img src="./img/11.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="gioithieu">
            <h1 style=" color:#719cfe;
            text-align: center;
            margin: 30px;"><strong>Đại học Thương Mại năm đầu học ở đâu?</strong></h1>
            <p>Có nhiều bạn sẽ thắc mắc: Vậy thì ngành nào sẽ học tại cơ sở Hà Nam? Và có học tập tại cơ sở Hà Nam 4 năm
                không?Câu trả lời là sẽ không có chuyên ngành nào phải học tập 4 năm ở cở sở Hà Nam cả.Đối tượng học tập
                tại Hà Nam sẽ là sinh viên năm nhất,tùy từng chuyên ngành mà Nhà trường sẽ quyết định xem các bạn học ở
                đâu.Các bạn sẽ chỉ học tập tại <strong>Đại học Thương Mại cơ sở Hà Nam</strong> trong 1 kỳ học. Hoặc
                cũng có chuyên ngành hoàn toàn không cần phải xuống Hà Nam. Điều này phụ thuộc vào kế hoạch của nhà
                trường.Các bạn cũng đừng quá lo lắng, bởi 1 kỳ học, sẽ chỉ có 4 – 5 chuyên ngành xuống Hà Nam học tập.
                Chất lượng giảng dạy và đào tạo không hề có sự khác biệt so với cơ sở tại Hà Nội. Tại Hà Nam nhà trường
                luôn đảm bảo ký túc xá cho sinh viên. Vậy nên các bạn không cần phải quá băn khoăn về chỗ ở khi xuống Hà
                Nam.</p>
            <h1 style=" color:#719cfe;
            text-align: center;
            margin: 30px;"><strong>Đại học Thương Mại học quân sự ở đâu?</strong></h1>
            <p>Tiếp nối phần thông tin đã đề cập ở trên, khi xuống Hà Nam học tập, sinh viên sẽ được tổ chức học phần
                Quốc phòng an ninh. Hay còn gọi là kỳ quân sự ngay tại Hà Nam. Đây là kỳ học quân sự mà sinh viên chính
                quy nào cũng phải học. Và ở bất kỳ trường Đại học nào các bạn cũng đều sẽ trải qua.</p>
            <div style="text-align:center"><img src="./img/quansu.jpg" width="600px" height="400"></div>
            <p>Trường ĐH Thương mại có 2 hình thức học quân sự. Thứ nhất là học trong năm học (học tại <strong>Đại học
                    Thương Mại cơ sở Hà Nam</strong>) và thứ hai là học vào thời gian hè. Trong năm học sẽ có 2 đợt đi
                học quân sự là vào kỳ I và kỳ II. Các bạn sinh viên năm nhất học các chuyên ngành được nhà trường sắp
                xếp sẽ đi học quân sự tại Hà Nam trong năm học. Sau đó quay về cơ sở Hà Nội học tiếp như bình thường
                toàn bộ thời gian còn lại. Còn các bạn học các chuyên ngành không được kể tên sẽ học tại Xuân Hòa hoặc
                Hà Nam vào học kỳ hè.<br>
            <div style="text-align:center"><img src="./img/quansu1.jpg" width="600px" height="400"></div>
            <h1 style=" color:#719cfe;
            text-align: center;
            margin: 30px;"><strong>Kế hoạch học tập Đại học Thương Mại cơ sở Hà Nam</strong></h1>
            <p> Sau khi kết thúc đợt tuyển sinh, Nhà trường sẽ có thông báo về kế hoạch học tập năm học mới cho sinh
                viên. Những sinh viên thuộc chuyên ngành được chỉ định xuống Hà Nam học tập. Sẽ được Nhà trường tổ chức
                di chuyển xuống Hà Nam ngay trong ngày nhập học. Và các bạn sẽ dự lễ Khai giảng tại <strong>Đại học
                    Thương Mại cơ sở Hà Nam</strong><br>
                Quá trình học quân sự tại Hà Nam gồm 5 tháng hết kì 1 hoặc kì 2. Chương trình học bao gồm các môn văn
                hóa và học quân sự. Cụ thể sáng học văn hóa thì chiều học quân sự và ngược lại. Thường thì quá trình học
                quân sự tại Hà Nam diễn ra khá dài kèm theo học các môn văn hóa. Do đó vấn đề học cả 2 khá nhẹ nhàng đối
                với sinh viên. Thời gian vui chơi hoạt động cũng khá thoải mái. Không bị gò bó hay phải trực đêm như học
                quân sự tại các địa điểm khác (Ví dụ: Xuân Hòa). Vì thế các bạn sinh viên thường nói “Hana (Hà Nam) đi
                dễ khó về” hay đặt cho cái tên “thiên đường Hana”.</p>
            <div style="text-align:center"><img src="./img/chuyenxehanam.jpg" width="600px" height="400"></div>
            <p>Xem thêm: <a href="./Các ngành học tại Đại học Thương Mại cơ sở Hà Nam 2 năm gần nhất.html">Các ngành học
                    tại Đại học Thương Mại cơ sở Hà Nam 2 năm gần nhất</a></p>
        </section>
        <!-- ----------------------facilities---------------- -->
        <section class="facilities">
            <h1 style=" color:#719cfe;
    text-align: center;
    margin: 30px;"><strong>Cơ Sở Vật Chất</strong></h1>
            <div class="facilities-items container row">
                <div class="facilities-item">
                    <img src="./img/khugiangduong.jpg" alt="">
                    <h1 style=" color:#ff7f62;
           text-align: center;"><b>KHU GIẢNG ĐƯỜNG</b></h1>
                    <p>Khu giảng đường với các phòng học đầy đủ vất chất, phục vụ tốt cho công tác học và dạy của nhà
                        trường. Có hai khu phòng: học quân sự và học văn hóa. Ngoài ra có một hội trường lớn cho đủ tất
                        cả các sinh viên có thể hoạt động văn nghệ và các buổi học ngoại khóa.</p>
                </div>
                <div class="facilities-item">
                    <img src="./img/kytucxadep.jpg" alt="">
                    <h1 style=" color:#ff7f62;
            text-align: center;"><b>KÝ TÚC XÁ</b></h1>
                    <p>Kí túc xá tại TMU cơ sở Hà Nam có 2 loại phòng.Phòng thường sẽ gồm 8 cái chiếu, 8 cái giường và
                        vệ sinh khép kín.Phòng VIP có thêm điều hòa, bình nóng lạnh, vệ sinh xịn sò hơn và đương nhiên
                        giá tiền sẽ có phần nhỉnh hơn một chút.</p>
                </div>
                <div class="facilities-item">
                    <img src="./img/comhana.jpg" alt="">
                    <h1 style=" color:#ff7f62;
            text-align: center;"><b>CANTEEN</b></h1>
                    <p>Canteen có đầy đủ các đồ dùng các nhân cho các bạn. “Vì thế nên khi đi các bạn không cần mua sẵn
                        các đồ dùng này ở nhà mang xuống. Cứ chuẩn bị tiền xuống đó có thể mua sắm sau.Đồ ở đó cũng
                        không đắt lắm nên các bạn không phải lo về vấn đề này.”</p>
                </div>
            </div>
        </section>
        <section class="TMU-bnrbtm py-5" id="about">
            <div class="container py-xl-5 py-lg-3">
                <h1 style=" color:#719cfe;
        text-align: center;
        margin: 30px;"><strong>Các hoạt động </strong></h1>
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="./img/cong-dhtm.jpg" alt="about" class="img-fluid mt-4" />
                    </div>
                    <div class="col-lg-6 pr-xl-5 mt-4">
                        <h3 class="title-sub mb-4">Hà Nam có rất nhiều hoạt động từ thể dục thể thao đến văn nghệ...
                        </h3>
                        <p class="sub-para">Những giải bóng đá, bóng chuyền cho những sinh viên mê thể thao;những trò
                            chơi dân gian như kéo co,nhảy bao bố hay đơn giản là những dòng confession, lời ngọt ngào từ
                            radio mỗi tối thổ lộ tâm tư, tình cảm giấu kín bấy lâu. </p>
                        <p class="sub-para pt-4 mt-4 border-top">Và một hoạt động lớn nhất không thể không kể đến ở Hana
                            đó là gala chào tân và cuối khóa</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="brand">
            <h1 style=" color:#719cfe;
        text-align: center;
        margin: 30px;"><strong>Một số hình ảnh chụp lại từ các hoạt động tại đây</strong></h1>
            <div class="brand-items container row">
                <div class="brand-item">
                    <h2 style=" color:#ff7f62;">Kéo co</h2>
                    <img src="./img/15.jpg" alt="">
                </div>
                <div class="brand-item">
                    <h2 style=" color:#ff7f62;">Đá bóng</h2>

                    <img src="./img/16.jpg" alt="">
                </div>
                <div class="brand-item">
                    <h2 style=" color:#ff7f62;">Tâm sự</h2>

                    <img src="./img/17.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- ----------------------testimony---------------- -->
        <!-- ----------------------facilities---------------- -->
        <section class="facilities">
            <h1 style=" color:#719cfe;
            text-align: center;
            margin: 30px;"><strong>Địa điểm du lịch vui chơi,ăn uống tại Hà Nam</strong></h1>
            <div class="facilities-items container row">
                <div class="facilities-item">
                    <img src="./img/chuatamchuc.jpg" alt="">
                    <h1 style=" color:#ff7f62;
                   text-align: center;"><b>CHÙA TAM CHÚC</b></h1>
                    <p>Còn điều gì thú vị hơn khi cùng những người bạn mới quen trải nghiệm “Vịnh Hạ Long” trên cạn.
                        Cùng chụp những tấm hình mà “mây mù giăng lối”.Đây chắc chắn là trải nghiệm rất thú vị với các
                        sinh viên TMU khi học tập tại Hà Nam<br>
                        Địa chỉ: Ba Sao, Kim Bảng, Hà Nam</p>
                </div>
                <div class="facilities-item">
                    <img src="./img/chobau.jpg" alt="">
                    <h1 style=" color:#ff7f62;
                    text-align: center;"><b>CHỢ BẦU</b></h1>
                    <p>Một khu chợ từ lâu được nhiều người biết đến bởi những nét độc đáo trầm tích qua hàng trăm năm
                        tuổi.Khu chợ này rộng đến mức mình cùng bạn mình đã bỏ cả buổi chiều để đi một vòng quanh chợ,
                        để thưởng thức hết những đặc sản Hà Nam như món chè, bánh cuốn, cháo sườn…</p>
                </div>
                <div class="facilities-item">
                    <img src="./img/hoa.jpg" alt="">
                    <h1 style=" color:#ff7f62;
                    text-align: center;"><b>VINCOM HÀ NAM,CÔNG VIÊN VÀ CÁC CON PHỐ</b></h1>
                    <p>Đi khoảng 1-2km về phía trung tâm,nơi đây xịn xò và tấp nập không kém gì Hà Nội,tha hồ đi mua
                        sớm,xem phim,vui chơi cả ngày mà không sợ chán cùng bạn bè.Vậy nên đừng lo học ở Hà Nam không
                        vui như trên Hà Nội nhé!</p>
                </div>
            </div>
        </section>
        </section>
        <section class="testimony">
            <h1 style=" color:#719cfe;
        text-align: center;
        margin: 30px;"><strong>Cảm nhận học viên</strong></h1>
            <div class="testimony-items container row">
                <div class="testimony-item">
                    <img src="./img/12.jpg" alt="">
                    <div class="testimony-text">
                        <p>Phòng học của chúng tôi được trang bị đầy đủ,tiện nghi,xứng đáng là nơi đào tạo kinh tế.</p>
                        <h1><b>Đoàn Đức Nam</b></h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimony-item">
                    <img src="./img/14.jpg" alt="">
                    <div class="testimony-text">
                        <p>Thầy cô nhiệt tình,chất lượng dạy tốt và rất vui,có thêm nhiều kỷ niệm đẹp khi học tập tại
                            đây.</p>
                        <h1><b>Phan Minh Phương</b></h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimony-item">
                    <img src="./img/13.jpg" alt="">
                    <div class="testimony-text">
                        <p>Canteen có nhiều món ăn ngon,ký túc xá rộng rãi và xung quanh có nhiều khu vui chơi rất thú
                            vị.</p>
                        <h1><b>Trần Văn Phương</b></h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </section>
    </div>
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