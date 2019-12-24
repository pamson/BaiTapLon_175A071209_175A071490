<?php
session_start();
if(isset($_SESSION['lv'])){
    if($_SESSION['lv'] == 'SV'){
        $_SESSION['role']='Sinh Viên';
        header("location:quanly.php");
    }
    else{
        header("location:admin.php");
    }
}
?>