<?php 
          include ("../connect.php");
         if(isset($_POST['magv']) && isset($_POST['tengv']) && isset($_POST['capbac']) && isset($_POST['gioitinh']) && isset($_POST['sodienthoai']) && isset($_POST['email']) && isset($_POST['diachi']) )
         {
                        
           $update = "UPDATE giangvien SET MaGV = '".$_POST['magv']."', TenGV = '".$_POST['tengv']."', CapBac ='".$_POST['capbac']."',GioiTinh = '".$_POST['gioitinh']."',SĐT = '".$_POST['sodienthoai']."',Email = '".$_POST['email']."',DiaChi = '".$_POST['diachi']."' WHERE MaGV ='".$_GET['id']."' ";
              

                 if(empty($_POST['magv']) || empty($_POST['tengv']) || empty($_POST['capbac']) || empty($_POST['gioitinh']) || empty($_POST['sodienthoai']) || empty($_POST['email']) || empty($_POST['diachi']) )
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/GiangVien.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>