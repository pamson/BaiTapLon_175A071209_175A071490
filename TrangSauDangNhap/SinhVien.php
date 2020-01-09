<?php

include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'ADMIN'))
{
 header("Location:../dangnhap.php");
exit();}

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
                    <li class="nav-item active">
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

                    <li class="nav-item ">
                        <a class="nav-link" href="DiemSV.php">
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
        <a class="dropdown-item" id="class" href="../TrangSauDangNhap/SinhVien.php?class=<?php echo $row['MaLop']?>" name="class" ><?php echo $row["MaLop"]?></a>
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
								<th class="column1">STT</th>
								<th class="column2">Mã sinh viên</th>
								<th class="column3">Tên sinh viên</th>
								<th class="column4">Mã lớp</th>
                                <th class="column5">Giới tính</th>
                                <th class="column6">Số điện thoại</th>
                                <th class="column7">Email</th>
                                <th class="column8">Địa chỉ</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php
                            
                            $count = 1;
                            $sql = "SELECT * FROM sinhvien WHERE MaLop = '".$_GET['class']."'";
                            $sql1 = "SELECT * FROM sinhvien";
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
									<td class="column1"><?php echo $count++?></td>
									<td class="column2"><?php echo $row['MaSV']?></td>
									<td class="column3"><?php echo $row['TenSV']?></td>
									<td class="column4"><?php echo $row['MaLop']?></td>
									<td class="column5"><?php echo $row['GioiTinh']?></td>
                                    <td class="column6"><?php echo $row['SĐT']?></td>
                                    <td class="column7"><?php echo $row['Email']?></td>
									<td class="column8"><?php echo $row['DiaChi']?></td>
									
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