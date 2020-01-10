<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'ADMIN'))
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
                        <a class="nav-link" href="admin.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Khoa.php">
                        <i class="fas fa-university"></i>
                            <p>Khoa</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Lop.php">
                        <i class="fas fa-store-alt"></i>
                            <p>Lớp</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="GiangVien.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                            <p>Giảng viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="SinhVien.php?class=">
                        <i class="fas fa-graduation-cap"></i>
                            <p>Sinh viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="MonHoc.php">
                        <i class="fas fa-book"></i>
                            <p>Môn học</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="ChiTietMH.php">
                        <i class="fas fa-book-open"></i>
                            <p>Phân công giảng dạy</p>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="DiemSV.php?class=">
                        <i class="fas fa-table"></i>
                            <p>Điểm sinh viên</p>
                        </a>
                    </li>
                    
                    
        </ul>
	  </div>
	  </div>
    </div>
<div class="col-sm-10 page_right">
    <?php
    include ("headerLogin.php");
    ?>
    <main>
    <?php include ("HoSoADMIN.php")?>
     <!-- Search form -->
     <form class="form-inline md-form form-sm mt-0 search">
          <!--Dropdown primary-->
        <div class="dropdown">

        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Danh sách môn học</button>
        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
        <?php
            $sql2 = "SELECT * FROM MonHoc";
            $result1 = mysqli_query($connect,$sql2);
            if(mysqli_num_rows($result1)>0)
            {
                while($row = mysqli_fetch_assoc($result1))
                { 
        ?> 
        <a class="dropdown-item" id="class" href="../TrangSauDangNhap/DiemSV.php?class=<?php echo $row['MaMH']?>" name="class" ><?php echo $row["MaMH"]?></a>
        <?php
                }
            }
            
        ?>
        </div>
        </div>
        <!--/Dropdown primary-->
         <!--Dropdown primary-->
         <div class="dropdown">

        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Danh sách lớp</button>
        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
        <?php
            $sql2 = "SELECT * FROM lop";
            $result1 = mysqli_query($connect,$sql2);
            if(mysqli_num_rows($result1)>0)
            {
                while($row = mysqli_fetch_assoc($result1))
                { 
        ?> 
        <a class="dropdown-item" id="class" href="../TrangSauDangNhap/DiemSV.php?lopmh=<?php echo $row['MaLop']?>" name="lopmh" ><?php echo $row["MaLop"]?></a>
        <?php
                }
            }
            
        ?>
        </div>
        </div>
        <!--/Dropdown primary-->
    </form>
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
                            $sql = "SELECT * FROM V_DiemSV WHERE MaMH = '".$_GET['class']."'";
                            $sql1 = "SELECT * FROM V_DiemSV";
                            if(isset($_GET["class"]))
                            {
                                $result = mysqli_query($connect,$sql);
                            }
                            if(empty($_GET["class"]))
                            {
                                $result = mysqli_query($connect,$sql1);
                            }
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
								<tr>
									<td class="Diem1"><?php echo $count++?></td>
									<td class="Diem2"><?php echo $row['MaMH']?></td>
									<td class="Diem3"><?php echo $row['TenMH']?></td>
									<td class="Diem4"><?php echo $row['SoTC']?></td>
									<td class="Diem5"><?php echo $row['LanThi']?></td>
                                    <td class="Diem6"><?php echo $row['DanhGia']?></td>
                                    <td class="Diem7"><?php echo $row['TenSV']?></td>
									<td class="Diem8"><?php echo $row['MaSV']?></td>
									<td class="Diem9"><?php echo $row['QuaTrinh']?></td>
                                    <td class="Diem10"><?php echo $row['Thi']?></td>
                                    <td class="Diem11"><?php echo $row['TKHP']?></td>
									<td class="Diem12"><?php echo $row['Diemchu']?></td>
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