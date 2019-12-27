<?php
include ('head.php');
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
                        <a class="nav-link" href="SinhVien.php">
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
                    <li class="nav-item active">
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
    
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="lop1">STT</th>
								<th class="lop2">Mã lớp</th>
								<th class="lop3">Mã giảng viên</th>						
								
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="lop1"></td>
									<td class="lop2"></td>
									<td class="lop3"></td>
									
									
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