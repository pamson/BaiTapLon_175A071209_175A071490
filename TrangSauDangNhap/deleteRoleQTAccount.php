<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $username=$_GET['id'];
    $query="delete from account where UserName='$username'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/RoleQTAccount.php');
}
?>