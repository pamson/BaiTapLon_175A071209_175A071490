<?php 
          include ("../connect.php");
         if(isset($_POST['malop']) && isset($_POST['makhoa']) && isset($_POST['tenlop']) && isset($_POST['siso']) )
         {
                        
           $update = "UPDATE lop SET MaLop = '".$_POST['malop']."', MaKhoa = '".$_POST['makhoa']."', TenLop ='".$_POST['tenlop']."',SiSo = ".$_POST['siso']." WHERE MaLop ='".$_GET['id']."' ";
              

                 if(empty($_POST['malop']) || empty($_POST['makhoa']) || empty($_POST['tenlop']) || empty($_POST['siso']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/Lop.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>