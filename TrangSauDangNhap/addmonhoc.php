<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$tenmh=$_POST['tenmh'];
$sotc=$_POST['sotc'];
$lt=$_POST['lt'];
$th=$_POST['th'];

$query1="INSERT INTO monhoc VALUES('".$mamh."','".$tenmh."','".$sotc."','".$lt."','".$sth."')"; 
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/monhoc.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}

?>