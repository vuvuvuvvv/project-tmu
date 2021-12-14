<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
session_start();
$id = $_GET['id'];
$query = $dbConnection->query("SELECT * FROM `users` WHERE id = '$id'");
$row = $query->fetch_array();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $role = $_POST['role']; 
    $query = $dbConnection->query("UPDATE users SET username='$userName',email='$email',password='$password',role='$role' WHERE id='$id'");
    if($query) {
        $_SESSION['update_success'] = 'success';
        header("location: index.php");
    }else {
        echo "Error: ". $dbConnection->error;die;
    }
}
$dbConnection->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update User</title>
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
                    <h2>Edit User</h2>
                    <form method="POST" action="update-user.php?id=<?= $id ?>">
                        <table class="table table-bordered">
                            <tr class="bg-light">
                                <td>Họ và tên</td>
                                <td>Email</td>
                                <td>Mật khẩu</td>
                                <td>Vai trò</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="username" class="form-control"
                                        value="<?= $row['username']; ?>" required></td>
                                <td><input type="email" name="email" class="form-control" value="<?= $row['email']; ?>"
                                        required>
                                </td>
                                <td><input type="text" name="password" class="form-control"
                                        value="<?= $row['password']; ?>" required>
                                </td>
                                <td><input type="text" name="role" class="form-control" value="<?= $row['role']; ?>"
                                        <?= ($row['id'] == 1) ? 'disabled':'' ?> required>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a class="btn btn-primary" href="index.php" role="button">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>