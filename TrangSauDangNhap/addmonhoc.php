<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$tenmh=$_POST['tenmh'];
$sotc=$_POST['sotc'];
$lt=$_POST['lt'];
$th=$_POST['th'];

$query1="INSERT INTO monhoc VALUES('".$mamh."','".$tenmh."','".$sotc."','".$lt."','".$th."')"; 
if(isset($_POST['mamh']) && isset($_POST['tenmh']) && isset($_POST['sotc']) && isset($_POST['lt']) && isset($_POST['th']))
{
     if(empty($_POST['mamh']) || empty($_POST['tenmh']) || empty($_POST['sotc']) || empty($_POST['lt']) || empty($_POST['th']))
           {
                  echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                  exit();
        }
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/monhoc.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}
}
?>