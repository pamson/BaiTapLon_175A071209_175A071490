
<?php
include ('head.php');

if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'SV'))
{
 header("Location:../dangnhap.php");
exit();}

?>
<?php
include ("leftBody.php");
?>
    <div class="sidebar-wrapper">
        <ul class="nav menu">
            <li class="nav-item   ">
                <a class="nav-link" href="RoleSinhVien.php">
                 <i class="fas fa-home"></i>
                    <p>Trang chủ</p>
                 </a>
             </li>
                   
             <li class="nav-item active ">
                 <a class="nav-link" href="RoleSVDIEM.php?HK=&y=">
                   <i class="fas fa-table"></i>
                     <p>Điểm sinh viên</p>
                     </a>
               </li>
                  
        </ul>
        </div>
        </div>
    </div>
    <div class="col-sm-10 page_right">
    <header>
        <div class="container-fluid pageHeader">
            <h1>HỆ THỐNG ĐĂNG KÍ HỌC - TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
        </div>
    </header>
    <main>
    <?php include ("HoSoSV.php")?>
   
  
   
    <!-- Search form -->
    <form class="form-inline md-form form-sm mt-0 search" method="get">
            <div class="tk">
                
               <div>
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75 input_search"  type="text" id="hocki" name="HK"  placeholder="Semester search"
                    aria-label="Search" value="<?php echo $_GET["HK"]?>">      
               </div>
                <div class="year">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75 input_search"  type="text" id="year" name="y"  placeholder="Year search"
                    aria-label="Search"  value="<?php echo $_GET["y"]?>">
                </div>
            </div>
            <input type="submit" value="tìm kiếm" class="sb">
            
    </form>
    
    <!-- đổ dữ liệu ra bảng-->
    <?php 

    ?>

    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="Diem1">STT</th>
								<th class="Diem2">Mã môn học</th>
								<th class="Diem3">Tên môn học</th>
								<th class="Diem4">Số tín chỉ</th>
                                <th class="Diem5">Lần thi</th>
                                <th class="Diem6">Đánh giá</th>
                                <th class="Diem7">Tên sinh viên</th>
                                <th class="Diem8">Mã sinh viên</th>
                                <th class="Diem9">Điểm quá trình</th>
                                <th class="Diem10">Điểm thi</th>
                                <th class="Diem11">TKHP</th>
                                <th class="Diem12">Điểm chữ</th>
								
							</tr>
						</thead>
						<tbody>
                            <?php
                            
                             $count = 1;
                             $query ="SELECT v_diemsv.* FROM `v_diemsv` WHERE MaSV = '".$_SESSION['username'] ."'";
                             $sql1 ="SELECT v_diemsv.* FROM `v_diemsv`, ctmonhoc WHERE MaSV = '".$_SESSION['username'] . "' AND v_diemsv.MaMH = ctmonhoc.MaMH AND ctmonhoc.HK = ".$_GET['HK'] ;
                             $sql2 ="SELECT v_diemsv.* FROM `v_diemsv`, ctmonhoc WHERE MaSV = '".$_SESSION['username'] . "' AND v_diemsv.MaMH = ctmonhoc.MaMH AND ctmonhoc.NamHoc = '". $_GET['y'] . "'" ;
                             $sql ="SELECT v_diemsv.* FROM `v_diemsv`, ctmonhoc WHERE MaSV = '".$_SESSION['username'] . "' AND v_diemsv.MaMH = ctmonhoc.MaMH AND ctmonhoc.HK = ".$_GET['HK']." AND ctmonhoc.NamHoc = '". $_GET['y'] . "'" ;
                             if(empty($_GET["HK"]) && empty($_GET["y"]))
                             {
                                $result = mysqli_query($connect,$query);
                             }
                             elseif(isset($_GET["HK"]) && empty($_GET["y"]))
                             {
                                $result = mysqli_query($connect,$sql1);
                             }
                             elseif(empty($_GET["HK"]) && isset($_GET["y"]))
                             {
                                $result = mysqli_query($connect,$sql2);
                             }
                             else
                             {
                                $result = mysqli_query($connect,$sql);
                             }
                             if(mysqli_num_rows($result)>0)
                             {
                                 while($row = mysqli_fetch_assoc($result))
                                 {
                                     ?>
                                <tr>
									<td class="Diem1"><?php echo $count++?></td>
									<td class="Diem2"><?php echo $row['MaMH'];?></td>
									<td class="Diem3"><?php echo $row['TenMH'];?></td>
									<td class="Diem4"><?php echo $row['SoTC'];?></td>
									<td class="Diem5"><?php echo $row['LanThi'];?></td>
                                    <td class="Diem6"><?php echo $row['DanhGia'];?></td>
                                    <td class="Diem7"><?php echo $row['TenSV'];?></td>
									<td class="Diem8"><?php echo $row['MaSV'];?></td>
									<td class="Diem9"><?php echo $row['QuaTrinh'];?></td>
                                    <td class="Diem10"><?php echo $row['Thi'];?></td>
                                    <td class="Diem11"><?php echo $row['TKHP'];?></td>
									<td class="Diem12"><?php echo $row['Diemchu'];?></td>
                                </tr>	



                                     <?php
                                 }
                             }
                             else
                             {
                                 echo("NO! Value");
                             }
                            ?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


    </main>
    <?php
    include ("footerLogin.php");
    ?>
</div>
<?php
include ("foot.php");
?>