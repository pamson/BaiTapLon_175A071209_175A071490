<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'GV'))
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
                        <a class="nav-link" href="RoleGiangVien.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="RoleGVLop.php">
                        <i class="fas fa-store-alt"></i>
                            <p>Lớp</p>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVSinhVien.php">
                        <i class="fas fa-graduation-cap"></i>
                            <p>Sinh viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVMonHoc.php">
                        <i class="fas fa-book"></i>
                            <p>Môn học</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVChiTietMH.php">
                        <i class="fas fa-book-open"></i>
                            <p>Chi tiết môn học</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVDiemSV.php">
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
    <?php include ("HoSoGV.php")?>
    <!-- Search form -->
    <form class="form-inline md-form form-sm mt-0 search">
         <i class="fas fa-search" aria-hidden="true"></i>
         <input class="form-control form-control-sm ml-3 w-75 input_search" type="text" placeholder="Search"
             aria-label="Search">
    </form>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class=" lop1">STT</th>
								<th class=" lop2">Mã lớp</th>
                                <th class=" lop3">Mã khoa</th>
                                <th class="lop4">Tên lớp</th>
								<th class=" lop5">Sĩ số</th>
								
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class=" lop1"></td>
									<td class=" lop2"></td>
									<td class="lop3"></td>
									<td class="lop4"></td>
									<td class="lop5"></td>
                                </tr>	
                                					
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