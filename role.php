<?php
session_start();
if(isset($_SESSION['lv'])){
    if($_SESSION['lv'] == 'SV'){
        header("location:TrangSauDangNhap/RoleSinhVien.php");

    }
    else if($_SESSION['lv'] == 'GV'){
        
            header("location:TrangSauDangNhap/RoleGiangVien.php");

    }
    elseif($_SESSION['lv'] == 'ADMIN')
    {
        header("location:TrangSauDangNhap/admin.php");
    }
    else
    {
        header("location:TrangSauDangNhap/RoleQuanTri.php");
    }
}
?>