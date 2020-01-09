<?php
include "../connect.php";

$masv=$_POST['masv'];
$tensv=$_POST['tensv'];
$malop=$_POST['malop'];
$gioitinh=$_POST['gioitinh'];
$sodienthoai=$_POST['sodienthoai'];
$email=$_POST['email'];
$diachi=$_POST['diachi'];
$query1="INSERT INTO sinhvien VALUES('".$masv."','".$tensv."','".$malop."','".$gioitinh."','".$sodienthoai."','".$email."','".$diachi."')"; 
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoLeGVSinhVien.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}

?>