<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $makhoa=$_GET['id'];
    $query="delete from giangvien where MaGV='$magv'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/GiangVien.php');
}
?>