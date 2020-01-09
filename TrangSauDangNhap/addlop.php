<?php
include "../connect.php";

$malop=$_POST['malop'];
$makhoa=$_POST['makhoa'];
$tenlop=$_POST['tenlop'];
$siso=$_POST['siso'];
$query1="INSERT INTO lop VALUES('".$malop."','".$makhoa."','".$tenlop."','.$siso.')"; 
if(isset($_POST['malop']) && isset($_POST['makhoa']) && isset($_POST['tenlop']) && isset($_POST['siso']) )
{
        if(empty($_POST['malop']) || empty($_POST['makhoa']) || empty($_POST['tenlop']) || empty($_POST['siso']))
           {
                  echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                  exit();
        }
        
        if (mysqli_query($connect, $query1)) {
            header("location:../TrangSauDangNhap/Lop.php");
        } else {
            echo "Lỗi: " . $query . "<br>" . mysqli_error($connect);
        }
}
?>