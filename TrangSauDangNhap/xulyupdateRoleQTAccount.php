<?php 

          include ("../connect.php");
         if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['name']) && isset($_POST['sex']) && isset($_POST['role']) && isset($_POST['email']) && isset($_POST['address']) )
         {
                        
           $update = "UPDATE account SET UserName = '".$_POST['username']."', PassWord = '".$_POST['password']."', ConfirmPassword ='".$_POST['confirmpassword']."',Name = '".$_POST['name']."',Sex = '".$_POST['sex']."', Role = '".$_POST['role']."', Email = '".$_POST['email']."',Address = '".$_POST['address']."' WHERE UserName ='".$_GET['id']."' ";
              

                 if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmpassword']) || empty($_POST['name']) && empty($_POST['sex']) || empty($_POST['role']) || empty($_POST['email']) || empty($_POST['address']) )
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/RoleQTAccount.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>