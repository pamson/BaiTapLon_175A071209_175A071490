<?php
session_start();
if(isset($_SESSION['lv'])){
    if($_SESSION['lv'] == 'SV'){
        header("location:quanly.php");
    }
    else{
        header("location:admin.php");
    }
}
?>