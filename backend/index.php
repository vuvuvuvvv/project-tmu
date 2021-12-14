<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
session_start();
//check admin đăng nhập
if(!isset($_SESSION['login_admin'])) {
    header("location: login.php");
}
$queryUsers = $dbConnection->query("SELECT * FROM `users`");
$queryPosts = $dbConnection->query("SELECT * FROM `post`");
$queryContacts = $dbConnection->query("SELECT * FROM `contact`");
$dbConnection->close();
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>ADMIN-TMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome/css/all.css" rel='stylesheet' type='text/css' />
</head>

<body class="bg-login">
    <div class="container-fluid px-5">
        <div class="row bg-white mx-0 my-5">
            <div class="w-100 row p-0 m-0">
                <div class="col-12 col-lg-2 bg-lighter-gray py-5 px-3">
                    <div class='avatar'>
                        <img src='./img/admin.jpg' class='w-100'>
                    </div>
                </div>
                <div class="col-12 col-lg-10 pt-3 pb-5">
                    <h3>HELLO! <?= $_SESSION['login_admin'] ?></h3>
                    <h5><a href="logout.php">Đăng xuất</a></h5>
                    <hr width="100%" size="3px" color="#428bca" />
                    <div class="w-100 row m-0 p-0">
                        <ul class="nav nav-pills mb-3 w-100 p-0 m-0 row" id="pills-tab" role="tablist">
                            <li class="nav-item col-12 col-lg-4 p-0 m-0">
                                <a class="nav-link active" id="pills-user-tab" data-toggle="pill" href="#pills-user"
                                    role="tab" aria-controls="pills-user" aria-selected="true"><i
                                        class="fas fa-user"></i> Quản lý người dùng</a>
                            </li>
                            <li class="nav-item col-12 col-lg-4 p-0 m-0">
                                <a class="nav-link" id="pills-post-tab" data-toggle="pill" href="#pills-post" role="tab"
                                    aria-controls="pills-post" aria-selected="false"><i class="far fa-newspaper"></i>
                                    Quản lý bài viết</a>
                            </li>
                            <li class="nav-item col-12 col-lg-4 p-0 m-0">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false"><i
                                        class="far fa-comment-alt"></i> Quản lý liên hệ</a>
                            </li>
                        </ul>
                        <div class="tab-content w-100" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-user" role="tabpanel"
                                aria-labelledby="pills-user-tab">
                                <div class="border bg-primary border border-primary">
                                    <h3 class="text-white m-0 p-2">Quản lý người dùng <span class='float-right'><a href='create-user.php' class='btn p-0 fw-bold text-light'><h5>Create <i class="fas fa-plus"></i></h5></a></span></h3>
                                </div>
                                <table class='table table-bordered'>
                                    <tr class="bg-light">
                                        <td>Họ và tên</td>
                                        <td>Email</td>
                                        <td>Mật khẩu</td>
                                        <td>Vai trò</td>
                                        <td>Hành động</td>
                                    </tr>
                                    <?php while ($user = mysqli_fetch_array($queryUsers)) { ?>
                                    <tr>
                                        <td><?= $user['username']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <td><?= $user['password']; ?></td>
                                        <td><?= $user['role']; ?></td>
                                        <td class="border">
                                            <a class="btn btn-primary mb-2"
                                                href="update-user.php?id=<?= $user['id']; ?>">Edit</a>
                                            <a class="btn btn-danger mb-2 <?= ($user['id'] == 1) ? 'd-none':'' ?>"
                                                href="delete.php?table=users&id=<?= $user['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-post" role="tabpanel" aria-labelledby="pills-post-tab">
                                <div class="border bg-primary border border-primary">
                                    <h3 class="text-white m-0 p-2">Quản lý bài viết <span class='float-right'><a href='create-post.php' class='btn p-0 fw-bold text-light'><h5>Create <i class="fas fa-plus"></i></h5></a></span></h3>
                                </div>
                                <table class='table table-bordered'>
                                    <tr class="bg-light">
                                        <td class="w-25">Ảnh nền</td>
                                        <td>Tiêu đề</td>
                                        <td class="w-50">Nội dung</td>
                                        <td>Hành động</td>
                                    </tr>
                                    <?php while ($post = mysqli_fetch_array($queryPosts)) { ?>
                                    <tr>
                                        <td class="w-25"><img src="../frontend/img/<?= $post['avatar']; ?>"
                                                class="w-100"></td>
                                        <td><?= $post['title']; ?></td>
                                        <td class="w-50">
                                            <div class="w-100 content-post">
                                                <?= $post['content']; ?>
                                            </div>
                                        </td>
                                        <td class="border">
                                            <a class="btn btn-primary mb-2"
                                                href="update-post.php?id=<?= $post['id']; ?>">Edit</a>
                                            <a class="btn btn-danger mb-2"
                                                href="delete.php?table=post&id=<?= $post['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="border bg-primary border border-primary">
                                    <h3 class="text-white m-0 p-2">Quản lý liên hệ</h3>
                                </div>
                                <table class='table table-bordered'>
                                    <tr class="bg-light">
                                        <td>Tên</td>
                                        <td>Email</td>
                                        <td>Chủ để</td>
                                        <td class="w-30">Nội dung</td>
                                        <td>Hành động</td>
                                    </tr>
                                    <?php while ($contact = mysqli_fetch_array($queryContacts)) { ?>
                                    <tr>
                                        <td><?= $contact['name']; ?></td>
                                        <td><?= $contact['email']; ?></td>
                                        <td class="w-30"><?= $contact['subject']; ?></td>
                                        <td class="w-30"><?= $contact['content']; ?></td>
                                        <td class="border">
                                            <a class="btn btn-danger mb-2"
                                                href="delete.php?table=contact&id=<?= $contact['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($_SESSION['update_success'])) { ?>
        <script>
            alert('Chỉnh sửa thành công!');
            <?php
                unset($_SESSION['update_success']);
            ?>
        </script>
    <?php } ?>
    <?php if(isset($_SESSION['create_user'])) { ?>
        <script>
            alert('Thêm tài khoản thành công!');
            <?php
                unset($_SESSION['create_user']);
            ?>
        </script>
    <?php } ?>
    <?php if(isset($_SESSION['create_post'])) { ?>
        <script>
            alert('Thêm bài viết thành công!');
            <?php
                unset($_SESSION['create_post']);
            ?>
        </script>
    <?php } ?>
    <?php if(isset($_SESSION['delete_success'])) { ?>
        <script>
            alert('Xóa thành công!');
            <?php
                unset($_SESSION['delete_success']);
            ?>
        </script>
    <?php } ?>
    <?php if(isset($_SESSION['contact'])) { ?>
        <script>
            alert('Gửi liên hệ thành công!');
            <?php
                unset($_SESSION['contact']);
            ?>
        </script>
    <?php } ?>
</body>

</html>