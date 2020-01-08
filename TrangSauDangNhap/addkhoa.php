<?php
include "../connect.php";
$makhoa=$_POST['makhoa'];
$tenkhoa=$_POST['tenkhoa'];
$query="INSERT into khoa VALUES ('".$makhoa."','".$tenkhoa."')"; 
if (mysqli_query($connect, $query)) {
    header('location:../TrangSauDangNhap/Khoa.php');
} else {
    echo "Lỗi: " . $query . "<br>" . mysqli_error($connect);
}
?>