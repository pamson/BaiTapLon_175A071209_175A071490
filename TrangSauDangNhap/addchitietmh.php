<?php
include "../connect.php";
$malop=$_POST['malop'];
$magv=$_POST['magv'];
$query="INSERT into phancong_gv_lop VALUES ('".$malop."','".$magv."')"; 
if (mysqli_query($connect, $query)) {
    header('location:../TrangSauDangNhap/ChiTietMH.php');
} else {
    echo "Lỗi: " . $query . "<br>" . mysqli_error($connect);
}
?>