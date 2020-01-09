<?php
include "../connect.php";

$malop=$_POST['malop'];
$makhoa=$_POST['makhoa'];
$tenlop=$_POST['tenlop'];
$siso=$_POST['siso'];
$query1="INSERT INTO lop VALUES('".$malop."','".$makhoa."','".$tenlop."','.$siso.')"; 
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/Lop.php");
} else {
    echo "Lỗi: " . $query . "<br>" . mysqli_error($connect);
}

?>