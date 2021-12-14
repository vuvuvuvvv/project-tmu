<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Thuong Mai University</title>
    <!-- Meta tag Keywords -->
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
                                    <button type="button" class="btn btn-transparent text-light dropdown-toggle" data-toggle="dropdown">
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

    <div class="container">
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">
                <o:p>&nbsp;</o:p>
            </span></p>
        <p style="text-align: center; margin: 0in 0in 0pt" class="MsoNormal" align="center"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial">
                    <font size="3">TH&Ocirc;NG TIN TUYỂN SINH ĐẠI HỌC CH&Iacute;NH QUY NĂM 2021<o:p></o:p>
                    </font>
                </span></b></p>
        <p style="text-align: center; margin: 0in 0in 0pt" class="MsoNormal" align="center"><span
                style="font-family: Arial; font-size: 10.5pt">*******<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">TRƯỜNG ĐẠI HỌC
                    THƯƠNG MẠI<o:p></o:p></span></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">M&atilde; trường:&nbsp;<b
                    style="mso-bidi-font-weight: normal">TMA</b>
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Trụ sở ch&iacute;nh:&nbsp;&nbsp;Số 79 đường Hồ T&ugrave;ng
                Mậu, phường Mai Dịch, quận Cầu Giấy, Tp. H&agrave; Nội<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Cơ sở H&agrave; Nam: Đường L&yacute; Thường Kiệt, phường
                L&ecirc; Hồng Phong, Tp.Phủ L&yacute;, tỉnh H&agrave; Nam<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Địa chỉ Cổng th&ocirc;ng tin điện tử của Trường:
                www.tmu.edu.vn<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">
                <o:p>&nbsp;</o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">1. Đối tượng
                    tuyển sinh:</span></b><span style="font-family: Arial; font-size: 10.5pt"> Th&iacute; sinh đ&atilde;
                tốt nghiệp THPT theo quy định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo. <o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">2. Phạm vi
                    tuyển sinh:</span></b><span style="font-family: Arial; font-size: 10.5pt"> Tuyển sinh trong cả nước.
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">3. Phương thức
                    tuyển sinh<o:p></o:p></span></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Phương thức
                        1:</span></i></b><span style="font-family: Arial; font-size: 10.5pt"> X&eacute;t tuyển thẳng, ưu
                ti&ecirc;n x&eacute;t tuyển theo quy định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o
                tạo v&agrave; quy định của Trường. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Phương thức
                        2:</span></i></b><span style="font-family: Arial; font-size: 10.5pt"> X&eacute;t tuyển kết hợp:
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2.1) Kết hợp chứng chỉ ngoại ngữ quốc tế/chứng chỉ khảo
                th&iacute; quốc tế (ACT, SAT) c&ograve;n hiệu lực đến ng&agrave;y x&eacute;t tuyển hoặc giải Nhất,
                Nh&igrave;, Ba trong kỳ thi chọn học sinh giỏi (bậc Trung học phổ th&ocirc;ng) cấp tỉnh/ th&agrave;nh
                phố trực thuộc Trung ương hoặc giải Khuyến kh&iacute;ch trong kỳ thi chọn học sinh giỏi cấp quốc gia với
                kết quả thi tốt nghiệp Trung học phổ th&ocirc;ng năm 2021, theo tổ hợp x&eacute;t tuyển tương ứng với
                ng&agrave;nh (chuy&ecirc;n ng&agrave;nh) đăng k&yacute; x&eacute;t tuyển, theo quy định của Trường (gọi
                tắt l&agrave; phương thức (2.1)). <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2.2) Kết hợp chứng chỉ ngoại ngữ quốc tế/chứng chỉ khảo
                th&iacute; quốc tế (ACT, SAT) c&ograve;n hiệu lực đến ng&agrave;y x&eacute;t tuyển hoặc giải Nhất,
                Nh&igrave;, Ba trong kỳ thi chọn học sinh giỏi (bậc Trung học phổ th&ocirc;ng) cấp tỉnh/ th&agrave;nh
                phố trực thuộc Trung ương hoặc giải Khuyến kh&iacute;ch trong kỳ thi chọn học sinh giỏi cấp quốc gia với
                kết quả học tập bậc Trung học phổ th&ocirc;ng (THPT), theo quy định của Trường (gọi tắt l&agrave; phương
                thức (2.2)). <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Phương thức
                        3:</span></i></b><span style="font-family: Arial; font-size: 10.5pt"> X&eacute;t tuyển dựa
                tr&ecirc;n kết quả Kỳ thi TNTHPT năm 2021, theo từng tổ hợp b&agrave;i thi/m&ocirc;n thi. <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">4. Chỉ
                    ti&ecirc;u tuyển sinh<br />
                    <img alt="" width="600" height="1209" src="./img/chitieuTM.jpg" /></span></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Tổ hợp
                        m&ocirc;n x&eacute;t tuyển<br />
                        <img alt="" width="600" height="1103" src="./img/tohopTM.jpg" /></span></i></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">(*)Tổ hợp
                    m&ocirc;n x&eacute;t tuyển: A00 (To&aacute;n, Vật l&yacute;, H&oacute;a học); A01 (To&aacute;n, Vật
                    L&yacute;, Tiếng Anh); D01 (To&aacute;n, Ngữ văn, Tiếng Anh); D03 (To&aacute;n, Ngữ văn, Tiếng
                    Ph&aacute;p); D04 (To&aacute;n, Ngữ văn, Tiếng Trung); D07 (To&aacute;n, H&oacute;a học, Tiếng Anh)
                    <o:p></o:p>
                </span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">(**) Tổng chỉ
                    ti&ecirc;u ph&acirc;n bổ cho phương thức kh&aacute;c tối đa l&agrave; 18% tổng chỉ ti&ecirc;u tuyển
                    sinh chung của Trường năm 2021, gồm: tối đa 3% cho phương thức x&eacute;t tuyển thẳng, ưu ti&ecirc;n
                    x&eacute;t tuyển (phương thức 1); 10% x&eacute;t tuyển theo phương thức (2.1); 5% x&eacute;t tuyển
                    theo phương thức (2.2). Chỉ ti&ecirc;u được ph&acirc;n bổ cho từng ng&agrave;nh (chuy&ecirc;n
                    ng&agrave;nh)/chương tr&igrave;nh đ&agrave;o tạo giao động từ 10% đến 25% chỉ ti&ecirc;u của
                    ng&agrave;nh (chuy&ecirc;n ng&agrave;nh)/chương tr&igrave;nh đ&agrave;o tạo đ&oacute;. <o:p></o:p>
                </span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">- Chỉ ti&ecirc;u
                    tuyển sinh theo c&aacute;c phương thức kh&aacute;c của từng ng&agrave;nh (chuy&ecirc;n
                    ng&agrave;nh)/chương tr&igrave;nh đ&agrave;o tạo c&oacute; thể được điều chuyển lẫn nhau khi một
                    trong c&aacute;c phương thức kh&aacute;c kh&ocirc;ng tuyển đủ chỉ ti&ecirc;u. <o:p></o:p></span></i>
        </p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">- Nếu x&eacute;t
                    tuyển theo phương thức kh&aacute;c kh&ocirc;ng đủ chỉ ti&ecirc;u, chỉ ti&ecirc;u c&ograve;n lại được
                    chuyển sang x&eacute;t theo kết quả thi TNTHPT năm 2021; <o:p></o:p></span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">(***) Chỉ
                    ti&ecirc;u tuyển sinh c&aacute;c chương tr&igrave;nh chất lượng cao được ph&acirc;n bổ như sau: 90%
                    x&eacute;t tuyển trực tiếp theo kết quả đăng k&yacute; của th&iacute; sinh, 10% chỉ ti&ecirc;u
                    x&eacute;t tuyển th&iacute; sinh đ&atilde; tr&uacute;ng tuyển v&agrave;o Trường c&oacute; nguyện
                    vọng đăng k&yacute; v&agrave;o học chương tr&igrave;nh chất lượng cao.<o:p></o:p></span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">5. Ngưỡng đảm
                    bảo chất lượng đầu v&agrave;o, điều kiện nhận hồ sơ đăng k&yacute; x&eacute;t tuyển<o:p></o:p>
                </span></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">5.1. Điều
                        kiện chung nhận đăng k&yacute; x&eacute;t tuyển</span></i></b><span
                style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Th&iacute; sinh thỏa m&atilde;n c&aacute;c điều kiện sau
                đ&acirc;y được đăng k&yacute; x&eacute;t tuyển (ĐKXT) v&agrave;o Trường Đại học Thương mại: <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(1) T&iacute;nh đến thời điểm x&eacute;t tuyển đ&atilde;
                tốt nghiệp THPT theo quy định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo; <o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2) Dự thi TNTHPT năm 2021; kh&ocirc;ng c&oacute;
                b&agrave;i thi/m&ocirc;n thi n&agrave;o trong tổ hợp x&eacute;t tuyển c&oacute; kết quả từ 1,0 (một)
                điểm trở xuống; đạt ngưỡng đảm bảo chất lượng đầu v&agrave;o &aacute;p dụng đối với từng phương thức
                x&eacute;t tuyển, theo quy định của Trường; <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(3) C&oacute; đủ sức khỏe để học tập theo quy định hiện
                h&agrave;nh.<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(4) Ngo&agrave;i quy định tr&ecirc;n: <o:p></o:p></span>
        </p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Đối với th&iacute; sinh đăng k&yacute; x&eacute;t tuyển
                v&agrave;o ng&agrave;nh Ng&ocirc;n ngữ Anh (TM18) phải đạt kết quả thi TNTHPT năm 2021 m&ocirc;n tiếng
                Anh từ 6,5 điểm trở l&ecirc;n; <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Đối với th&iacute; sinh đăng k&yacute; x&eacute;t tuyển
                v&agrave;o c&aacute;c chương tr&igrave;nh đ&agrave;o tạo chất lượng cao (TM08, TM15) phải đạt kết quả
                thi TNTHPT năm 2021 m&ocirc;n tiếng Anh từ 6,0 điểm trở l&ecirc;n; <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Đối với th&iacute; sinh đăng k&yacute; x&eacute;t tuyển
                v&agrave;o c&aacute;c chương tr&igrave;nh đ&agrave;o tạo theo cơ chế đặc th&ugrave; ng&agrave;nh Quản
                trị kh&aacute;ch sạn (TM24) v&agrave; ng&agrave;nh Quản trị dịch vụ du lịch v&agrave; lữ h&agrave;nh
                (TM25) phải đạt kết quả thi TNTHPT năm 2021 m&ocirc;n tiếng Anh từ 5,5 điểm trở l&ecirc;n; <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Th&iacute; sinh đăng k&yacute; x&eacute;t tuyển theo
                phương thức x&eacute;t tuyển kết hợp v&agrave;o c&aacute;c ng&agrave;nh c&oacute; điều kiện điểm
                b&agrave;i thi m&ocirc;n tiếng Anh, được thay thế điều kiện điểm b&agrave;i thi m&ocirc;n Tiếng Anh bằng
                chứng chỉ ngoại ngữ quốc tế m&ocirc;n Tiếng Anh c&ograve;n hiệu lực đến ng&agrave;y x&eacute;t tuyển
                hoặc giải m&ocirc;n Tiếng Anh trong kỳ thi chọn học sinh giỏi cấp quốc gia hoặc cấp tỉnh/ th&agrave;nh
                phố trực thuộc Trung ương (nếu c&oacute;). Điểm b&agrave;i thi m&ocirc;n Tiếng Anh chỉ được sử dụng khi
                t&iacute;nh tổng điểm x&eacute;t tuyển theo tổ hợp D01/ D07/ A01 <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Trường kh&ocirc;ng sử dụng kết quả miễn thi b&agrave;i
                thi ngoại ngữ v&agrave; điểm thi c&aacute;c m&ocirc;n thi được bảo lưu theo Quy chế thi TNTHPT trong
                việc x&eacute;t tuyển v&agrave;o đại học ch&iacute;nh quy năm 2021. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">5.2. Ngưỡng
                        đảm bảo chất lượng đầu v&agrave;o, điều kiện nhận đăng k&yacute; x&eacute;t tuyển v&agrave;
                        nguy&ecirc;n tắc x&eacute;t tuyển theo từng phương thức x&eacute;t tuyển <o:p></o:p>
                    </span></i></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">5.2.1.
                        Phương thức 1:</span></i></b><span style="font-family: Arial; font-size: 10.5pt"> X&eacute;t
                tuyển thẳng v&agrave; ưu ti&ecirc;n x&eacute;t tuyển theo quy định hiện h&agrave;nh của Bộ Gi&aacute;o
                dục v&agrave; Đ&agrave;o tạo v&agrave; quy định của Trường (Quy định x&eacute;t tuyển thẳng, ưu
                ti&ecirc;n x&eacute;t tuyển được Trường ban h&agrave;nh ngay sau khi Bộ GD&amp;ĐT ban h&agrave;nh Quy
                chế tuyển sinh tr&igrave;nh độ đại học; tuyển sinh tr&igrave;nh độ cao đẳng ng&agrave;nh Gi&aacute;o dục
                Mầm non năm 2021. <span style="mso-spacerun: yes">&nbsp;</span>
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">5.2.2.
                        Phương thức 2:</span></i></b><span style="font-family: Arial; font-size: 10.5pt"> X&eacute;t
                tuyển kết hợp <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">a. Điều kiện
                    nhận đăng k&yacute; x&eacute;t tuyển v&agrave; ngưỡng đảm bảo chất lượng đầu v&agrave;o <o:p></o:p>
                </span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Th&iacute; sinh được đăng k&yacute; x&eacute;t tuyển theo
                phương thức x&eacute;t tuyển kết hợp v&agrave;o c&aacute;c ng&agrave;nh (chuy&ecirc;n ng&agrave;nh)
                ph&ugrave; hợp của Trường Đại học Thương mại khi thỏa m&atilde;n đồng thời c&aacute;c điều kiện sau:
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(1). Thỏa m&atilde;n c&aacute;c điều kiện quy định tại mục
                5.1;<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2). Tốt nghiệp THPT năm 2021 (đối với th&iacute; sinh
                đăng k&yacute; x&eacute;t tuyển theo phương thức (2.2))<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(3). C&oacute; chứng chỉ chứng chỉ ngoại ngữ quốc tế/chứng
                chỉ khảo th&iacute; quốc tế c&ograve;n hiệu lực đến ng&agrave;y x&eacute;t tuyển hoặc đạt giải Khuyến
                kh&iacute;ch trong kỳ thi chọn học sinh giỏi quốc gia hoặc đạt giải Nhất, Nh&igrave;, Ba (bậc Trung học
                phổ th&ocirc;ng) trong kỳ thi chọn học sinh giỏi cấp tỉnh/th&agrave;nh phố trực thuộc Trung ương,
                c&oacute; kết quả như sau:<br />
            </span><span style="font-family: Arial; font-size: 10.5pt">
                <o:p><img alt="" width="600" height="498" src="./img/chungchiTM.jpg" />&nbsp;</o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(4). Đăng k&yacute; x&eacute;t tuyển theo một trong
                c&aacute;c tổ hợp x&eacute;t tuyển Nh&agrave; trường sử dụng để x&eacute;t tuyển ng&agrave;nh
                (chuy&ecirc;n ng&agrave;nh)/chương tr&igrave;nh đ&agrave;o tạo m&agrave; th&iacute; sinh đăng k&yacute;
                x&eacute;t tuyển v&agrave; phải đạt ngưỡng đảm bảo chất lượng đầu v&agrave;o, cụ thể như sau: <o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Phương thức x&eacute;t tuyển (2.1): đạt tổng điểm
                x&eacute;t tuyển theo tổ hợp đăng k&yacute; x&eacute;t tuyển v&agrave;o Trường, năm 2021 từ <b
                    style="mso-bidi-font-weight: normal">18 điểm</b> trở l&ecirc;n (bao gồm tổng điểm 3 b&agrave;i
                thi/m&ocirc;n thi TNTHPT năm 2021 v&agrave; điểm ưu ti&ecirc;n đối tượng, khu vực tuyển sinh theo Quy
                định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo, cụ thể: mức ch&ecirc;nh lệch điểm
                tr&uacute;ng tuyển giữa hai nh&oacute;m đối tượng kế tiếp l&agrave; 1,0 điểm, giữa hai khu vực kế tiếp
                l&agrave; 0,25 điểm, theo thang điểm 10, kh&ocirc;ng nh&acirc;n hệ số). <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Lưu &yacute;:
                    Th&iacute; sinh c&oacute; chứng chỉ ngoại ngữ quốc tế c&ograve;n hiệu lực đến ng&agrave;y x&eacute;t
                    tuyển, nếu đăng k&yacute; x&eacute;t tuyển kết hợp theo phương thức (2.1), sử dụng một trong
                    c&aacute;c tổ hợp x&eacute;t tuyển D01, D03, D04, D07, A01 phải đăng k&yacute; dự thi m&ocirc;n
                    ngoại ngữ tương ứng trong kỳ thi TNTHPT năm 2021</span></i><span
                style="font-family: Arial; font-size: 10.5pt">. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Phương thức x&eacute;t tuyển (2.2), th&iacute; sinh phải
                đạt đồng thời c&aacute;c điều kiện sau:<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">+ Điểm trung b&igrave;nh chung học tập (cả năm) từng năm
                lớp 10,11,12 đạt từ 7,0 trở l&ecirc;n (trong đ&oacute; điểm trung b&igrave;nh học tập (cả năm) từng
                m&ocirc;n trong tổ hợp x&eacute;t tuyển phải đạt từ 7.0 trở l&ecirc;n). <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">+ Điểm trung b&igrave;nh cộng học tập 3 m&ocirc;n trong tổ
                hợp x&eacute;t tuyển của từng năm 10, 11, 12 phải đạt từ 7.5 trở l&ecirc;n <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(5). Th&iacute; sinh chỉ được đăng k&yacute; x&eacute;t
                tuyển tối đa 3 nguyện vọng cho mỗi phương thức x&eacute;t tuyển kết hợp. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">b. Nguy&ecirc;n
                    tắc x&eacute;t tuyển <o:p></o:p></span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(1) Trường x&eacute;t tuyển dựa tr&ecirc;n kết quả/điểm
                chứng chỉ ngoại ngữ quốc tế/chứng chỉ khảo th&iacute; quốc tế hoặc giải học sinh giỏi theo mức độ ưu
                ti&ecirc;n từ cao đến thấp cho đến khi tuyển đủ chỉ ti&ecirc;u. Th&iacute; sinh tr&uacute;ng tuyển
                v&agrave;o từng ng&agrave;nh (chuy&ecirc;n ng&agrave;nh)/chương tr&igrave;nh đ&agrave;o tạo l&agrave;
                những th&iacute; sinh đạt kết quả/điểm chứng chỉ ngoại ngữ quốc tế/chứng chỉ khảo th&iacute; quốc tế
                hoặc giải học sinh giỏi tại mức độ ưu ti&ecirc;n nhất định, theo quy định của Trường. <o:p></o:p></span>
        </p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Mức độ ưu ti&ecirc;n của kết quả/điểm chứng chỉ chứng chỉ
                ngoại ngữ quốc tế/chứng chỉ khảo th&iacute; quốc tế, giải học sinh giỏi được x&aacute;c định như sau:
                <o:p></o:p>
            </span></p>
        <p style="text-align: center; margin: 0in 0in 0pt" class="MsoNormal" align="center"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Bảng x&aacute;c
                    định mức độ ưu ti&ecirc;n của kết quả/điểm chứng chỉ quốc tế, giải học sinh giỏi<br />
                </span></i><span style="font-family: Arial; font-size: 10.5pt">
                <o:p><img alt="" width="600" height="427" src="./img/mucuutienTM.jpg" />&nbsp;</o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2) Trong trường hợp tại mức ưu ti&ecirc;n nhất định, số
                lượng th&iacute; sinh tr&uacute;ng tuyển nhiều hơn chỉ ti&ecirc;u được tuyển, Trường sử dụng tổng điểm
                x&eacute;t tuyển theo tổ hợp x&eacute;t tuyển để x&eacute;t tuyển từ cao đến thấp cho đến khi đủ chỉ
                ti&ecirc;u. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(3) Sau khi x&eacute;t tuyển theo tổng điểm x&eacute;t
                tuyển theo tổ hợp x&eacute;t tuyển, nếu số th&iacute; sinh tr&uacute;ng tuyển vẫn c&ograve;n cao hơn so
                với chỉ ti&ecirc;u, Trường sẽ ưu ti&ecirc;n th&iacute; sinh c&oacute; nguyện vọng cao hơn theo quy định
                của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Trong trường hợp
                    th&iacute; sinh đăng k&yacute; x&eacute;t tuyển theo cả hai phương thức (2.1) v&agrave; (2.2),
                    Trường sẽ ưu ti&ecirc;n x&eacute;t tuyển theo phương thức (2.1) trước. Nếu th&iacute; sinh đ&atilde;
                    tr&uacute;ng tuyển v&agrave;o ng&agrave;nh (chuy&ecirc;n ng&agrave;nh)/chương tr&igrave;nh
                    đ&agrave;o tạo theo phương thức x&eacute;t tuyển (2.1) sẽ dừng x&eacute;t tuyển theo phương thức
                    (2.2). <o:p></o:p></span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">5.2.3.
                        Phương thức 3:</span></i></b><span style="font-family: Arial; font-size: 10.5pt"> X&eacute;t
                tuyển dựa tr&ecirc;n kết quả Kỳ thi TNTHPT năm 2021 theo từng tổ hợp b&agrave;i thi/m&ocirc;n thi <o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">a. Điều kiện
                    nhận đăng k&yacute; x&eacute;t tuyển v&agrave; ngưỡng đảm bảo chất lượng đầu v&agrave;o <o:p></o:p>
                </span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Th&iacute; sinh thỏa m&atilde;n đồng thời c&aacute;c điều
                kiện sau được đăng k&yacute; x&eacute;t tuyển theo phương thức x&eacute;t tuyển dựa tr&ecirc;n kết quả
                thi TNTHPT v&agrave;o c&aacute;c ng&agrave;nh (chuy&ecirc;n ng&agrave;nh) ph&ugrave; hợp của Trường:
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(1) Đạt ngưỡng đảm bảo chất lượng đầu v&agrave;o theo tổ
                hợp đăng k&yacute; x&eacute;t tuyển năm 2021 l&agrave; <span style="font-size: large;"><span
                        style="color: rgb(255, 0, 0);"><b style="mso-bidi-font-weight: normal">18
                            điểm</b></span></span><b style="mso-bidi-font-weight: normal"> </b>(bao gồm tổng điểm 3
                b&agrave;i thi/m&ocirc;n thi TNTHPT năm 2021 v&agrave; điểm ưu ti&ecirc;n đối tượng, khu vực) <o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2) Thỏa m&atilde;n c&aacute;c điều kiện quy định tại mục
                5.1; <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><i
                style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">b. Nguy&ecirc;n
                    tắc x&eacute;t tuyển<o:p></o:p></span></i></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(1) Trường x&eacute;t tuyển theo quy định tại Quy chế
                tuyển sinh tr&igrave;nh độ đại học; tuyển sinh tr&igrave;nh độ cao đẳng ng&agrave;nh Gi&aacute;o dục Mầm
                non, năm 2021 của Bộ trưởng Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo v&agrave; quy định của Trường;
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(2) Th&iacute; sinh tr&uacute;ng tuyển l&agrave; những
                th&iacute; sinh đạt mức điểm x&eacute;t tuyển theo quy định của Trường theo từng tổ hợp m&ocirc;n
                x&eacute;t tuyển v&agrave; theo từng ng&agrave;nh/chuy&ecirc;n ng&agrave;nh đ&agrave;o tạo, theo
                nguy&ecirc;n tắc lấy tổng điểm x&eacute;t tuyển theo tổ hợp x&eacute;t tuyển từ điểm cao đến thấp cho
                đến khi tuyển đủ chỉ ti&ecirc;u. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">(3) Trong trường hợp tại mức điểm x&eacute;t tuyển nhất
                định, số lượng th&iacute; sinh tr&uacute;ng tuyển nhiều hơn chỉ ti&ecirc;u được tuyển, Trường sử dụng
                c&aacute;c ti&ecirc;u ch&iacute; phụ để x&eacute;t tuyển. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Ti&ecirc;u
                        ch&iacute; phụ như sau:<o:p></o:p></span></i></b></p>
        <table
            style="border-bottom: medium none; border-left: medium none; border-collapse: collapse; border-top: medium none; border-right: medium none; mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 480; mso-padding-alt: 0in 5.4pt 0in 5.4pt; mso-border-insideh: .5pt solid windowtext; mso-border-insidev: .5pt solid windowtext"
            class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0">
            <tbody>
                <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes">
                    <td style="border-bottom: windowtext 1pt solid; border-left: windowtext 1pt solid; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 3.7in; padding-right: 5.4pt; border-top: windowtext 1pt solid; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt"
                        valign="top" width="355">
                        <p style="text-align: center; margin: 0in 0in 0pt" class="MsoNormal" align="center"><b
                                style="mso-bidi-font-weight: normal"><span
                                    style="font-family: Arial; font-size: 10.5pt">Ng&agrave;nh /chương tr&igrave;nh
                                    đ&agrave;o tạo<o:p></o:p></span></b></p>
                    </td>
                    <td style="border-bottom: windowtext 1pt solid; border-left: #f0f0f0; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 2.45in; padding-right: 5.4pt; border-top: windowtext 1pt solid; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt"
                        valign="top" width="235">
                        <p style="text-align: center; margin: 0in 0in 0pt" class="MsoNormal" align="center"><b
                                style="mso-bidi-font-weight: normal"><span
                                    style="font-family: Arial; font-size: 10.5pt">Ti&ecirc;u ch&iacute; phụ<o:p></o:p>
                                </span></b></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow: 1">
                    <td style="border-bottom: windowtext 1pt solid; border-left: windowtext 1pt solid; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 3.7in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="355">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">1. Ng&ocirc;n ngữ Anh v&agrave; c&aacute;c
                                chương tr&igrave;nh chất lượng cao<o:p></o:p></span></p>
                    </td>
                    <td style="border-bottom: windowtext 1pt solid; border-left: #f0f0f0; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 2.45in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="235">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">Điểm b&agrave;i thi <b
                                    style="mso-bidi-font-weight: normal">m&ocirc;n</b> <b
                                    style="mso-bidi-font-weight: normal">Tiếng Anh</b>
                                <o:p></o:p>
                            </span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow: 2">
                    <td style="border-bottom: windowtext 1pt solid; border-left: windowtext 1pt solid; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 6.15in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="590" colspan="2">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">2. C&aacute;c ng&agrave;nh c&ograve;n lại
                                của chương tr&igrave;nh đại tr&agrave;, chương tr&igrave;nh đ&agrave;o tạo theo cơ chế
                                đặc th&ugrave;<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow: 3">
                    <td style="border-bottom: windowtext 1pt solid; border-left: windowtext 1pt solid; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 3.7in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="355">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">2.1 - X&eacute;t theo tổ hợp A00,A01, D01,
                                D07<o:p></o:p></span></p>
                    </td>
                    <td style="border-bottom: windowtext 1pt solid; border-left: #f0f0f0; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 2.45in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="235">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">Điểm b&agrave;i thi <b
                                    style="mso-bidi-font-weight: normal">m&ocirc;n To&aacute;n</b>
                                <o:p></o:p>
                            </span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow: 4">
                    <td style="border-bottom: windowtext 1pt solid; border-left: windowtext 1pt solid; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 3.7in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="355">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">2.2 - X&eacute;t theo tổ hợp D03<o:p>
                                </o:p></span></p>
                    </td>
                    <td style="border-bottom: windowtext 1pt solid; border-left: #f0f0f0; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 2.45in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="235">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">Điểm b&agrave;i thi <b
                                    style="mso-bidi-font-weight: normal">m&ocirc;n Tiếng Ph&aacute;p</b>
                                <o:p></o:p>
                            </span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow: 5; mso-yfti-lastrow: yes">
                    <td style="border-bottom: windowtext 1pt solid; border-left: windowtext 1pt solid; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 3.7in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="355">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">2.3- X&eacute;t theo tổ hợp D04<o:p></o:p>
                            </span></p>
                    </td>
                    <td style="border-bottom: windowtext 1pt solid; border-left: #f0f0f0; padding-bottom: 0in; background-color: transparent; padding-left: 5.4pt; width: 2.45in; padding-right: 5.4pt; border-top: #f0f0f0; border-right: windowtext 1pt solid; padding-top: 0in; mso-border-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-top-alt: solid windowtext .5pt"
                        valign="top" width="235">
                        <p style="margin: 0in 0in 0pt" class="MsoNormal"><span
                                style="font-family: Arial; font-size: 10.5pt">Điểm b&agrave;i thi <b
                                    style="mso-bidi-font-weight: normal">m&ocirc;n Tiếng Trung</b>
                                <o:p></o:p>
                            </span></p>
                    </td>
                </tr>
            </tbody>

        </table>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">Nguy&ecirc;n
                        tắc x&eacute;t tuyển theo ti&ecirc;u ch&iacute; phụ</span></i></b><span
                style="font-family: Arial; font-size: 10.5pt">: <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Sau khi sử dụng ti&ecirc;u ch&iacute; phụ, nếu số
                th&iacute; sinh tr&uacute;ng tuyển vẫn c&ograve;n cao hơn so với chỉ ti&ecirc;u, Trường sẽ ưu ti&ecirc;n
                th&iacute; sinh c&oacute; nguyện vọng cao hơn theo quy định của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o
                tạo. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">6. C&aacute;c
                    th&ocirc;ng tin cần thiết kh&aacute;c để th&iacute; sinh ĐKXT v&agrave;o c&aacute;c ng&agrave;nh của
                    Trường <o:p></o:p></span></b></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Kh&ocirc;ng c&oacute; ch&ecirc;nh lệch điểm tr&uacute;ng
                tuyển giữa c&aacute;c tổ hợp x&eacute;t tuyển theo c&ugrave;ng một phương thức x&eacute;t tuyển. <o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">7. Tổ chức
                    tuyển sinh</span></b><span style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">7.1. Tổ chức
                        x&eacute;t tuyển thẳng, ưu ti&ecirc;n x&eacute;t tuyển</span></i></b><span
                style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Hồ sơ đăng k&yacute; x&eacute;t tuyển; thời gian,
                h&igrave;nh thức nhận ĐKXT, c&ocirc;ng bố kết quả x&eacute;t tuyển được thực hiện theo c&aacute;c quy
                định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo v&agrave; quy định của Trường (Quy
                định x&eacute;t tuyển thẳng, ưu ti&ecirc;n x&eacute;t tuyển được Trường ban h&agrave;nh ngay sau khi Bộ
                GD&amp;ĐT ban h&agrave;nh Quy chế tuyển sinh tr&igrave;nh độ đại học; tuyển sinh tr&igrave;nh độ cao
                đẳng ng&agrave;nh Gi&aacute;o dục Mầm non năm 2021, <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">7.2. Tổ chức
                        x&eacute;t tuyển kết hợp</span></i></b><span style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">7.2.1. Hồ sơ
                        đăng k&yacute; x&eacute;t tuyển, gồm</span></i></b><span
                style="font-family: Arial; font-size: 10.5pt">: <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">a) Phiếu đăng k&yacute; x&eacute;t tuyển kết hợp;<o:p>
                </o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">b) Bản sao Giấy chứng nhận đoạt giải kỳ thi chọn học sinh
                giỏi quốc gia/học sinh giỏi cấp tỉnh/th&agrave;nh phố trực thuộc Trung ương/chứng chỉ ngoại ngữ quốc tế
                c&ograve;n hiệu lực đến thời điểm x&eacute;t tuyển; <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">c) Hai phong b&igrave; ghi r&otilde; họ t&ecirc;n, địa chỉ
                li&ecirc;n lạc, số điện thoại của th&iacute; sinh; hai ảnh ch&acirc;n dung cỡ 4 x 6; <o:p></o:p></span>
        </p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">d) Bản sao hộ khẩu thường tr&uacute; (đối với th&iacute;
                sinh thuộc đối tượng được cộng điểm ưu ti&ecirc;n khu vực); chứng nhận đối tượng ưu ti&ecirc;n theo quy
                định của Quy chế tuyển sinh hiện h&agrave;nh (nếu c&oacute;) <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">e) Bản sao Chứng nhận kết quả thi TNTHPT 2021 <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">f) Bản sao Chứng minh thư nh&acirc;n d&acirc;n hoặc Thẻ
                căn cước c&ocirc;ng d&acirc;n <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">g) Bản sao Học bạ THPT (đối với th&iacute; sinh thuộc đối
                tượng được cộng điểm ưu ti&ecirc;n khu vực, đối tượng hoặc th&iacute; sinh đăng k&yacute; x&eacute;t
                tuyển theo phương thức x&eacute;t tuyển (2.2)) <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">h) Lệ ph&iacute; x&eacute;t tuyển kết hợp l&agrave;
                25.000đ /nguyện vọng/th&iacute; sinh, Th&iacute; sinh nộp bằng h&igrave;nh thức chuyển khoản theo
                th&ocirc;ng tin sau: <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Đơn vị thụ hưởng: Trường Đại học Thương mại <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Số TK: 21510001866884 &ndash; Ng&acirc;n h&agrave;ng
                TMCP Đầu tư v&agrave; Ph&aacute;t triển Việt Nam (BIDV), chi nh&aacute;nh Cầu Giấy <o:p></o:p></span>
        </p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Th&iacute; sinh nộp Bi&ecirc;n lai (x&aacute;c nhận
                chuyển tiền) c&ugrave;ng hồ sơ. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Lưu &yacute;: Bản sao l&agrave; bản photocopy c&oacute;
                x&aacute;c nhận &ldquo;sao y bản ch&iacute;nh&rdquo; của cơ quan c&oacute; thẩm quyền </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt"><b style="mso-bidi-font-weight: normal"><i
                        style="mso-bidi-font-style: normal">7.2.2. Đăng k&yacute; x&eacute;t tuyển</i></b>
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Trường sẽ c&oacute; Th&ocirc;ng b&aacute;o cụ thể
                v&agrave; đăng tải c&ocirc;ng khai thời gian, phương thức đăng k&yacute; x&eacute;t tuyển v&agrave;
                c&aacute;c th&ocirc;ng tin kh&aacute;c li&ecirc;n quan đến phương thức x&eacute;t tuyển kết hợp
                tr&ecirc;n Cổng th&ocirc;ng tin điện tử của Trường: www.tmu.edu.vn ngay sau khi Bộ GD&amp;ĐT ban
                h&agrave;nh Quy chế tuyển sinh tr&igrave;nh độ đại học; tuyển sinh tr&igrave;nh độ cao đẳng ng&agrave;nh
                Gi&aacute;o dục Mầm non năm 2021. </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt"><b style="mso-bidi-font-weight: normal"><i
                        style="mso-bidi-font-style: normal">7.2.3. C&ocirc;ng bố kết quả x&eacute;t tuyển</i></b>
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Thực hiện theo quy định v&agrave; kế hoạch chung của Bộ
                GD&amp;ĐT v&agrave; quy định của Trường. Trường sẽ c&oacute; Th&ocirc;ng b&aacute;o cụ thể v&agrave;
                đăng tải c&ocirc;ng khai tr&ecirc;n Cổng th&ocirc;ng tin điện tử của Trường: www.tmu.edu.vn ngay sau khi
                Bộ ban h&agrave;nh Quy chế tuyển sinh tr&igrave;nh độ đại học; tuyển sinh tr&igrave;nh độ cao đẳng
                ng&agrave;nh Gi&aacute;o dục Mầm non năm 2021. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b style="mso-bidi-font-weight: normal"><i
                    style="mso-bidi-font-style: normal"><span style="font-family: Arial; font-size: 10.5pt">7.3. Tổ chức
                        x&eacute;t tuyển dựa tr&ecirc;n kết quả thi TNTHPT năm 2021</span></i></b><span
                style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Thời gian, h&igrave;nh thức nhận ĐKXT theo c&aacute;c quy
                định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">8. Ch&iacute;nh
                    s&aacute;ch ưu ti&ecirc;n</span></b><span style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">Trường thực hiện x&eacute;t tuyển thẳng, ưu ti&ecirc;n
                x&eacute;t tuyển theo c&aacute;c quy định hiện h&agrave;nh của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o
                tạo v&agrave; quy định của Trường (Quy định x&eacute;t tuyển thẳng, ưu ti&ecirc;n x&eacute;t tuyển được
                Trường ban h&agrave;nh ngay sau khi Bộ GD&amp;ĐT ban h&agrave;nh Quy chế tuyển sinh tr&igrave;nh độ đại
                học; tuyển sinh tr&igrave;nh độ cao đẳng ng&agrave;nh Gi&aacute;o dục Mầm non năm 2021.<o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">9. Lệ
                    ph&iacute; x&eacute;t tuyển</span></b><span style="font-family: Arial; font-size: 10.5pt">
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Lệ ph&iacute; x&eacute;t tuyển kết hợp: 25.000đ/nguyện
                vọng/th&iacute; sinh. <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><b
                style="mso-bidi-font-weight: normal"><span style="font-family: Arial; font-size: 10.5pt">10. Học
                    ph&iacute; dự kiến với sinh vi&ecirc;n ch&ih-100 position-relativeacute;nh quy</span></b><span
                style="font-family: Arial; font-size: 10.5pt position-relative" style='z-index: 2;'>
                <o:p></o:p>
            </span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Học ph&iacute; dự kiến năm học 2021 &ndash; 2022
                c&aacute;c chương tr&igrave;nh đ&agrave;o tạo như sau: <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">+ Chương tr&igrave;nh đại tr&agrave;: từ 15.750.000đ đến
                17.325.000đ/1 năm/người học <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">+ Chương tr&igrave;nh đ&agrave;o tạo chất lượng cao: từ
                30.450.000đ đến 33.495.000đ/1 năm/người học<o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">+ Chương tr&igrave;nh đ&agrave;o tạo theo cơ chế đặc
                th&ugrave;: từ 18.900.000đ đến 20.790.000đ /năm/người học <o:p></o:p></span></p>
        <p style="text-align: justify; margin: 0in 0in 0pt" class="MsoNormal"><span
                style="font-family: Arial; font-size: 10.5pt">- Mức tăng học ph&iacute; từng năm so với năm học trước
                liền kề: tối đa 10%.<o:p></o:p></span></p>
        <!-- courses -->
        <section class="branches py-5" id="courses">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title-w3 mb-5 text-center font-weight-bold">Sơ lược tuyển sinh</h3>
                <div class="row branches-position pt-lg-4">
                    <div class="col-lg-3 col-sm-6 place-w3 ">
                        <!-- branch-img -->
                        <div class="team-img team-img-1 h-100 position-relative">
                            <div class="style-banner"></div>
                            <div class="team-content position-relative" style='z-index: 2;'>
                                <h4 class="text-wh">Sinh viên theo hệ đại trà</h4>
                                <p class="team-meta">các bạn xét tuyển bằng hình thức tuyển thẳng hoặc xét điểm THPTQG
                                    đăng
                                    kí ngành học đại trà</p>
                            </div>
                        </div>
                    </div>
                    <!-- / branch-img -->
                    <div class="col-lg-3 col-sm-6 place-w3 mt-sm-0 mt-4 ">
                        <!-- team-img -->
                        <div class="team-img team-img-2 h-100 position-relative">
                            <div class="style-banner"></div>
                            <div class="team-content position-relative" style='z-index: 2;'>
                                <h4 class="text-wh">Tiêu chí phụ</h4>
                                <p class="team-meta">Sau khi sử dụng tiêu chí phụ, nếu số thí sinh trúng tuyển vẫn còn
                                    cao hơn so với chỉ tiêu,
                                    Trường sẽ ưu tiên thí sinh có nguyện vọng cao hơn theo quy định của Bộ Giáo dục và
                                    Đào tạo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.branch-img -->
                    <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4 ">
                        <!-- team-img -->
                        <div class="team-img team-img-3 h-100 position-relative">
                            <div class="style-banner"></div>
                            <div class="team-content position-relative" style='z-index: 2;'>
                                <h4 class="text-wh"> Hồ sơ đăng ký xét tuyển, gồm</h4>
                                <p class="team-meta">Hai phong bì ghi rõ họ tên, địa chỉ liên lạc, số điện thoại của thí
                                    sinh; hai ảnh chân dung cỡ 4 x 6;
                                    Bản sao hộ khẩu thường trú,Bản sao Chứng nhận kết quả thi TNTHPT 2021,Bản sao Chứng
                                    minh thư nhân dân hoặc Thẻ căn cước công dân...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.branch-img -->
                    <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4 ">
                        <!-- team-img -->
                        <div class="team-img team-img-4 h-100 position-relative">
                            <div class="style-banner"></div>
                            <div class="team-content position-relative" style='z-index: 2;'>
                                <h4 class="text-wh">Công bố kết quả xét tuyển</h4>
                                <p class="team-meta">Thực hiện theo quy định và kế hoạch chung của Bộ GD&ĐT và quy định
                                    của Trường.
                                    Trường sẽ có Thông báo cụ thể và đăng tải công khai trên Cổng thông tin điện tử của
                                    Trường: www.tmu.edu.vn
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- //places -->

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
                <img src="./img/img/logodhtm.png" alt=" " class="img-fluid w-50 mt-5">
                <h4 class="mt-4 text-wh font-weight-bold mb-4">Thuong Mai</h4>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

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