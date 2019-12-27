<?php
session_start();
// Xóa đi một biến Session
if (isset($_SESSION['username']) && isset($_SESSION['lv'])){
    unset($_SESSION['username']);
    unset($_SESSION['lv']);
    header('location: ../TrangChuTinTuc/index.php');
}
//Xóa toàn bộ Session
session_destroy();
?>