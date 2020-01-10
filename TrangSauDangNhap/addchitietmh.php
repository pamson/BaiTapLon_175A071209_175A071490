<?php
include "../connect.php";
$malop=$_POST['malop'];
$magv=$_POST['magv'];
$query="INSERT into phancong_gv_lop VALUES ('".$malop."','".$magv."')"; 
if(isset($_POST['malop']) && isset($_POST['magv']) )
{
  if(empty($_POST['malop']) || empty($_POST['magv']) )
           {
                  echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                  exit();
        }
if (mysqli_query($connect, $query)) {
    header('location:../TrangSauDangNhap/ChiTietMH.php');
} else {
    echo "Lỗi: " . $query . "<br>" . mysqli_error($connect);
}
}
?>