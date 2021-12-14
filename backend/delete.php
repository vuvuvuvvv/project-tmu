<?php 
include '../helpers/DatabaseConnection.php';
$dbConnection = DatabaseConnection::getInstance();
session_start();
$id = $_GET['id'];
$table = $_GET['table']; 
$query = $dbConnection->query("DELETE FROM $table WHERE id='$id'");
if($query) {
        $_SESSION['delete_success'] = 'success';
        header("location: index.php");
}else {
    error_log('Xóa thất bại!');
}
$dbConnection->close();
?>