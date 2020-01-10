<?php
include "../connect.php";

$username=$_POST['username'];
$password=$_POST['password'];

$name=$_POST['name'];
$sex=$_POST['sex'];
$role=$_POST['role'];
$email=$_POST['email'];
$address=$_POST['address'];
$hashPass = password_hash($password,PASSWORD_DEFAULT);

$query1="INSERT INTO account VALUES('$username','$hashPass',NULL,NULL,'$name','$sex','$role','$email','$address')"; 
if(isset($_POST['username']) && isset($_POST['password'])  && isset($_POST['name']) && isset($_POST['sex']) && isset($_POST['role']) && isset($_POST['email']) && isset($_POST['address']) )
         { if(empty($_POST['username']) || empty($_POST['password'])  || empty($_POST['name']) && empty($_POST['sex']) || empty($_POST['role']) || empty($_POST['email']) || empty($_POST['address']) )
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoleQTAccount.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}
         }
?>