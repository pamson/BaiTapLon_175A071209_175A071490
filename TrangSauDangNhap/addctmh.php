<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$malop=$_POST['malop'];
$hk=$_POST['hk'];
$namhoc=$_POST['namhoc'];


$query1="INSERT INTO ctmonhoc VALUES('".$malop."','".$mamh."','".$hk."','".$namhoc."')"; 
if(isset($_POST['malop']) && isset($_POST['mamh']) && isset($_POST['hk']) && isset($_POST['namhoc']) )
         {
              if(empty($_POST['malop']) || empty($_POST['mamh']) || empty($_POST['hk']) || empty($_POST['namhoc']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 

if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoLeGVChiTietMH.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}
         }
?>