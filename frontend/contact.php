<?php 
//tạo một biên skeets nối csdl
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject']; 
    $content = $_POST['content']; 
    //tạo câu lệnh kết nói cơ sở dl
    $sqlInsert = "INSERT INTO contact (name,email,subject,content) VALUES ('$name','$email','$subject','$content')";
    //bắt đầu kết nối
    if($dbConnection->query($sqlInsert)) {
        //tạo biến session báo thành công
        $_SESSION['add_contact'] = 'success';
        //chuyển url về trang index
        header("location: index.php");
    }else {
        echo "Error: ".$sqlInsert.'<br>' . $dbConnection->error;die;
    }
} else {
    header("location: index.php");
}
$dbConnection->close();
?>