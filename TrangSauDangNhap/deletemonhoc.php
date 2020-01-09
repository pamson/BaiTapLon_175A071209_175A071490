<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $mamh=$_GET['id'];
    $query="delete from monhoc where MaMH='$mamh'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/MonHoc.php');
}
?>