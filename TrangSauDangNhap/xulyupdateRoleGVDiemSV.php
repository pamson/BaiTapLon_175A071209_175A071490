<?php 
          include ("../connect.php");
         if(isset($_POST['mamh']) && isset($_POST['sotc']) && isset($_POST['lanhoc']) && isset($_POST['lanthi']) && isset($_POST['masv']) && isset($_POST['diemqt']) && isset($_POST['diemthi']))
         {
                        
           $update = "UPDATE diemsv SET MaMH = '".$_POST['mamh']."', SoTC = ".$_POST['sotc'].", LanHoc =".$_POST['lanhoc'].",LanThi = ".$_POST['lanthi'].",MaSV = '".$_POST['masv']."',QuaTrinh = ".$_POST['diemqt'].",Thi= ".$_POST['diemthi']." WHERE MaMH ='".$_GET['id']."' ";
              

                 if(empty($_POST['mamh']) || empty($_POST['sotc']) || empty($_POST['lanhoc']) || empty($_POST['lanthi']) || empty($_POST['masv']) || empty($_POST['diemqt']) || empty($_POST['diemthi']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/RoleGVDiemSV.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>