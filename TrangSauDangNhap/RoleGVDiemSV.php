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
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVLop.php?class=">
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

                    <li class="nav-item active">
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
    <button class="ADD" id="add" onclick="ADD()">ADD</button>
            <script>
            function ADD() {
                document.getElementById("ADD").style.display = "block";
                document.getElementById("add").style.display = "none";
            }
            </script>
            
        <div class="card" id="ADD">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!">

               
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Mã môn học</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Tên môn học</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Số tín chỉ</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Lần thi</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Đánh giá</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Tên sinh viên</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Mã sinh viên</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Điểm quá trình</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Điểm thi</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Tổng kết học phần</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Điểm chữ</label>
                </div>

                
                
                
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">ADD</button>

            </form>
            <!-- Form -->

            </div>

        </div>
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
                                <td class="Diem5"></td>
                                <td class="Diem5"></td>
								
							</tr>
						</thead>
						<tbody>
								<tr class="rowkhoa">
									<td class="Diem1">1</td>
									<td class="Diem2">CSE450</td>
									<td class="Diem3">Lập trình nâng cao</td>
									<td class="Diem4">3</td>
									<td class="Diem5">1</td>
                                    <td class="Diem6">Đạt</td>
                                    <td class="Diem7">Phạm Thế Sơn</td>
									<td class="Diem8">175A071209</td>
									<td class="Diem9">7.5</td>
                                    <td class="Diem10">7.5</td>
                                    <td class="Diem11">7.5</td>
									<td class="Diem12">B</td>
                                    <td class="Diem5 update_Khoa" onclick="ADD()"><i class="fas fa-pencil-alt"></i></td>
                                    <td class="Diem5 remove_Khoa"><i class="fas fa-trash-alt"></i></td>
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