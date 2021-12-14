<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
session_start();
$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $avatar = $_POST['avatar'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sqlInsert = "INSERT INTO post (avatar,title,content) VALUES ('$avatar','$title','$content')";
    if($dbConnection->query($sqlInsert)) {
        $error = '';
        $_SESSION['create_post'] = 'success';
        header("location: index.php");
    }else {
        echo "Error: ".$sqlInsert.'<br>' . $dbConnection->error;die;
    }
}
$dbConnection->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Post</title>
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
                    <h2>Creat Post</h2>
                    <form method="POST" action="create-post.php">
                        <table class="table table-bordered">
                            <tr class="bg-light">
                                <td class='w-25'>Avatar</td>
                                <td class='w-25'>Tiêu đề</td>
                                <td class='w-50'>Nội dung</td>
                            </tr>
                            <tr>
                                <td><input type="file" name="avatar" required></td>
                                <td><textarea class="form-control" name='title' rows="10" required></textarea>
                                </td>
                                <td><textarea class="form-control" name='content' rows="10" required></textarea>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a class="btn btn-primary" href="index.php" role="button">Back</a>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>