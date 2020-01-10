<?php 
          include ("../connect.php");
         if(isset($_POST['mamh']) && isset($_POST['tenmh']) && isset($_POST['sotc']) && isset($_POST['lt']) && isset($_POST['th']))
         {
                        
           $update = "UPDATE monhoc SET MaMH = '".$_POST['mamh']."', TenMH = '".$_POST['tenmh']."', SoTC =".$_POST['sotc'].",LT = ".$_POST['lt'].",TH=".$_POST['th']." WHERE MaMH ='".$_GET['id']."' ";
              

                 if(empty($_POST['mamh']) || empty($_POST['tenmh']) || empty($_POST['sotc']) || empty($_POST['lt']) || empty($_POST['th']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
                 
                if( mysqli_query($connect,$update))
                {
                  header('location:../TrangSauDangNhap/MonHoc.php');
                 }
               else 
                 {
                echo "Mời bạn nhập lại mã khoa";
                    }
                 }      
                   

                ?>