<?php
include ('head.php');
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
                        <a class="nav-link" href="RoleSVDiem.php">
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
								<tr>
									<td class="Diem1"></td>
									<td class="Diem2"></td>
									<td class="Diem3"></td>
									<td class="Diem4"></td>
									<td class="Diem5"></td>
                                    <td class="Diem6"></td>
                                    <td class="Diem7"></td>
									<td class="Diem8"></td>
									<td class="Diem9"></td>
                                    <td class="Diem10"></td>
                                    <td class="Diem11"></td>
									<td class="Diem12"></td>
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