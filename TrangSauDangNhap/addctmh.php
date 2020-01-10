<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$malop=$_POST['malop'];
$hk=$_POST['hk'];
$namhoc=$_POST['namhoc'];


$query1="INSERT INTO ctmonhoc VALUES('".$malop."','".$mamh."','".$hk."','".$namhoc."')"; 

if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoLeGVChiTietMH.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}

?>