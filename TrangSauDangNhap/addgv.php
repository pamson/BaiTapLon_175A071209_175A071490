<?php
include "../connect.php";

$magv=$_POST['magv'];
$tengv=$_POST['tengv'];
$capbac=$_POST['capbac'];
$gioitinh=$_POST['gioitinh'];
$sodienthoai=$_POST['sodienthoai'];
$email=$_POST['email'];
$diachi=$_POST['diachi'];
$query1="INSERT INTO giangvien VALUES('".$magv."','".$tengv."','".$capbac."','".$gioitinh."','".$sodienthoai."','".$email."','".$diachi."')"; 
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/GiangVien.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}

?>