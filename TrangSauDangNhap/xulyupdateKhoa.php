<?php 
          include ("../connect.php");
         if(isset($_POST['makhoa']) && isset($_POST['tenkhoa']))
         {
                        
           $update = "UPDATE khoa SET MaKhoa = '".$_POST['makhoa']."', TenKhoa = '".$_POST['tenkhoa']."' WHERE MaKhoa ='".$_GET['id']."' ";
              

                 if(empty($_POST['makhoa']) || empty($_POST['tenkhoa']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/Khoa.php');
                 }
               else 
                 {
                echo "Mời bạn kiểm tra lại";
                    }
                 }      
                   

                ?>