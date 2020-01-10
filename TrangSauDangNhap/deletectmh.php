<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $malop=$_GET['id'];
    $query="delete from ctmonhoc where MaLop='$malop'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/RoLeGVChiTietMH.php');
}
?>