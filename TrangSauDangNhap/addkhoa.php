<?php
include "../connect.php";
$makhoa=$_POST['makhoa'];
$tenkhoa=$_POST['tenkhoa'];
$query="INSERT into khoa VALUES ('".$makhoa."','".$tenkhoa."')"; 
if(isset($_POST['makhoa']) && isset($_POST['tenkhoa']))
         {        
                 if(empty($_POST['makhoa']) || empty($_POST['tenkhoa']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if (mysqli_query($connect, $query)) {
                    header('location:../TrangSauDangNhap/Khoa.php');
                } else {
                    echo "Lỗi: " . $query . "<br>" . mysqli_error($connect);
                }
        }
?>