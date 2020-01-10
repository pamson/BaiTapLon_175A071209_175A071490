<?php 
          include ("../connect.php");
         if(isset($_POST['malop']) && isset($_POST['magv']) )
         {
                        
           $update = "UPDATE phancong_gv_lop SET MaLop = '".$_POST['malop']."', MaGV = '".$_POST['magv']."' WHERE MaLop ='".$_GET['id']."' ";
              

                 if(empty($_POST['malop']) || empty($_POST['magv']) )
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/ChiTietMH.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>