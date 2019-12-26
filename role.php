<?php
session_start();
if(isset($_SESSION['lv'])){
    if($_SESSION['lv'] == 'SV'){
        header("location:quanly.php");
    }
    else if($_SESSION['lv'] == 'ADMIN'){
        header("location:TrangSauDangNhap/admin.php");
    }
}
?>