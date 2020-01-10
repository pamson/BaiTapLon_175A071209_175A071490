<?php
include "../connect.php";

$username=$_POST['username'];
$password=$_POST['password'];
$ConfirmPassword=$_POST['confirmpassword'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$role=$_POST['role'];
$email=$_POST['email'];
$address=$_POST['address'];
$hashPass = password_hash($password,PASSWORD_DEFAULT);
$hashcPass = password_hash($ConfirmPassword,PASSWORD_DEFAULT);
$query1="INSERT INTO account VALUES('$username','$hashPass','$hashcPass',NULL,'$name','$sex','$role','$email','$address')"; 
if (mysqli_query($connect, $query1)) {
    header("location:../TrangSauDangNhap/RoleQTAccount.php");
} else {
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}

?>