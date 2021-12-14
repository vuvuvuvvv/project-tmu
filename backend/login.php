<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
$error = '';
session_start();
if(isset($_SESSION['login_admin'])) {
    header("location: index.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $email = $_POST['email'];
   $mypassword = $_POST['password']; 
   
   $sql = "SELECT * FROM users WHERE email = '$email' and password = '$mypassword'";
   $query = $dbConnection->query($sql);
   $row = $query->fetch_array();
   
   // If result matched $email and $password, table row must be 1 row
    if(!empty($row)) {
        if($row['role'] == 'admin') {
            $_SESSION['login_admin'] = $row['username'];
            $_SESSION['admin_id'] = $row['id'];
            $error = '';
            header("location: index.php");
        } else {
            header("location: error.php");
        }
    }else {
        $error = "<small class='text-danger'>Email hoặc mật khẩu không đúng! Hãy thử lại.</small>";
    }
}
$dbConnection->close();
?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>ADMIN-LOGIN</title>
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
    <div class="container-fluid py-5">
        <div class="container py-xl-5 py-lg-3">
            <!-- login  -->
            <div class="modal-body my-5 pt-4">
                <div class='w-100 text-center'>
                    <img src='img/logo-tmu.png' class="w-25"><br>
                    <h3>Đăng nhập</h3>
                </div>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Nhập email của bạn" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" required>
                    </div>
                    <?= $error ?>
                    <button type="submit" class="btn button-style-w3">Đăng nhập</button>
                </form>
            </div>
            <!-- //login -->
        </div>
    </div>
</body>

</html>