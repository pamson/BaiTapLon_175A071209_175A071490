<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$sotc=$_POST['sotc'];
$lanthi=$_POST['lanthi'];

$masv=$_POST['masv'];
$diemqt=$_POST['diemqt'];
$diemthi=$_POST['diemthi'];
$tkhp=$_POST['tkhp'];
$diemchu=$_POST['diemchu'];

$query1="INSERT INTO diemsv VALUES ('".$mamh."','".$sotc."','".$lanhoc."','".$lanthi."',NULL,'".$masv."','".$diemqt."','".$diemthi."',NULL,NULL)"; 
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoLeGVDiemSV.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}

?>