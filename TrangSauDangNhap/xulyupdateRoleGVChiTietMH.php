<?php 
          include ("../connect.php");
         if(isset($_POST['malop']) && isset($_POST['mamh']) && isset($_POST['hk']) && isset($_POST['namhoc']) )
         {
                        
           $update = "UPDATE ctmonhoc SET MaLop = '".$_POST['malop']."', MaMH = '".$_POST['mamh']."', HK =".$_POST['hk'].",NamHoc = '".$_POST['namhoc']."' WHERE MaLop ='".$_GET['id']."' ";
              

                 if(empty($_POST['malop']) || empty($_POST['mamh']) || empty($_POST['hk']) || empty($_POST['namhoc']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/RoleGVChiTietMH.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>