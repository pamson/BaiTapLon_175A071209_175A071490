<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $makhoa=$_GET['id'];
    $query="delete from khoa where MaKhoa='$makhoa'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/Khoa.php');
}
?>