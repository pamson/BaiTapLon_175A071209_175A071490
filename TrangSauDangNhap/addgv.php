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
if(isset($_POST['magv']) && isset($_POST['tengv']) && isset($_POST['capbac']) && isset($_POST['gioitinh']) && isset($_POST['sodienthoai']) && isset($_POST['email']) && isset($_POST['diachi']) )
{
     if(empty($_POST['magv']) || empty($_POST['tengv']) || empty($_POST['capbac']) || empty($_POST['gioitinh']) || empty($_POST['sodienthoai']) || empty($_POST['email']) || empty($_POST['diachi']) )
           {
                  echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                  exit();
        }
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/GiangVien.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}
}
?>