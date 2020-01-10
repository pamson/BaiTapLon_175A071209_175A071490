<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$tenmh=$_POST['tenmh'];
$sotc=$_POST['sotc'];
$lt=$_POST['lt'];
$th=$_POST['th'];

$query1="INSERT INTO ctmonhoc VALUES('".$mamh."','".$tenmh."','".$sotc."','".$lt."','".$th."')"; 
if(isset($_POST['mamh']) && isset($_POST['malop']) && isset($_POST['hk']) && isset($_POST['namhoc']) )
{
     if(empty($_POST['mamh']) || empty($_POST['malop']) || empty($_POST['hk']) || empty($_POST['namhoc']) )
           {
                  echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                  exit();
        }
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoLEGVChiTietMH.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}
}
?>